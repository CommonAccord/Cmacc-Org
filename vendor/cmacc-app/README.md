# Cmacc-App
The bare code for the application.  

The CommonAccord app as coded by Primavera De Filippi can be used by:

1.  A "LAMP" stack web server.  I use MAMP successfully.

2.  Putting in the folder four things:

  1. An index.php 

  2. An /image/ folder (for the little icons and other graphics - needed only because they are pretty)
  
  3. A /vendor/ folder, in which you mount this cmacc-app so that you have these files as /vendor/cmacc-app/*.  
  
  4. A /Doc/ (note the initial cap) in which you put content - the prose files.  You will likely want to mount in there /Z/ which has all the little files for making various kinds of sections and paragraphs. You will also want the substantive files - e.g. the repo Agt-NDA.  Each of those you mount according to their specified location - e.g., /Doc/GH/CommonAccord/Agt-NDA/, and those files are internally referenced as /GH/CommonAccord/Agt-NDA/... (links between files do not include the name of the /Doc/ folder).  


MOUNT AS:

/vendor/cmacc-app/

DEPENDENCIES:

cmacc-host

