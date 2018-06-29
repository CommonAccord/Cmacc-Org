# Cmacc-App
The bare code for the application.

Note - generally speaking, the faster way to get going is to do step 1, then clone Cmacc-Org into your server folder.  It has everything.  Then trim out what you don't want.  But if you want to collaborate on a sub repo, you may have to reinstall it.  (Help available on that, too.)

The CommonAccord app as coded by Primavera De Filippi can be used by:

1.  A "LAMP" stack web server.  I use MAMP successfully.

2.  Putting in the folder four things:

  1. An index.php 

  2. An /image/ folder (for the little icons and other graphics - needed only because they are pretty)
  
  3. A /vendor/ folder, in which you mount this cmacc-app so that you have these files as /vendor/cmacc-app/*.  
  
  4. A /Doc/ (note the initial cap) in which you put content - the prose files.  You will likely want to mount in there a number of the /G/ folders. ("G" stands for git and is where all the more recent work is.  Many of those subfolders are separate git repos.  Almost all of the solutions depend on /G/Z/ which has all the little files for making various kinds of sections and paragraphs. You will also likely want some demo identities and places - in /G/U/.  ("U" as in "hey U") You will also want the frame for agreements, the repo Agt-Form-CmA.  And then substantive solutions. Each of those you mount according to their specified location -  =[G/*] (links between files do not include the name of the /Doc/ folder, which is the root.) . No relative references, all references are from the root.  


MOUNT AS:

/vendor/cmacc-app/

DEPENDENCIES:

cmacc-host

