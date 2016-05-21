Ti=Existing Features of Records

0.sec=Cmacc syntax is:

1.sec=A "Record" is an ordered list of key/values.
      
2.sec=The values are strings.  They can be understood as: (i) html; (ii) the name of another Record; (iii) something else, for instance some computer code.

3.sec=A "Document" is the result of rendering a "Record".  Rendering starts with one key and returns its value, with {plugs} expanded as much as possible.

4.sec=Plugs are expanded by literal matching with the first Key in the namespace of the Record. 
      
5.sec=The namespace of a Record is (i) all the Keys in the Record (in the order they appear from top to bottom), (ii) the Keys in any Record2 named in that Record, with prefixing applied to both Keys and Plugs, (iii) recursively, depth-first.
      
6.sec=The namespace of Record names is all the Records in a specified Root.

00.sec=The above is coded in Primavera's parser. 

=[Z/ol/s6]
