import pytest
import sys
import json
sys.path.insert(0, '..')
from node import Node
# from mdtojson import getMap

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

def test_new_parse():
  test1 = "{ \
      \"root\": \"name\", \
     	\"graph\": { \
            \"name\": { \
                \"edges\": [], \
                \"data\": [{ \
                    \"key\": \"hello\", \
                				\"tokens\": [{ \
                          \"type\": \"literal\", \
                          \"value\": 1 \
                        }, { \
                            \"type\": \"literal\", \
                            \"value\": 2 \
                        }, { \
                            \"type\": \"literal\", \
                            \"value\": \"3\" \
                        }] \
                }] \
            } \
	  } \
  }"
  test2 = "{ \
      \"root\": \"name\", \
     	\"graph\": { \
            \"name\": { \
                \"edges\": [[\"key1\", \"name1\"]], \
                \"data\": [{ \
                    \"key\": \"hello\", \
                				\"tokens\": [{ \
                          \"type\": \"literal\", \
                          \"value\": 1 \
                        }, { \
                            \"type\": \"literal\", \
                            \"value\": 2 \
                        }, { \
                            \"type\": \"literal\", \
                            \"value\": \"3\" \
                        }] \
                }] \
              }, \
              \"name1\": { \
                \"edges\": [], \
                \"data\": [{ \
                    \"key\": \"hello\", \
                				\"tokens\": [{ \
                          \"type\": \"literal\", \
                          \"value\": 1 \
                        }, { \
                            \"type\": \"literal\", \
                            \"value\": 2 \
                        }, { \
                            \"type\": \"literal\", \
                            \"value\": \"3\" \
                        }] \
                }] \
              } \
            } \
	  }"
  test2_node2 = Node([], {"hello": [{"type": "literal", "value": 1}, {
      "type": "literal", "value": 2}, {"type": "literal", "value": "3"}]},
      "name1")
  test2_node = Node([("key1", test2_node2)], {"hello": [{"type": "literal", "value": 1}, {
                    "type": "literal", "value": 2}, {"type": "literal", "value": "3"}]},
                    "name")
  test1_node = Node([], {"hello": [{"type": "literal", "value": 1}, {
                    "type": "literal", "value": 2}, {"type": "literal", "value": "3"}]},
                    "name")
  test3_node = {
    "root" : "name",
    "graph" : {
      "name" : {
        "edges": [["key1", "name1"], ["key2", "name2"]],
        "data": 
          [{
            "key": "hello",
            "tokens": 
              [{
              "type": "literal",
              "value": 1 
              }, { 
                "type": "literal",
                "value": 2 
              }, { 
                "type": "literal", 
                "value": "3" 
              }]
          }]
      },
      "name1" : {
        "edges" : [["key3", "name3"]],
        "data": 
          [{"key": "hello1", 
            "tokens": [{
              "type": "literal", 
              "value": 1 
            }, { 
                "type": "literal", 
                "value": 2 
            }, { 
                "type": "literal", 
                "value": "3" 
            }]
          }]
      },
      "name2" : {
        "edges" : [["key4", "name3"]],
        "data" : 
          [
            {
              "key" : "hello2",
              "tokens" : [{"type" : "literal", "value" : 1}]
            }
          ]
      },
      "name3" : {
        "edges" : [],
        "data" :
          [
            {"key" : "hello3",
            "tokens" : [{"type" : "variable", "value" : "sweeswoo"}]
            }
          ]
      }
    }
  }
  test3 = json.dumps(test3_node)
  test3_node1 = Node([], {"hello": [{"type": "literal", "value": 1}, {
      "type": "literal", "value": 2}, {"type": "literal", "value": "3"}]},
      "name")
  test3_node2 = Node([], {"hello1": [{"type": "literal", "value": 1}, {
      "type": "literal", "value": 2}, {"type": "literal", "value": "3"}]},
      "name1")
  test3_node3 = Node([], {"hello2": [{"type": "literal", "value": 1}]},
      "name2")
  test3_node4 = Node([], {"hello3": [{"type": "variable", "value": "sweeswoo"}]},
                     "name3")
  test3_node1.edges = [("key1", test3_node2), ("key2", test3_node3)]
  test3_node2.edges = [("key3", test3_node4)]
  test3_node3.edges = [("key4", test3_node4)]
  assert Node.parse_new(test1).deep_equals(test1_node)
  assert Node.parse_new(test2).deep_equals(test2_node)
  n = Node.parse_new(test3)
  n.deep_to_string()
  print()
  test3_node1.deep_to_string()
  assert Node.parse_new(test3).deep_equals(test3_node1)
  assert False


def test_md2dict():
    for name in map(lambda s: "etm/" + s, ["Alice", "Bob", "Moby_Dick", "Purchase_Agreement"]):
        with open(name + ".json") as jf:
            print(jf.read(), getMap(name))
