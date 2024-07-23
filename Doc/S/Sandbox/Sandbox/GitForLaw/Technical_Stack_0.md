An Ecosystem of Contracts - Technical Stack

(This should be moved to GitHub.) 
WHEREAS: 

Legal is mostly very inefficient, often confused, inadequately accessible, needlessly opaque.

The thesis is that a combination of:
Front line transactors (lawyers, business people, clinicians, machines) documenting the steps in their transactions as nodes in an agnostic graph, and
AI identifying patterns in those nodes,
can make a unified system of transacting that is both efficient and open to differences (language, jurisdiction, business domain, culture, preference, idiosyncrasy).  That will enable convergence without imposing it.  (A General System for AI-Driven Fluidification and Codification of Markets) 



And that an important piece of this solution will be collaboration on legal document templates in graph format.  Hosted on GitHub, and  governed in Paris? 

And since context is important, this can/must be done in a “functional” way - where the entire context of each step is referenced in the step:  (i) parameters, ii) prose, iii) code, iv) antecedent step(s)). http://www.commonaccord.org/i.php?v=l&f=bqc/fr/bnpp/a5we/Account/Check/00001/ 
(Perhaps “functional” is misused here.  It is assumed that there are side-effects: a notice of goods shipment should be accompanied by actual shipment, etc.  The “functional” aspect might be just with respect to the records, not the reality.  The context should include everything identified by any node as relevant.  E.g., a form of agreement would include links to laws identified as relevant (see the GA4GH model); a code snippet would include a reference to the runtime environment.)

And that the solution should be malleable - in any next step, any element of the prior solution - whether parameter, prose or code -- should be overridable.  This is important precisely because we don’t know (and should remain aware of our ignorance); the solution should remain agnostic.  This is possible if each record lists its dependencies and the override method is generalized.  (Is this the same as git submodules, or even a git commit? See Fit with Git:)  (For the word “malleable” - https://malleable.systems/)    

And that this approach is consistent with other automation approaches, such as identity management (OAuth, UMA, OpenID, https://hardjono.mit.edu/sites/default/files/documents/CommonAccord_Provenance_11182015.pdf) and algorithmic expressions (e.g., Excel spreadsheet formulae and Smart Contracts) (Wise Contracts: https://papers.ssrn.com/sol3/papers.cfm?abstract_id=2925871).

And that a part of this graph with long-term impact is a collection of legal forms expressed in “source” format, for all purposes in all languages, with multiple authors and publishers.  An electronic Napoleonic Code, or legal equivalent of Linux. Centre for Decentralised Law.  Triantis’s “Contract Wiki” but agnostic, and hosted as git repos. 

And a “knowledge graph” is what enterprise (and everyone else) really needs.  It doesn’t help to know some of the events, you need all of them.  - “The Enterprise Perspective on Blockchains, Smart Contracts, Standards, Graphs, Sourcing and “Trust” - with Thierry Perrouault of Orange.

And the basic paradigm of an inheritance-based knowledge graph is perhaps “memoization” - when making a new step in a transaction, calls are made to resources in the graph, and if there isn’t already an answer then an external resource is pinged  (human (lawyer, party, other) or  machine (fulfillment system, IoT, other)).  The result, whatever it may be, is stored and can be recalled.  (Norvig et al.) (There may be a difference: in classic memoization, there is a deterministic (if expensive) answer, while we assume the domain is not understood, and all we can get is a best guess.  (The system learns this way. Some areas will be susceptible to systematization - even expression as algorithms.  Or “oracles” in blockchain-lingo.)

For a very broad vision, see the EU study “Modelling the EU Economy as an Ecosystem of Contracts.” 

A shorter broad vision, is Let’s create a “Centre for Decentralised Law”, done for Dan Linna’s conference. 

A video introduction to the experience (so far) is here -  https://www.youtube.com/watch?v=4ZfsyTPYFIA
(startup docs with navigation).

From an ecosystem perspective, this is pretty much just getting lawyers on git - https://www.youtube.com/results?search_query=gitforlaw 

NOW THEREFORE:
Technical:
Stages
Stage1 - validate the basic document rendering concept:  Narrative version of the core paradigm (currently PoC-ed in perl, and version with edit-in-place interface and navigation shown at https://www.youtube.com/watch?v=4ZfsyTPYFIA):
Given a Root tree of Records where:
each Record is 
a hash of key/values and 
a list of other Records referenced with/without Prefixes
Buyer.=[ID/Acme_Inc]
=[Form/NDA/Seller2Buyer]
Each Record has a unique name
The keys are more or less any string, case-sensitive, without leading or trailing whitespace
The values are strings and may contain {Entities} and HTML markup.
And given an input of:
the name of a Root1
the name of a Record1
the name of a Key1
a desired View
Return a string which is:
The Value of the Key1, recursively expanding any {Entities}
By replacing the {Entities} with the value of a matching Key
Finding the Key in the Record, or in a linked Record, inquiring depth-first
(Note, the search for an match always starts from Record1.) 
And (this is complex to explain but was inherent in the perl):
Where the {Entitiy} is in a string that is in a Prefixed Record, then treat the {Entity} as being {PrefixEntity}.  E.g. if the Record2 is referenced as Buyer.=[Record2], then {Name} is treated as {Buyer.Name}.  Recursively.  So if {Name} is in Record3 and Record2 references it as President.=[Record3], then {Name} is treated as {Buyer.President.Name}.
Deprefixing.  If there is no match for {Buyer.President.Name}, then look for {Buyer.Name} and then for {Name}.  (Note - this deprefixing has nothing to do with the periods, it works the same for {BuyerPresidentName}, if the references are Buyer=[Record2], President=[Record3]. The periods are characters like any other.)  (Note also that the deprefixing starts from the rightmost Prefix.)
Leaving any unmatched {Entities} in the string (optionally marking them in red).
And, depending on the View, wrapping each substitution with metadata about its source (Record and Key) to aid navigation and editing.
Stage 2:  Evaluate as a matter of graphs:
Problems with Stage 1:
How to fit with existing taxonomies/ontologies/ecologies:
Identities: for instance GLEIF for “legal persons”, what other systems
Assets: vehicles, patents (issued, pending, applied), containers, SKUs, …
Transaction types:  ACTUS (financial), ISDA, EDI, etc.
Document Types: FIDIC, AIA, Govt forms, etc.
Can’’t traverse references in the other direction.  E.g.  of what companiies is this person a “President.”?  
Crazy multiplicity of Records to implement some simple  logics - e.g. the paragraph widgets at G/Z/. 
Solution? A smart folder that receives a request for a Record and calculates the response.  This is consistent with the basic file and override model.  It leads to a kind of general purpose programming.) Ideally, it would return the content of an actual file (Record) in the tree, and do the calculation only if there was no Record at that place  in the tree. (Note this would allow overriding.  I would also allow Memoization.)
Need to connect:
To Excel spreadsheets (they can be understood as a matrix of sheet.column.row) and maybe borrow their formulae (very widely used)), Word (import/export/in-place-edit/clause-picking/clause-submission)
To automation systems (UML??)
Use of multiple Roots.
When looking for a Record, look first from this Root, then from this other Root.  (With notion of prefixing. Same paradigm as finding a Key.)
Versioning:  
Currently use two different planes:
Version numbering of Record name - i.e., 0.md is the current.  01.md would be the first stable. 
Git - for the Root and all Records, with use of submodules (in a goofy way because of Heroku limits).  So a specification of the git hash makes something certain.
Have played a bit with IPFS.  http://www.commonaccord.org/i.php?v=s&f=ipfs/QmbnngTXmT6XuVJzS2sbuuynQiy83ELU3bLXuKA8Yoczc7
Semantic web - e.g. Underlay.org??  
Syntaxes (am I using the right word?  What @xmlgrrl called “punctuation”)
HTML - yes, I’ve found HTML the best format for text.  It’s in all the current materials. E.g. http://www.commonaccord.org/i.php?v=s&f=G/Agt-NDA-CmA/Demo/Acme-Ang/0.md  
Some argue for markdown, and I used that a lot in early versions (Mediawiki and XWiki), but  i) it doesn’t nest right unless transformed to HTML before rendering, ii) is mostly unnecessary because you rarely need to do much formatting since there are already models to reference and iii) it adds a layer of idiosyncrasy because markdown gets transformed into HTML anyway.
HTML is universal and has all the features needed for documents.  CSS allows reformatting for various purposes (see some of the different views on the site), Javascript allows things like pop-up editing in place and more navigation. https://www.youtube.com/watch?v=4ZfsyTPYFIA 
Persisting:
For standards collaboration - the files of cruftless, "\nKey=Some text with {Entities}\n" works well in:
Git-based collaboration.  I see legal document standards collaboration as identical to software source code collaboration.   I (abusively) suffix the files with .md so they present well on GitHub. One would want to abstract the suffix away - e.g. =[NDA/Form/0] would resolve to NDA/Form/0.md in flat files, and some .json etc. when found there.
Managing files locally.  (Files are well-known, fit in doc management systems, etc.)  git, GitHub Desktop, Visual Studio, etc. make syncing easy to manage.
For communication, JSON is much better - e.g. on Interledger, blockchains, most other transacting interactions.  JSON-LD is an obvious choice, but also has far too many features.  The Brown U team did their own JSON with only two data types - data (strings) and edges (references). https://github.com/adonalsium/common_accord/tree/dev
For management - a graph database.  An enterprise, bank, hospital, government will have lots of transactions and events and need to make sense of them.  The graph picture of them will likely drive semantics.  (The legal will drive another part.) I played with NEO4J.
Semantic web.  Is this different or the same as “graph”?  Underlay.org, IPFS, …
Interfaces:
Web browser for lightweight.  Can do popup edit-in-place for both source and the rendered documents (see the video https://www.youtube.com/watch?v=4ZfsyTPYFIA) as well as a good deal of navigation.  Print in PDF from the screen or use one of the HTML to PDF converters for a better result.  Tech novices (e.g., lawyers and law students) can be onboarded gently via direct editing on GitHub.com (rough - for possible article at law.mit.edu https://www.youtube.com/results?search_query=gitforlaw) 
Text editors - IDEs, Visual Studio, etc. for heavy work.  This is the future of legal document jockeying.
Transaction systems - the vast majority of events that need to be persisted will be stuff like consents, orders, payments, shipping documents, receipts, notices, protests, EDI, etc.  These records will be generated using whatever tech they use, but the data needs to be interoperable, intelligible, importable into the graph or nobody knows what’s going on. (The central thesis of “Modelling the EU Economy”).
Web-based consent receipts
Credit card transactions, Visa, Stripe, Apple Pay, Capital One, Uber Eats, ….  
E-commerce transactions
CRM systems like Salesforce, Apttus, etc.
Email - for negotiated transacting. Email is where the world is now.  Universal interface and persistence mechanism.  Can handle key/values and references in the body of the message, mostly easy editing.  (Probably some way to use the message GUIDs to inform overriding in a negotiation back and forth.)
Word - yes, the universal interface to lawyerdom.  The very first version was coded as Word Basic leveraging the idea of mail merge (nightmare).  Microsoft is headed this way with 365 collaboration, and also has a destination, GitHub.  Lots of CLM systems integrate Word.
Integrated code and prose authoring systems - Legalese, Lexon, Accord Project, OpenLaw.io, Hyperledger?
Semantics:
Kantara, ISO-ELF/GLEIF identity system, ACTUS financial model, ….  IEEE, ISO, FIHR, Oasis, etc.  The prototype inheritance (have I got this idea right?) of Prose Objects can implement (and open up and converge) these important taxonomies. (See the ISO-ELF identifier embedded in the NDA example.)
The semantics that emerge from legal documents (CommonAccord sweet spot).  Also from regulations and legislation. Eventually these all fit together.
Emerging from agnostic pattern-recognition and edge-based forking of consents and other documents - https://bit.ly/2p6jQQY 
Legal:
No new legal ideas are involved.  It is just a matter of doing documents better, since each event can be expressed in “Document” view however seems appropriate.  Documents printed out, signed and scanned back in can still be computable as long as there is a GUID, and one has confidence in the print/sign/scan handling (this can of course be verified by comparing the scanned text with the prose object original).  More radically, the parties could sign only the event as long as there is reliable versioning mentioned (commit hash of the git repo), hash referencing, traceable date stamping, etc.
But the web orientation opens many possibilities of interface, explanatory interactions and the like.  See the work of Sage Bionetworks.
It also changes document practices. It emphasizes the importance of standards at all levels, and reduces or eliminates certain cognitive costs that constrain current practice.  For example:
The length of a text becomes much less burdensome if most of it is standards-based, hence does not need to be reread.
The text can be presented for multiple readers - deal points and deliverables for operational people, full-text for legal review and disputes, event timelines, versions, comparisons with similar, etc.
Web elements such as graphics and interactions can be integrated.
With respect to document practice specifically, the core of corporate legal practice, we can say at a minimum that:
A type of document, e.g., an “agreement” should have a standard meta-format, e.g.: http://www.commonaccord.org/i.php?v=d&f=G/Agt-Form-CmA/US/Frame/2Parties/0.md and see the language-independent under-structure.
Defined terms should be parameterized and made into hyperlinks to the definition.  Similarly, section cross-references should be parameterized and hyperlinked.  (This is best done semantically, by section name.)
Sections and subsections should be have headings and should be numbered. Numbering helps in making reference to the section. In some practice, numbering is rejected because it makes the document seem more formal.  But legal documents are meant to be formal, and presentation can minimize or hide the numbering if it is really undesired.
Text should be well-spaced - it will rarely be printed on paper, and screen space is free. Formatting can be used to help with meaning.  For instance, where there are a number of items, they should each be obviously listed, and they can also be formatted to reflect structure, such as whether a list is an “or” or an “and.”  http://www.commonaccord.org/index.php?action=visual&file=G/Agt-NDA-CmA/Demo/Acme-Ang/0.md#Relate.Conf.Except.Sec 
There should be standard taxonomies of sections, and preferably standard ordering.  While everyone should be free to organize as they wish, we expect that a few patterns will work across many fields.  See some representative taxonomies at http://www.commonaccord.org/i.php?v=l&f=F/US/00/Agt/
Community:
	The basic unit of collaboration on GitHub is a repository (often called a “repo”).  Technically, it is a collection of files, and can reference other repos.  A repo ordinarily relates to a subject, which could be a transaction, a form of agreement, a topic of agreements such as confidentiality or dispute resolution (e.g., by an arbitration association), or a set of translations or modifications intended to combine or patch other solutions.  While git enables very broad “permissionless” collaboration, a repo has an “owner,” effectively its publisher.  So many of the materials will be organized by publisher.  See http://www.commonaccord.org/i.php?v=l&f=G/ The organization of these is improvised, but generally intended to reflect that an organization, advocate or avocat would publish terms under its/her/his name.

FAQ:
(Fervently Answered Questions)

Fit with Git:
Technical:
There are probably deeper connections to git.  A record in a graph is similar to a git commit. “Git include” would allow referencing of full-context in a very efficient way.  Any event in a negotiation could be understood as a person making a commit.
There is also a similarity in chunking.  Cmacc does not have a mechanism for modifying a value, the only mechanism is to override it, even if most of the text is the same.  Git made the choice to deal with files superficially - that is - it chunks at the file level - it does not seek to understand a file.  It merely provides a mechanism for overriding the file.
There is substantial difference in use - in git the normal use is a complete set of current files.  In Cmacc, the normal use is just a few nodes - my deal, my part of the deal, etc.
Education:
https://github.blog/2019-03-21-github-education-student-tested-peer-reviewed-and-now-published-by-the-association-of-computing-machinery/
Is there a general way of expressing contracts algorithmically?

I think the answer is NO, but that that is a feature, not a bug.  (Remember Hart and Holmstrom, all contracts are “incomplete.”) A way of thinking of things in the “Ricardian” vocabulary:
	Params
	Prose
	Code

So, is there a (pretty) general way of expressing the messiness of language algorithmically.

AFAIK, folks who are pursuing this include:
Meng Weng Wong, Legalese.com
Henning Diedrich, Lexon
Mike Genesereth
Francis Gross at ECB - via GLEIF and ACTUS (but note restricted domain)
Accord Project
OpenLaw.io
From my perspective, these approaches either seek a common authoring interface (language) for creating both code and prose (tight-coupling of code and prose) or focus on what economists might call a “solved” problem.  One where we have assumed away the externalities.

Note that I do not reject these approaches at all.  I just believe that they are only part of the context of a transaction event.  There is more, and lots of that is expressed only in prose.  Some of it is mandatory - like agreements in place, regulations, laws. Reducing these to an algorithm (see DocAsemble project at Suffolk Law) to an algorithm can be very helpful, efficient, radically better than everyone improvising, but when there is a problem, the original prose will be controlling, not the menu system.
 






