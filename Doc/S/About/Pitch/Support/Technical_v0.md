Ti=Technical

1.Ti=CommonAccord - bare

1.sec=CommonAccord is organized as folders of files, with bare key=value pairs.  The notion is that each participant is a node in a peer-to-peer system of "personal data stores."  You have yours, I have mine, we have CommonAccord.org and whoever else we want.  Transacting is a matter of adding a file or group of files to each of our PDSs.  We can do that however we want.  We can share PDSs via git, through a third party, or on a blockchain or similar shared resource.  

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

5.Ti=CommonAccord - JSON, XML, Graph

5.1.sec=The file data model of bare key=values can be transformed into JSON, XML, a graph database or whatever is efficient or compatible.  We anticipate that JSON will be used for many exchanges, certainly those on blockchain.  Graph databases may be used internally, especially for large PDSs.

5.2.sec=Graph query languages may also prove to be the most generalizable way of expressing relationships that are more than simply traversing the prefixed links from one list to another.  For instance, while links currently support the idea of CEO.Spouse.Dog.Name, there is no way to get from the dog to the Dog's Spouse's CEO's company's name.  That might look like --Dog.--Spouse.--CEO.Name, or perhaps something else.  (Perhaps this introduces an element of instability, especially in a distributed system.  One could say that this is a search function and should not be treated as content.  E.g., if the Dog wants to claim a relationship to the dog's "owner" the dog should say so.  If someone wants to attribute ownership of the dog to someone, they can do so, but that is part of the other person, not part of the dog.)  Similarly, there is no syntax for, say, all of the shareholders of a company, or all of the kids in a class.  Again, this could be a query, and again, perhaps any query that results in a "document" should be recorded as such - as a list of each shareholder or each kid, which is recorded as such.   

5.=[Z/ol/s2]

=[Z/ol/5]