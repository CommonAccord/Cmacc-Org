Format:

The thesis is that two aspects of Records are critical to the project 

    1. The Prose Object and graph notion of two kinds of data - key=values and Prefixed.=[Links]. 

        1. For simplicity of editing and flexibility of adding comments and the like, it is useful to have as little cruft as possible such as JSON or XML markup.  YAML and similar may have something to offer.  The current version has only the simplest possible format.   

    2. Files remain the canonical version of Records - at least those oriented to prose and code architecture.

        1. Files are the most nearly universal format for information.  
        
        2. Files are pervasive in law, and also in computing.  

        3. Git - the best system of collaboration - is file-oriented.
        

We think that key=values should not be "typed" (in the data sense) in the Record. "Typing" can be done in validation or interface, and the rules for "typing" can be expressed in referenced objects, but it should be OK for a user to type (in the keyboard sense) YMD=December 17, 2020 even if YMD=2020-12-17 is the preferred format.  The system can propose the correction - or make it.  Or leave it uncorrected, surely pattern-recognition can make sense of the variations.  (There is a deeper design issue here.)


This does not exclude other formats for Records. A production transacting system will use a database, probably a graph database.  Communications of transactions will often use formats such as JSON or XML.  But see Databases.md for the Mirage/OCaml decision to skip over the notion of file systems and manage everything as git repos.


