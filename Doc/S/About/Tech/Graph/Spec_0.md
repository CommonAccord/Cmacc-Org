Proposal for an app using a graph database of CommonAccord materials. 

CommonAccord is a simple data model for legal text and transactions.  It is based on files of plain-text key/values.

It would be useful to have a more robust application.  This memo lays out some goals for a graph database app and some context.  First the context. 

CommonAccord, combined with an access control mechanism such as UMA, and payment systems such as blockchain, can provide a broad solution to transacting, from routine payments to complex operations.  This can be interfaced to transaction systems that provide interfaces and additional functionality, such as Effacts's deal logic. 

Currently, CommonAccord materials are kept as files of plain-text key/values.  These are managed using git, file management tools and editors.  Currently we treat this as the canonical version, and may continue to do so.  

Objects are made by references from one file to another, by the name of the other file (the files are ordinarily local and have a common root, but references can also be made to a URL).  The principal function of the system is to allow transacting by referencing objects for persons, properties and a form of documentation. These render into a custom document, completed with appropriate information, based on a parser.  The current parser is was written rapidly, over a year ago, in perl, by Primavera De Filippi.

Files obviously have limitations for management of high volumes of transactions.  The object model of CommonAccord can be expressed as a graph and the rendering function can be, we think, done as a fixed query with parsing of the result. 



Goals:

1. Import of Cmacc files, retaining all the properties and functionality of the key/values.  Perhaps also retaining loose text in them (TBD).

2. Export to Cmacc files.

3.  Rendering of Cmacc documents.  Using the paradigm of the current parser, with full compatibility.  Starting with a specified list, expand any variables in the value of a specified key, recursively.  Include in the list any referenced lists (expand the list). Must be lazy or at least semi-lazy.

We presume this requires two modules i) a query that returns the first occurrence of a key in an expanded list, and ii) a parser that substitutes the value associated with that key for the variable.  The parser should ideally be written as a module that can also be used in other apps, and could become _the_ standard for Cmacc rendering.

Some error-handling - notably - a list (file) is not found, or references of key/values/variables are circular. 

Presentation in the current "views" of Doc and Print, and also in an Xray view. (For Xray, a video and precedent code are available, it is similar to the Doc view but requires care in keeping track of which list a key/value came from.)  The Xray view should be customizable by, for instance different presentation (CSS) of values from a particular list or from a particular time period, author, etc. 

4. Edit with a number of functions - i) override a key/value by creating a new one and saving the result as a new list that references the existing one ii) include a new list, iii) comment or curate lists and key/values, iv) radio buttons of a collection of possible key/values (from search) saving the result as a key/value in a new list (the goal is that _all_ elements that result in a view are persisted as new lists of key/values).

5.  Search and reporting functions.  The result of queries for, e.g.: 1) from a list, provide a listing of includable keys, with filtering by various criteria, 2) from a specified list, all lists which reference the specified list (and recursively lists which reference those lists) with possibility of filtering, 3) a list of all the key/values that are actually used in document (this "flattening" of the list-inclusions can be useful for a counterparty to easily propose modifications and to maintain confidentiality of the object model when dealing with a partner). 

6. Sharing parts of the database by access, and possibility of export of parts.

Link(s):

http://neo4j.com/graphgist/github-HazardJ%2Fgists%2F%2FDoc_Source_Graph.adoc/




