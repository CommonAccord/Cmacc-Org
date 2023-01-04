Acme-2022 is the master for the Acme Series A transaction.  It defines the transaction as a series of documents, a series of Investors, Directors, Officers, Counsel, etc.

The Investor- files allow rendering the documents with specifics and tweaks for each Investor.  They are referenced in Acme-2022.

If you watch the URL in your browser carefully, you will see that the structure is preserved.  The URL has the form 

v=theView (d for document, s for source, o for open parameters) 

f=Filename

and can have

k=theKey  (that is the root of rendering.  E.g. (from Acme-2022.md) k=Investor.1.CDA.Doc renders the CDA for Investor 1.  k=Investor.1.SPA.Misc.Sec renders just the Miscellaneous section of Investor 1's Share Purchase Agreement.)  The interface is primitive, but the URLs are completely structured.

All this is a "Directed Acyclic Graph".  A source format for legal text and transaction deal points. A production version wants to be redone in graph software.  But the legal collaboration is best done like this, as flat files, in git repos.  Shared, maintained, improved, forked and ... used.  Imported into production systems.

