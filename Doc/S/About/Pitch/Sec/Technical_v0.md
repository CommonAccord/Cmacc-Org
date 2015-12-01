Ti=Technical

1.Ti=CommonAccord - bare

1.1.sec=CommonAccord is organized as folders of files, with bare key=value pairs.  The notion is that each participant (including CommonAccord.org) is a node in a peer-to-peer system of "personal data stores."  You have your, I have mine, we have CommonAccord and whoever else we want.  Transacting is a matter of adding a file (or ping-pong of one file after another) to each of our PDSs.  We can do that however we want.  We can even share PDSs, either through a trusted party or third party, or on a blockchain or similar shared resource.  
1.2.sec=The file data model can be transformed into JSON, XML, a graph database or whatever is efficient or compatible.  We anticipate that JSON will be used for many exchanges, certainly those on blockchain.  Graph databases may be used internally, especially for large PDSs.

1.=[Z/ol/s2]

2.Ti=Blockchain and UMA

2.sec=A "complete" solution to the law and software of transacting can be created by complementing P2P transacting systems built on the blockchain or competing technologies.  Payment systems are also receipt systems.  Receipts can carry key=values which, when evaluated using CommonAccord expansion, can include complex documents from codified sources.  <a href="http://hardjono.mit.edu/docs">hardjono.mit.edu/docs</a>

3.Ti=Extensions

3.1.sec=CommonAccord in its current form has an extremely limited feature set.  You can add or override a key=value, or you can add another list.  Puncto.  This keeps it simple - any aspect of the result can be modified by the end-user creating or modifying a key=value or adding a list. 

3.2.sec=But this has limitations.  There are no spreadsheet functions, for instance to add a column of numbers.  No database access functions, for instance to return a list of products ordered.  Not even automatic paragraph (re)numbering.

3.3.sec=These solutions can, and probably should, come from technical layers of the solution, not from CommonAccord.  For instance in blockchain, the "smart contracts" support calculations.  (The original fitting point identified by Primavera.) Instead of doing an addition of a column of numbers, a CommonAccord text can simply reference the total, which the smart contract can provide.  Similarly in other systems of automation.  It may be interesting when integrating CommonAccord to conceive of some functionality as "smart lists."  Inclusion of a list such as PY:=[W/org/python/python_v3-0] would permit evaluation of statements such as {PY:(Price+Tax)}.  There is work yet to do here.

3.=[Z/ol/s3]

4.Ti=CommonAccord - Hashed

4.1.sec=Instead of using a hierarchical file tree with natural language names, it is possible to save each edit as a file whose name is created by hashing the file.  If the reference to the file which provides the previous state is included as a link at the end of the file, this provides a reliable way to have rapid increments on the texts without conflict.  If one further saves a key=value which has a notional folder/s/and/file/name, then there can be two views of the code, one of which looks like a folder view and the other like hashes.

4.2.sec=See, e.g. <a href="index.php?action=list&file=S/Sandbox/HashFileNames/">S/Sandbox/HashFileNames/</a>

4.=[Z/ol/s2]

=[Z/ol/4]