Model.Root=<b>{Ti}</b><br>{Intro.sec}<ol><li>{Repo.Sec}<li>{File.Sec}<li>{Doc.Sec}<li>{EG.Sec}<li>{Plus.Sec}</ol>{Extro.sec}

Ti=<a href="index.php?action=doc&file=S/About/Conference/Stack/Cmacc_0.md">Cmacc</a>

Intro.sec=Cmacc is pronounced "Smack."   It is the informal name for the CommonAccord data model.  The following is a semi-formal description of Cmacc.  The description is based on a file format for a Cmacc "Record".  A Record may be in any format, but for a variety of reasons to be expanded, the File format seems canonical.  (The functional part of a Record is only slightly more complex than a "Dictionary" as used in Python. The difference is that one can "prefix" another dictionary.) With that as prologue:

Repo.Ti=Repository

Repo.sec=A Cmacc repository is a folder of files ("Files"), which may have subfolders. The Files may have meaningful names, or may be named by hashing the content of the File.

Repo.=[Z/ol/0]

File.Ti=Files

File.1.0.sec=The Files are plain text, and each consists of a list of key/values ("Key/Value"), where the Value can be either a string or the name of another File.  For instance:

File.1.1.sec=Model.Root={HW}

File.1.2.sec=HW=Hello World

File.1.3.sec==[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]

File.1.4.sec=Buyer.=[U/id/acme_incorporated]
 
File.1.=[Z/ol-none/s4]

File.2.sec=The Key/Values are delimited by a start-of-line, the first equals sign ("=")(the Value may contain an equals sign) and an end-of-line.  (There is reason to want to change this to a double end-of-line.)

File.3.sec=The file format is the canonical form, but the data model can also be done in a database, including a blockchain or a graph database.  It may be convenient to use <a href="index.php?action=json&file=S/About/Conference/Stack/Cmacc_0.md">JSON</a>.  

File.=[Z/ol/s3]

Doc.Ti=Rendering Documents

Doc.0.sec=A File can be rendered into a text (the "Doc" view of the File).

Doc.1.sec=Rendering starts with a specific Key (currently "Model.Root") and expands its Value.  Expansion is done by replacing any strings wrapped in {braces} (Variable). 

Doc.2.sec=The replacement is based on matching the Variable name with the <i>first</i> matching Key name.

Doc.3.sec=The notion of "first" is based on the File.  The first Key in the File (reading down from the top) is the first.  If there is no Key that matches, then referenced Files are searched, in the order they appear (reading from the top), recursively, depth-first.  The match of a Key in a referenced File is, of course, based on the "prefixed" Key (see the next two items). 

Doc.4.sec=A [Path/Name_of_Another_File] is matched with a file path and name.  The effect is as if the list of Key/Values in that File was copied into the current File.

Doc.5.sec=The only other feature is "prefixing."  When referencing another File, the Key for the reference can be empty (see below in the source view of this File) or it can be a string (see 2.= in this File).  If the Key has a string, then the string is added to the front of each Key and to the front of each Variable in the referenced File.  This is chained, so that if a File3 uses a prefix "Buyer." when referencing File2, and File2 uses a prefix "CEO." when referencing File1, then each of the Keys in File1 is treated as being prefixed by "Buyer.CEO." This chaining can be as long as you want.  When expanding a prefixed Variable, if no match is found, then the right-most prefixing link is removed and it is tried again.  ("Buyer.") (This sounds complicated, but is extremely convenient and comports with our instincts the great majority of the time.)

Doc.=[Z/ol/s5]
  
EG.Ti=For Example

EG.1.sec=A File of deal points references parties and a form of document:  <a href="index.php?action=source&file=Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md">Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md</a>

EG.2.sec=File names may be "hashes", guaranteeing uniqueness and allowing certain kinds of proof even when maintaining the confidentiality of information in a "DRY" system: <a href="index.php?action=list&file=S/Sandbox/Blockchain/">S/Sandbox/Blockchain/</a>

EG.=[Z/ol/s2] 

Plus.=[S/About/Conference/Stack/Cmacc_Extensions_0.md]

Extro.sec=<a href="index.php?action=doc&file=S/About/Conference/Stack/Folder_0.md">Folders</a>.