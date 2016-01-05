Ti=Object Model for {DRY} {P2P} Transacting

1.sec=Each person has one or more {PDSs}.

2.sec=A {PDS} consists of {Cmacc} "{lists}" and other files. The {lists} are formatted as files (canonical) or as records in a database, for instance a graph database.
 
3.sec=The user can manage the {lists} by adding, deleting, archiving, etc. the files.  They can use tools such as text editors and git (and GitHub) to collaborate on collections of {lists}.  This can be improved by interfaces and apps.

4.sec=Transactions are done by creating and synchronizing some new {list}s across the {PDSs} of the participants.  This can be done by any method satisfactory to the participants.  Some possibilities include git-based repos for the particular transactions, file attachments to emails, or sharing a server.

5.sec=A preferred way to synchronize is to exchange {lists} via payment systems, where signature and transfer of value is handled by the payment system.  Payment systems give receipts which have key=values that can be used to record and reference {lists}.  More advanced payment systems such as blockchains may automate transaction flows and conditions.

6.sec=In many circumstances, participants will not need to retain all of the details of a transaction.  By automating access and using hashes to allow post-hoc verification, {PDSs} can make a "{DRY}" transaction system - where each element of data has a canonical source and all uses of that data consist of copies of the necessary portions that are discarded as soon as no longer needed. 

7.sec=Access to a {PDS} may be managed directly by the owner of the {PDS}, but the owner may also arrange for a hosting service or other person to provide access.  Hosting, and therefore reliable access, is particularly important in a {DRY} data environment where others may need rapid, reliable access to elements of the data.  "Hosting" may be virtual, for instance on a blockchain or similar technology. 
 
Note=Discuss:
 
8.sec=The permissions, requests, and receipts for access can be handled like other transactions in the system - each is a transaction stored in the participants' {PDSs}, and subject to agreement regarding discarding.

9.sec=See, e.g., <a href="http://hardjono.mit.edu/sites/default/files/documents/CommonAccord_Provenance_11182015.pdf">http://hardjono.mit.edu/sites/default/files/documents/CommonAccord_Provenance_11182015.pdf</a>

=[Z/ol/s9]


Def.PDS={PDS} means a collection of information, organized as files or a database, which contain information about a person (natural, legal or role).  

Def.Cmacc={Cmacc} is lists of key/values, where the content of the values is either i) a string of html text, ii) the identifier of another list, or iii) other content (thereby associated with the "object" that the list represents).  A {Cmacc} document is the result of rendering a list, where one starts with a single key (by default "Model.Root") and expands any {expression}s in the value.  The exansion is based on the "first" matching key, where the key is found by scanning the list (from top to bottom) and then any other lists referenced in the list, recursively, depth-first.  (Details for "prefixing" and "deprefixing.")

Def.DRY={DRY} means <a href="https://en.wikipedia.org/wiki/Don%27t_repeat_yourself">don't repeat yourself</a>.  It is a method for improving consistency and reliability in a system.  In a data environment, it is a way to reduce vulnerability from promiscuous creation of needless versions of information. 

DRY=<span class="definedterm">DRY</span>

Cmacc=<span class="definedterm">Cmacc</span>

CDL=<span class="definedterm">Center for Distributed Law</span>

List=<span class="definedterm">List</span>

Lists=<span class="definedterm">Lists</span>

list=<span class="definedterm">list</span>

lists=<span class="definedterm">lists</span>

PDSs=<span class="definedterm">Personal Data Stores</span>

PDS=<span class="definedterm">Personal Data Store</span>

P2P=<span class="definedterm">Peer-to-Peer</span>

P2p=<span class="definedterm">Peer-to-peer</span>

p2p=<span class="definedterm">peer-to-peer</span>