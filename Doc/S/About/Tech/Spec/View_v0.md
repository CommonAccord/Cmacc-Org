Ti=Cmacc-compliant rendering for blockchain and other databases:  

1.Ti=Render request format

0.sec=A view is returned by a rendering engine from a command in a format like: {TextToBeRendered}:{View}

1.Ti=Text To Be Rendered

1.1.sec=The text to be rendered is a serialized version of a CommonAccord record.

1.2.sec=E.g. "=[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]" would return that document.  

1.3.sec=Similarly, "Amount.$=$49,999;;=[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]" would return that document but with a modified amount.  

1.4.sec=Queries can be expressed in a record, then that record combined with the record  to be interrogated (and therefore the graph of info starting from there).  "[My/Query/PriceAndDate.md];;Data.=[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]"

1.=[Z/ol/s4]

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