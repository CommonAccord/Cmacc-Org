Ti=<a href="index.php?action=doc&file=S/About/Conference/Stack/CRUD_0.md">CRUD</a>

0.sec=This lists a few operations on Cmacc Files.  This is only a start, and may be incorrect, but the idea will be apparent.  If there are a few canonical operations, then they can interoperate well, even when implemented in different applications and via decentralized access.
  
1.Ti=Create

1.sec=Create: i) an empty File with a user-determined name so the use can start a new editing exercise; ii) from a File, create a new File with the current File referenced at the bottom (extending, revising the current File); iii) create a File as in i) or ii) but with the name of the File being a hash of the File (with an optional notional Path and File name expressed as a Key/Value in the File). 

2.Ti=Read

2.sec=In a peer-to-peer system, "read" can be understood as Peer2 obtaining one or more files from Peer1, which Peer2 stores in Peer2's PDS.  Read can be done by http, git, ftp, etc.  The variants on this - caching and presenting in a browser for instance - can be seen as being either insecure or not-yet secured.

3.Ti=Update

3.sec=The issue of versioning has many levels.  Git provides at floor, and a very good one.  But we need at least one other idea.  We need a notion of next-draft.  That can be done in the Cmacc model by making a new File2 that has a Key/Value list of changes and references the old File1.  In some settings, we will want the names of these Files to indicate their order and meaning.  This is a very wide practice in law and elsewhere.  It corresponds to the practice in software release versioning.  For the moment, we have chosen a convention of adding a _01.md at the end of File names, with _0.md being the current, without guarantee of stability other than the git history.  The _01.md numbers currently have no technical guarantee of stability, it is more a promise by the maintainer than a certainty.  If we use hashed names, this issue disappears, but another one arises of naming, organizing, efficiently using .gitinclude, etc. 

4.Ti=Delete

4.sec=i) delete the File, ii) delete the contents of the File, but leave it's name (useful for proof, particularly for Files with hashed names).  Deletion can be an immediate result of the operator action, or can be programmed.  Programmed deletes are very important for a DRY platform.

5.Ti=Render

5.sec=Render some forms of "read."  Render has at least four formats - i) Print, ii) Doc, iii) Xray, iv) a list of each of the Key/Values used in rendering the Doc view (i.e., the complete text of the Doc, but not assembled)(useful for editing outside an app, e.g. by someone who doesn't use the app). 

6.Ti=Access

6.sec=Perhaps "access" is an aspect of each of the CRUD operations.

00.sec=<a href="index.php?action=doc&file=S/About/Conference/Stack/Access_0.md">Access</a>.
  
=[Z/ol/6]
