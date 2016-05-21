Ti=Existing Features of Records

0.sec=Cmacc syntax is:

1.sec=A "Record" is an ordered list of key/values.
      
2.0.sec=The values are strings.  They can be understood as: 

2.1.sec=html;

2.2.sec=the name of another Record;

2.3.sec=something else, for instance some computer code.

2.=[Z/ol-i/s3]

3.sec=A "Document" is the result of rendering a "Record".  Rendering starts with one key and returns its value, with {plugs} expanded as much as possible.

4.sec=Plugs are expanded by literal matching with the first Key in the namespace of the Record. 
      
5.0.sec=The namespace of a Record is:

5.1.sec=all the Keys in the Record (in the order they appear from top to bottom),

5.2.sec=the Keys in any Record2 named in that Record, with prefixing applied to both Keys and Plugs,

5.3.sec=recursively, depth-first.

5.=[Z/ol-i/s3]
    
6.sec=The namespace of Record names is all the Records in a specified Root.

00.sec=The above is coded in Primavera's parser. 

=[Z/ol/s6]