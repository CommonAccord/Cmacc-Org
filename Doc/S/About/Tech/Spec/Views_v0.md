A Cmacc-compliant parser:

1.  Variables:

    1.1. Name of File to be parsed

    1.2. Name of Key to use as start for parsing (instead of being fixed as "Model.Root"

    1.3. View to be returned


2.  View

    2.1. "Doc" view with each value wrapped with metadata relating to its name and source file.  Enough info to permit interface to allow open/close viewing, and pop-up editing.

    2.2. "Print" view without wrapping.

    2.3.  "Edit" view of the raw text in editable mode

    2.4.  "Raw" mode the text, no editing

    2.5.  "Map"(?) (now called Source) view with nice presentation and file names linked for navigation.

    2.6.  "Missing" list of keys not found.

    2.7.  "Used" list of key/values actually used in rendering the document, so can provide to another party in "source" form without disclosing the internal organization.

    2.7.  "Find" ;) a (partial) listing of keys and values available.  Could be part of graph navigation via "Map."  
    
    2.8.  At some point this exercise becomes search - traversing the graph.  And probably that wants to be handles as graph queries.    

3. Fetch

   3.0.  The parser should work with a variety of formats:
 
    3.1.  the current flat file, source-code resembing

    3.2.  JSON, for instance in blockchains, IPFS, etc.

    3.3.  XML

    3.4  Databases - SQL and graph - for enterprise management.
