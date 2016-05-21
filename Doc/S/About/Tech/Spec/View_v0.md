Ti=A Cmacc-compliant parser:  

1.Ti=Parse request format

1.0.sec=A view is returned by a parser from a command in a format like: {NameOfFile}:{NameOfKey}:{View}

1.1.sec=Name of File to be parsed

1.2.sec=Name of Key to use as start for parsing (instead of being fixed as "Model.Root")

1.3.sec=View to be returned

1.=[Z/ol/s3]

2.Ti=Some Views

2.1.sec="Xray" view with each value wrapped with metadata relating to its source file and key name.  Enough info to permit interface to allow pop-up editing.

2.2.sec="Doc" view with each Value wrapped in its key, but not the file name.  Like the current Doc view.  Does not reveal the file structure of the generating party. 

2.3.sec="Print" view without wrapping.

2.4.sec="Edit" view of the raw text in editable mode

2.5.sec="Raw" mode the text, no editing

2.6.sec="Map"(?) (now called Source) view with nice presentation and file names linked for navigation.

2.7.sec="Missing" list of keys not found.

2.8.sec="Used" list of key/values actually used in rendering the document, so can provide to another party in "source" form without disclosing the internal organization.

2.9.sec="Find"  a (partial) listing of keys and values available.  Could be part of graph navigation via "Map."  

2.8.sec=At some point this exercise becomes search - traversing the graph.  And probably that wants to be handles as graph queries.    

2.=[Z/ol/s9]

3.=[S/About/Tech/Spec/Punctuation_v0.md]

=[Z/ol/3]