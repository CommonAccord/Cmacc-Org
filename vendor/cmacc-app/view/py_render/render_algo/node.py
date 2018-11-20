"""
Core render algorithm wrapped in the class Graph
"""
import json
# import RenderTree from render_tree

class Node(object):
    """
    Node is the data structure that represents a legal document.
    Its most notable fields are:

    edges: a list of references to other documents with string associations
    data: a dictionary of local key-List<Token> pairs
    name: name of document
    """
    # NOTE: This implementation requires python 3.6 or above because it assumes
    #       that dictionaries maintain the ordering of keys.

    def __init__(self, edges, data, name):
        """
        Subgraphs is an object with contains a list key, graph pairs
        dictionary is the direct keys
        """
        # list of string, node tuples
        self.edges = edges
        # dict: string -> List<Tokens>
        self.data = data
        # name used for distinguishing edges with the same names
        self.name = name


    def render(self, key):
        """
        Render the input key according to this graph

        Returns a tree with metadata
        """
        root = dict()
        stack = [([], key, root)]
        while stack:
            prefixes, var, tree = stack.pop()
            tokens, metadata = self.find(prefixes, var)
            tree["metadata"] = metadata
            parts = tree.setdefault("children", [])
            for i, token in enumerate(reversed(tokens)):
                subtree = {"text": token}
                parts.insert(0, subtree)
                if i % 2: # Variable
                    stack.append((metadata["path"], token, subtree))
        # When everything is done, return the root
        return root


    def find(self, prefixes, var):
        """
        Given the prefixes and the variable, find the list of tokens associated
        with it.

        Returns a List<Token> - metadata pair, where metadata is a dictionary
        """
        possible_matches = [""]
        for prefix in prefixes:
            if prefix:
                possible_matches.append(possible_matches[-1] + prefix)
        possible_matches = [p + var for p in possible_matches]

        number_of_levels = len(possible_matches)
        possible_levels = range(number_of_levels)[::-1]
        visited = {self: {0: set(possible_levels)}}
        stack = [(self, 0, possible_levels, [], [])]
        best_level = -1
        best = ["{" + var + "}"], "Error: not found"

        while stack:
            node, mlen, possible_levels, path, names = stack.pop()
            still_possible = [l for l in possible_levels if l > best_level]
            for level in still_possible:
                tokens = node.data.get(possible_matches[level][mlen:])
                if tokens:
                    best = tokens, {"path": path, "names": names}
                    best_level = level
                    break
            # The following shortcut could come up for a perfect match
            # And it is important because this gurantees faster runtime than the
            # naive approach even when there is a perfect match
            if best_level == number_of_levels:
                break
            if still_possible:
                node._expand(mlen, possible_matches, still_possible, visited, stack, path, names)
        return best


    def _expand(self, mlen, possible_matches, possible_levels, visited, stack, path, names):
        """
        When this helper function is called, we look at all the edges the 'self'
        node is connected to and filter the ones that are both matching the path
        and unvisited and the corresponding level.
        """
        # Go through the edges in reversed priority to guarantee that the ones
        # with higher priority gets pushed onto the stack later
        for edge, neighbor in reversed(self.edges):
            new_possibilities = []
            tlen = len(edge) + mlen
            for level in possible_levels:
                if tlen > len(possible_matches[level]):
                    break
                if edge == possible_matches[level][mlen:tlen]:
                    # Check if the neighbor node has been visited at this mlen with given level
                    if level not in visited.setdefault(neighbor, dict()).setdefault(tlen, set()):
                        # Make sure it is mark visited for future encounters
                        visited[neighbor][tlen].add(level)
                        # Mark it on the stack so we can deal with it later
                        new_possibilities.append(level)
            if new_possibilities:
                stack.append((neighbor, tlen, new_possibilities, path + [edge], names + [neighbor.name]))

    # TODO: short-circuit comparison?
    def deep_equals(self, other_node):
        '''
        Compares nodes for equality at all levels (not just name). Used for testing.
        '''
        name_equals = other_node.name == self.name
        data_equals = self.data == other_node.data
        refs_equals = True

        # enforces ordering as well as equality
        for e1, e2 in zip(self.edges, other_node.edges):
            refs_equals = refs_equals and e1[0] == e2[0]
            refs_equals = refs_equals and e1[1].deep_equals(e2[1])

        refs_equals = refs_equals and len(self.edges) == len(other_node.edges)
        data_equals = self.data == other_node.data

        return name_equals and data_equals and refs_equals

    @staticmethod
    def flatten(tree):
        result = ""
        stack = [tree]
        while stack:
            current = stack.pop()
            if "metadata" not in current:
                result += current["text"]
                continue
            for each in reversed(current["children"]):
                stack.append(each)
        return result


    @staticmethod
    def parse(jstr):
        """
        Parses the input json string
        jstr: A json string w/ schema:
            name: str,
            edges: [{key: , node: }, ...]
            data: [{key: , tokens: [str/int, str/int, ...]}]

        Returns the Graph representation of it
        """

        jstr = json.loads(jstr)
        root = jstr["root"]
        graph = jstr["graph"]
        parsed = {}
        for name in graph:
            parsed[name] = Node([], graph[name]["data"], name)

        for name in graph:
            for edge in graph[name]["edges"]:
                parsed[name].edges.append((edge[0], parsed[edge[1]]))

        return parsed[root]

    # prints the whole graph, depth first, starting at self
    def deep_to_string(self, indent=""):
        print(indent + "BEGIN NODE")
        indent += "  "
        print(indent + "name: " + self.name)
        print(indent + "data: " + json.dumps(self.data))
        print(indent + "edges: ")
        for e in self.edges:
            print(indent + "key: " + e[0])
            print(indent + "value: ")
            e[1].deep_to_string(indent)
            print(indent[:-2] + "END NODE")
