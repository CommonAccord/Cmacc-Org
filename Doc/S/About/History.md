Ti=Cmacc Background

1.Ti=Pre-History

1.1.sec=In the 1990s, as we in the legal profession were adapting to word processing, networks and document management, I kept watching the progress of the open source community.  From the GNU origins to the Linux kernel, the various distributions and ways of sharing, it seemed that law, too, could be handled as source code. 

1.2.sec=I played a lot with document automation, at first in Microsoft Word, since that was the tool all we lawyers used.  I made a system for adding addresses to documents and for keeping a log of them.  I came pretty close to making a document assembly system.  In doing that, I had to struggle with the complexities of Word, which was and is vastly more complicated than HTML, the choice of text on the web.  I had an almost-usable system when the upgrade to a next version of Word meant a major change in the programming language, and I gave up.

1.3.sec=Still, it seemed that legal text would be better if shared.  Wikis showed a good way to organize modules of text and the power of a community.  I made some tentative efforts, but bumped up against the gap between the wiki content and the need for the modules to come together to form documents.  I explored content management and software package management systems, but got lost in technicalities.

1.4.sec=Some years later, I had a hunch about how snippets of text could be assembled into documents.  I expressed the hunch as best I could to Jay Hancock, who coded a system based on Ruby on Rails.  I spent much of a year learning the framework and enough Ruby to be able to continue work, and one day the critical idea found me.  That idea is what I have since learned is prototype inheritance. The RoR app could render documents from sources that were in local files, in a database or at URLs, all at the same time.  This meant that I could use an html editor like OpenOffice to edit large texts and could put small texts in a local version of Mediawiki.  

1.5.sec=In order to make the texts generally available, I figured that it would make sense to have an extension written for Mediawiki.  That would permit documents to be rendered on the site.  This system, written in 2009 by Andrew Fitzpatrick, still works and is available on Github.   The basic choices made then (key/value pairs, delimited by line feeds ... ) have been durable.  Texts from the Mediawiki version can be copied into the current parser with only very modest modifications.  A Mediawiki instance can be a collaboration environment, creating resources for a decentralized web, including the current implementation.

1.6.sec=In 2010, Ludovic Dubost made a version using the XWiki platform.  In that version, we had the possibility to "prefix" the keys and variables in another list.  There were a few minor unneeded complexities that we had not worked out, but the basic idea was fully there.  Ludovic also coded a remarkable "Xray" view of the rendered text that was more or less wysiwyg - indeed better than wysiwyg because it also reflected the structure of the sources. 

1.7.sec=Except for the first RoR version, each of these dealt only with local sources, they imposed a hub.  That creates obvious problems of confidentiality and robustness.  Alan Littleford then did a version based on CouchDB distributed data model, which anticipates some of the benefits of blockchains.

1.8.sec=Lun Yuen, who also supported the project in other very important ways, coded a version that had some new notions of versioning and a somewhat different approach to formatting key/values.  It also had some ability to use variables in names of files and keys, as well as in the values (text). 

1.=[Z/ol-none/s8]

2.Ti=Berkman, MIT, Primavera and GitHub

2.1.sec=In 2014, in connection with a legal hackathon at MIT, I was referred to Primavera De Filippi at Harvard's Berkman Center because of her work on smart contracts and blockchains.  Primavera saw the connection between smart contracts and legal text, but also the problems of the various frameworks that CommonAccord then was in.  She recoded the app, rapidly, in perl, enabling use of flat files, for the first time since the original RoR version.  This permitted us to host the app and content as a repo on GitHub, to run the app locally or via services such as Heroku with a very minimal install.  It enabled a fully decentralized data model based on repositories, working just like collaboration on software by the open source community.  It was also the first version with lazy evaluation of files.  This enables unlimited use of the object model.  Her coding was done rapidly, famously at a McDonalds in Buenos Aires and overnight at the Media Lab, and has performance issues and very little error-handling.  But it is perfectly accurate.  It can be the measure of compliance.

2.2.0.sec=Since that recoding, I figured out solutions to a few problems.  The most important of these are:

2.2.1.sec=Widgets for common format elements - notably sections and subsections.  Most legal documents, and many others, are outlines.  These widgets make it very easy to onboard and maintain a new document.  They invite consistency in format without imposing it.

2.2.2.sec=Organizing the file system into an image of the web (at /W/) and GitHub (at /GH/) so that materials are organized by author (actually by host), rather than trying to develop a generic naming scheme.  This has been greatly simplifying and liberating.  (There are also a few subject matter classifications, such as  /D/ for transactions; /U/ for persons, places and things; /S/ for shared, common materials, /P/ for private materials.)

2.2.=[Z/ol/s2]

2.=[Z/ol-none/s2]

3.Ti=MIT, Access Control, DRY transaction, Conference

3.1.sec=In connection with the User-Managed-Access legal working group, we iterated a set of legal materials.  Thomas Hardjono and I collaborated on an architecture for a secure approach to digital contracts based on Cmacc documents and user-managed access control.  This can be a complement to blockchain-based proof, signature, payment and automation.

3.2.sec=Finally, the blockchain movement has gained so much momentum that it now is moving even very large organizations to reconsider their approaches to automation, payments and proof.  This is an occasion to reconsider legal.  The Cmacc model also can offer a simple approach to compatibility with existing ("legacy?") systems such as document management, contract management, and generally speaking the legal system.

3.3.sec=This led to the organization of the Conference.

3.=[Z/ol-none/s3]

=[Z/ol/3]