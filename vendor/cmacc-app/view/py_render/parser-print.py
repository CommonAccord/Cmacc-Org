import sys
from implementation.mdtojson import m2j
from render_algo.node import Node

def main(argv):
    if len(argv) != 3:
        return print("Usage: python3 render.py <file_name> <directory> <key>")
    rname = argv[0]
    directory = argv[1]
    key = argv[2]
    root_node = Node.parse(m2j(rname, directory))
    print(Node.flatten(root_node.render(key)))

if __name__ == "__main__":
    main(sys.argv[1:])
