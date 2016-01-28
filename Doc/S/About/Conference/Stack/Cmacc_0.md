Ti=Cmacc

0.sec=Cmacc is pronounced "Smack."   It is the informal name for the CommonAccord data model.  The following is a pretty formal description of Cmacc:

1.sec=A Cmacc repository is a folder of files ("Files"), which may have subfolders. 

2.0.sec=The files are plain text, and have lists of key/values ("Key/Value"), where a Value can be either a string or the name of another File.  For instance:

2.1.sec=Model.Root={HW}

2.2.sec=HW=Hello World

2.3.sec==[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]

2.4.sec=Buyer.=[U/id/acme_incorporated]

2.90.sec=The Key/Values are delimited by a start-of-line, the first equals sign ("=")(the Value may contain an equals sign) and an end-of-line.  (There is reason to want to change this to a double end-of-line.)
 
2.=[Z/ol-none/s4]

3.sec=A File can be rendered into a text (the "Doc" view of the File) by starting with a specific Key (currently "Model.Root") and expanding its Value.  Expanding is done by replacing any strings wrapped in {braces} (Variable). 

4.sec=The replacement is based on matching the Variable name with the <i>first</i> matching Key name.

5.sec=A [Path/Name_of_Another_File] is matched with a file path and name.  The effect is is as if the File in that file was copied into the current File.

6.sec=The notion of "first" is based on the File.  The first Key in the File (reading from the top) is the first.  If there is no Key that matches, then referenced Files are searched, in the order they appear (reading from the top), recursively, depth-first.  The match, of course, is with the prefixed Key. 

7.sec=The only other feature is "prefixing."  When referencing another File, the Key can be empty (see below in the source view of this File) or it can be a string (see 3.= in this File).  If the Key has a string, then the string is added to the front of each Key in the referenced File and to each Variable in the referenced File.  This is chained, so that if a File uses a prefix when referencing another File, and that other File uses a prefix when referencing a third File, the prefix of the third File is the first prefix tacked on to the second prefix.  This chaining can be as long as you want.  When expanding a prefixed Variable, if no match is found, then the right-most prefixing link is removed and it is tried again.  (This sounds complicated, but is extremely convenient and comports with what we expect the great majority of the time.)

8.0.sec=Some examples:

8.1.sec=A File of deal points references parties and a form of document:  <a href="index.php?action=source&file=Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md">Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md</a>

8.2.sec=File names may be "hashes", guaranteeing uniqueness and allowing certain kinds of proof even when maintaining the confidentiality of information in a "DRY" system: <a href="index.php?action=list&file=S/Sandbox/Blockchain/">S/Sandbox/Blockchain/</a>

8.=[Z/ol/s2] 
 
90.sec=The file format is the canonical form, but the data model can also be done in a database, including a blockchain or a graph database.  It may be convenient to use JSON.

=[Z/ol/s8]