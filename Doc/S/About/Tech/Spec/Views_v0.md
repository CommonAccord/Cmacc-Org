Ti=A Cmacc-compliant parser:

1.Ti=Variables:

1.1.sec=Name of File to be parsed

1.2.sec=Name of Key to use as start for parsing (instead of being fixed as "Model.Root"

1.3.sec=View to be returned

1.=[Z/ol/s3]

2.Ti=View

2.1.sec="Doc" view with each value wrapped with metadata relating to its name and source file.  Enough info to permit interface to allow open/close viewing, and pop-up editing.

2.2.sec="Print" view without wrapping.

2.3.sec="Edit" view of the raw text in editable mode

2.4.sec="Raw" mode the text, no editing

2.5.sec="Map"(?) (now called Source) view with nice presentation and file names linked for navigation.

2.6.sec="Missing" list of keys not found.

2.7.sec="Used" list of key/values actually used in rendering the document, so can provide to another party in "source" form without disclosing the internal organization.

2.7.sec="Find"  a (partial) listing of keys and values available.  Could be part of graph navigation via "Map."  

2.8.sec=At some point this exercise becomes search - traversing the graph.  And probably that wants to be handles as graph queries.    

2.=[Z/ol/s8]

3.Ti="Punctuation"

3.0.sec=The parser should work with a variety of formats:
 
3.1.sec=the current flat file, source-code resembing

3.2.sec=JSON, for instance in blockchains, IPFS, etc.

3.3.sec=XML

3.4.sec=Databases - SQL and graph - for enterprise management.

3.=[Z/ol/s4]

=[Z/ol/4]  
