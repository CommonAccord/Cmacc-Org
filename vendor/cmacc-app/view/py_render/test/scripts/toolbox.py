import sys
from implementation.mdtojson import m2j
from render_algo.node import Node

def do_load(name, directory, roots):
    roots[name] = Node.parse(m2j(name, directory))
    if roots[name]:
        print(name, "is loaded as a root")
    else:
        print("Error: failed to find")


def do_stat(roots):
    print("Known roots are:" + "\n".join(roots))


def do_help(md_files_root, safe_words):
    print("Default root:", md_files_root)
    print("To exit, use:", " ".join(safe_words))
    print("Available functionalities are:")
    print("load <root name> <directory (relative to default root)>: load <root name> in <directory> into the system")
    print("render <root name> <key to render>: render in <root_name> the <key to render>")
    print("stat: print out known roots")


def do_render(name, key, roots, cache):
    node = roots.get(name, None)
    if node:
        cache[key] = Node.flatten(node.render(key))
    else:
        print("Error:", name, "isn't saved as a root node")


def do_flush(key, cache, out=None):
    cached = cache.get(key, None)
    if cached:
        if out:
            with open("out", "w") as f:
                f.write(cached)
        else:
            print(cached)
    else:
        print("Error:", key, "has never been rendered")


def main(argv):
    safe_words = frozenset(["exit", "quit", "done"])
    md_files_root = ("~" if len(argv) <= 1 else argv[1])
    roots = dict()
    rendered = dict()
    while True:
        try:
            line = input(">>> ")
        except EOFError:
            break
        if line in safe_words:
            break
        commands = line.split()
        if len(commands) == 1:
            if commands[0] == "stat":
                do_stat(roots)
                continue
            elif commands[0] == "help":
                do_help(md_files_root, safe_words)
                continue
        elif len(commands) == 3:
            if commands[0] == "load":
                do_load(commands[1], md_files_root + "/" + commands[2], roots)
                continue
            elif commands[0] == "render":
                do_render(commands[1], commands[2], roots, rendered.setdefault(commands[1], dict()))
                continue
            elif commands[0] == "flush":
                cache = rendered.get(commands[1], None)
                if cache:
                    do_flush(commands[2], cache)
                else:
                    print("Error:", commands[1], "has never been cached")
                continue
        elif len(commands) == 4:
            if commands[0] == "flush":
                cache = rendered.get(commands[1], None)
                if cache:
                    do_flush(commands[2], cache, commands[3])
                else:
                    print("Error:", commands[1], "has never been cached")
                continue


if __name__ == "__main__":
    main2(sys.argv)
