# CommonAccord Library and Parser 

This is the repo used as the source for commonaccord.org (and www.commonaccord.org) website.  This repo includes many of the other repos - notably the /G/ "prose object" repos.  Web presentation is deployed via Heroku.  The presentation get hits by bots, and sometimes it gets knocked out.  Let us know by a message to CommonAccord@gmail.com

## License

Written in 2014 by Primavera De Filippi. This software is dedicated to the public domain worldwide under the CC0 Public Domain Dedication. This software is distributed without any warranty.

## Parser

This Perl script (https://github.com/CommonAccord/Cmacc-Org/blob/master/vendor/cmacc-app/parser.pl) parses and expands fields in documents stored locally and remotely. It is part of the CommonAccord project, which aims to bring the world to agreement through codified legal documents.

# Build Instructions

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


## Prerequisites

Ensure you have Perl installed on your system. The script also relies on `curl` for fetching remote documents.

## Usage

To run the script, use the following command:

```bash
perl parser.pl <input_file> <root_field>


