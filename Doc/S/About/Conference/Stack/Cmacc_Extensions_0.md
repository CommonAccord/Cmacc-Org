Ti=Cmacc Extensions

0.sec=The Cmacc data model can be added on to.  We need to be extremely conservative as a community, but individuals and groups are of course free to fork.  Here are {ID.HazardJ.my/our} ideas about a few extensions.
 
1.Ti=File-Level Overrides

1.sec=The current model is based on overriding keys.  There are use-cases where it would be very helpful to be able to override files.  That is to say, when rendering looks for a file named [Z/ol/s3] it can be directed to look for a file named [P/my/Z/ol/s3] before looking for [Z/ol/s3].  This can be done by including a Key/Value such as [[]]=[[P/my/]] in the file (or by referencing a file that contains such a Key/Value).   This solves a bunch of forking and use-case problems while retaining the basic intellectual model of overrides. Perhaps it makes sense to be able to declare in a folder that all files in the folder (and in subfolders) are deemed to have such a Key/Value.   Details to be worked out. 

2.Ti=Accessing overridden Key/Values.

2.sec=Sometimes it is helpful to be able to include in a text an overridden key=value.  There needs to be a syntax and mechanism to say something like 1.2.sec=The content of this section was: {1.2.sec/-2} and then {1.2.sec/-1}

3.Ti=Automated Widgets

3.sec=The cluster of /Z/ol/ ; /Z/ol-i/ ; Z/paras/ ; Z/para/  etc. is very useful, but very incomplete and totally hand-done.  Each of these could be automated as some kind of smart folder.  

4.Ti=Reverse-Walking the Graph - and generally using graph queries

4.sec=If I've referenced Alice as P1.=[U/id/Alice.md] and I now want to reference her mother, I might want to say something like (totally making this up) {P1.(>Child.; if He/She = She)Name.Full}.  This gets messy pretty quickly. The workaround is to add Alice's mother as P1.Mother.=[U/id/Mary.md].   Perhaps there is a way to encapsulate a standard graph query.

5.Ti=Calculations

5.sec=Cmacc is text, not calculation.  We don't want to create a new programming language.  Cmacc can be interfaced to programming environments by having unmatched variables be processed and Values returned by the environment, included expressly or implicitly as a default File.  E.g., {Math.3 * 5} might return 15 if there is no Key/Value like "Math.3 * 5=TBD by negotiation".     See <a href="index.php?action=list&file=S/Sandbox/Blockchain/">Blockchain interface.</a>

6.Ti=Non-recursive Includes

6.sec=Include the Key/Values in a File, but not it's references.  A notation such as P1.=[!U/id/acme_incorporated] would include Keys from that File, but not from =[U/class/ID_Entity] etc. 

7.Ti=Prefixed Key/Values in a File

7.sec=If there are a number of Key/Values where each Key begins the same .. Product.Price=x ; Product.ID=321 ; etc., it might be convenient to be able to express this as <br>Product:<ul type=none><li>Price=x<li>ID=321</ul> or the like.  Variables in such indented elements would need to be evaluated as prefixed. 
 
=[Z/ol/7]

ID.HazardJ.=[U/id/hazardj]