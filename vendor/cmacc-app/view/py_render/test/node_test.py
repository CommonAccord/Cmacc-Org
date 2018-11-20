import pytest
import sys
sys.path.insert(0, '..')
from node import Node
from mdtojson import getMap

def test_deepEquals():
  test1 = Node([], ("hello", ["1", "2"]), "test1")
  test2 = Node([], ("hello", ["1", "2"]), "test1")
  test3 = Node([("test1", test1)], ("hello1", ["1", "2"]), "test2")
  test4 = Node([("test1", test1)], ("hello1", ["1", "2"]), "test2")
  assert test1.deep_equals(test2)
  assert test3.deep_equals(test4)


def test_parse():
  test1 = "{\"name\": \"test1\", \"edges\": [], \"data\": [{\"key\": \"hello\", \"tokens\": [1, 2, \"3\"]}]}"
  test1_node = Node([], {"hello": [1, 2, "3"]}, "test1")
  to_verify = Node.parse(test1)

  assert Node.parse(test1).deep_equals(test1_node)


def test_md2dict():
    for name in map(lambda s: "etm/" + s, ["Alice", "Bob", "Moby_Dick", "Purchase_Agreement"]):
        with open(name + ".json") as jf:
            print(jf.read(), getMap(name))
