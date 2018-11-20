#!/usr/bin/python
import json
import re

def m2j(name, directory):
    """
    for hotwiring the old application
    """
    graph = dict()
    jdict = {"root": name, "graph": graph}
    unfinished = [name]
    while unfinished:
        current = unfinished.pop()
        if current not in graph:
            graph[current] = {"data": {}, "edges": []}
            with open(directory + "/" + current) as f:
                for line in f:
                    line = line.rstrip("\n")
                    for i, c in enumerate(line):
                        if "=" == c:
                            k = line[:i]
                            v = line[i+1:]
                            if v and v[0] == "[" and v[-1] == "]":
                                graph[current]["edges"].append([k, v[1:-1]])
                            else:
                                graph[current]["data"].setdefault(k, re.compile("[\\{\\}]").split(v))
                            break
            for edge, neighbor in graph[current]["edges"]:
                unfinished.append(neighbor)
    return json.dumps(jdict)


def md2json(name, directory):
    """
    Takes a name of a md file (without postfix) and a directory and produce a
    json string representation of the light weight graph
    """
    graph = dict()
    jdict = {"root": name, "graph": graph}
    unfinished = [name]
    while unfinished:
        current = unfinished.pop()
        if current not in graph:
            graph[current] = getMap(directory + "/" + current + ".md")
            for edge, neighbor in graph[current]["edges"]:
                unfinished.append(neighbor)
    return json.dumps(jdict)


def getMap(full_path):
    """Takes in a string that is the name of an .md file
    and returns a json string
    Takes in name of file without the .md extension
    """

    h = { "data":{}, "edges":[] }
    with open(full_path) as f:
        for line in f:

            line = line.rstrip("\n") # removing newline char

            # separating keys and values
            for i, c in enumerate(line):
                if "=" != c:
                    continue
                k = line[:i]
                v = line[i+1:]

                if len(v) > 1 and v[0] == "[" and v[-1] == "]": # is an edge
                    v = v[1:-1] # remove brackets
                    # add to edges list
                    h["edges"].append([k,v])

                else: # is data
                    if not k in h:
                        # add to data dict
                        h["data"][k]= parseValue(v)
                break

    return h

def parseValue(v):
    """In: the value to be parsed
    Out: a list of alternating Literals and  Variables.
    Both the first and last element in the list will always be a
    Literal.
    """

    #splitting value @ curly braces
    l = re.compile("[\\{\\}]").split(v)
    return l
