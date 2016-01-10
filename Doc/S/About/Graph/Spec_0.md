Proposal for an app using a graph database of CommonAccord materials. 


CommonAccord is a simple data model for legal text and transactions.  It is based on files of plain text key/values.  

It would be useful to have a more robust application.  This memo lays out some goals for a graph database app and some context.  First the context. 

CommonAccord, combined with an access control mechanism such as UMA, and payment systems such as blockchain, can provide a broad solution to transacting, from routine payments to complex operations.  This can be interfaced to transaction systems that provide interfaces and additional functionality, such as Effacts's deal logic. 

Currently, CommonAccord materials are kept as files of plain-text key/values.  These are managed using git, file management tools and editors.  Currently we treat this as the canonical version, and may continue to do so.  

Objects are made by references from one file to another, by the name of the other file (the files are ordinarily local and have a common root, but references can also be made to a URL).  The principle function of the system is to allow transacting by referencing objects for persons, properties and a form of documentation. These render into a custom document, completed with appropriate information, based on a parser.  The current parser is was written rapidly, over a year ago, in perl, by Primavera De Filippin.

Files obviously have a limitations for management of high volumes of transactions.  The object model of CommonAccord can be expressed as a graph and the rendering function can be, we think, be done as a fixed query with parsing of the result. 

