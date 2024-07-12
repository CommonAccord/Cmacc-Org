<a href="i.php?v=s&f=G/NVCA/2020/Binder/Acme-SeriesA/Center.md">Center.md</a> is the master for the Acme Series A transaction.  

It defines the transaction as a series of documents, a series of Investors, Directors, Officers, Counsel, etc.

The "Investor-*" and "Director-*" files allow rendering the documents with specifics and tweaks for each of them.

If you watch the URL in your browser carefully, you will see that the structure is preserved.  The URL has the form 

v=theView (d for document, s for source, o for open parameters, p for print) 

f=Filename

k=theKey  (that is the root of rendering.  E.g. (from Center.md) k=Investor.1.CDA.Doc renders the Confidential Disclosure Agreement for Investor 1.  k=Investor.1.SPA.Misc.Sec renders just the Miscellaneous section of Investor 1's Share Purchase Agreement.)  The interface is basic, the URLs do the talking.

All this is a "Directed Acyclic Graph".  A source format for legal text and transaction deal points. A production version wants to be redone in graph software.  But the legal collaboration is best done like this, as flat files, in git repos.  Shared, maintained, improved, forked and ... used.  Imported into production systems.

