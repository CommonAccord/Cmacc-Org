Ti=Tech:

1.Ti=Packages ("Cmacclets")

1.0.sec=A set of files organized as Doc/; File/; view/; and vendor.  

1.1.sec=Doc/ has Cmacc text.  (Should it be called "Cmacc/").

1.2.sec=view/ and vendor/ are technical; view and controller versus model; verbs as opposed to nouns. 

1.00.sec=The goal is to be able to community a data package - for instance an a/v work or a medical scan - with accompanying text and functions.

1.=[Z/ol/s2]

2.=[S/About/Tech/Spec/Punctuation_v0.md]

3.Ti=Existing Records

3.0.sec=Cmacc syntax is:

3.1.sec=A "Record" is an ordered list of key/values.
      
3.2.sec=The values are strings.  They can be understood as: (i) html; (ii) the name of another Record; (iii) something else, for instance some computer code.

3.3.sec=A "Document" is the result of rendering a "Record".  Rendering starts with one key and returns its value, with {plugs} expanded as much as possible.

3.4.sec=Plugs are expanded by literal matching with the first Key in the namespace of the Record. 
      
3.5.sec=The namespace of a Record is (i) all the Keys in the Record (in the order they appear from top to bottom), (ii) the Keys in any Record2 named in that Record, with prefixing applied to both Keys and Plugs, (iii) recursively, depth-first.
      
3.6.sec=The namespace of Record names is all the Records in a specified Root.

3.00.sec=The above is coded in Primavera's parser. 

3.=[Z/ol/s6]

4.Ti=Extensions

4.0.sec=The following seem necessary extensions to parsing:

4.1.sec=There needs to be a naming convention for the _second, and _third_, etc. highest priority Key in the Record's namespace.  Foo=This value used to say: {Foo//-1}.

4.2.sec=The namespace of Records can be augmented by specifying another Root.  This additional Root2 adds to the namespace of the Root in the same way that referencing a Record2 adds to the namespace of a Record.  The Root2 is treated as having higher priority than the basic Root.

4.00.sec=It is desired to keep the functions and syntax very simple.

4.=[Z/ol/s2]

5.Ti=Smart Folders

5.0.sec=A very useful expansion would be a "smart" Folder.

5.1.sec=For example, to handle the mass of possibilities currently at Z/....  These are only a few of the possibilities.

5.2.sec=They could be replaced by a bit of code (a smart Folder) that intercepted the request for a file and returned a calculated Record.

5.3.sec=Of course, particular Records in the folder could be overridden in the usual way.

5.=[Z/ol/s3]

=[Z/ol/5]