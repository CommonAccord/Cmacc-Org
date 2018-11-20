#!/usr/bin/python
import pytest
import json
import sys

sys.path.insert(0,"..")
from implementation.mdtojson import *
from render_algo.node import Node

def get_map_easy_maps_test():
    """This function tests the get_map
    function in the mdtojson on the
    set of easy maps"""

    assert getMap("etm/Alice.md") == json.load(open("etm/Alice.json"))
    assert getMap("etm/Bob.md") == json.load(open("etm/Bob.json"))
    assert getMap("etm/Moby_Dick.md") == json.load(open("etm/Moby_Dick.json"))
    assert getMap("etm/Purchase_Agreement.md") == json.load(open("etm/Purchase_Agreement.json"))

def NDA_test():
    jstr = md2json("Acme_Ang_NDA", "NDA")
    rootNode = Node.parse(jstr)
    tree = rootNode.render("Model.Root")
    with open("NDA/NDA_rendered.html", 'r') as f:
        assert f.read() == Node.flatten(tree)


def get_tests():
    """gets all the tests
    """
    return [get_map_easy_maps_test, NDA_test]


if __name__ == '__main__' :

    print('Running tests...')
    for test in get_tests():
        test()
    print('All tests passed!')
