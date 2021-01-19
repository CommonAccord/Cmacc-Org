Getting Started:

To participate in the developement of NW-NDA, and in the course/development work of it, we'll do as much as possible via the git repo github.com/CommonAccord/NW-NDA.

**Get a GitHub account**

**Install VS Code and its plugin**

**Install Git**

**Clone NW-NDA to your GitHub account**

**Clone your version of NW-NDA into your VS Code app**

To participate fully, you will need to install the app Visual Studio Code. https://code.visualstudio.com/download

Download and install VS Code.  (Tell us if you have any problems.)

Then (please fill this in with your experience) https://code.visualstudio.com/docs/editor/github

Then download github.com/CommonAccord/NW-NDA.
(Should we use the github flow of each person cloning into their own account, then downloading from that version?)  Yes, I think this is the best way. 

Download Git https://git-scm.com/book/en/v2/Getting-Started-Installing-Git.

Open the repo in VS Code.  Try making a change to a file, save it.  Click on the little "graph" (circles connected by lines) icon.  Add the modified file to the commit list (click on the + sign to move it into the commit pack, then write a short message, and commit.)

Do a pull-request.
(Need to work through the pull-request cycle - since others will not have authority to directly commit.)


BIG STEP UP TECHNICALLY - your own Prose Object webserver. 

**To be able to render your work locally, you will need a local webserver running Cmacc-Org or similar**

Requires - a local webserver app, a running version of PHP and of Perl.  These are sometimes already installed on laptops or need only a bit of configuration.  A quick way forward is to install MAMP, which has all three, and more.  As people do an install, please update this (make a pull-request!) to provide more details.  

A copy of a CommonAccord repo with the cmacc-app software and other framework available.  The canoncical version of that is Cmacc-Org, which comes with everything - tha app, the framework, this NW-NDA, and hundreds of other document solutions, including the /G/TechContracts/ materials, the /G/Z/ widgets for sections, the /G/Agt-Frame-CmA/ for agreement framing, etc.

If you point MAMP at the Cmacc-Org repository, and nest your version of NW-NDA in /Doc/G/, you can then navigate your own materials locally, as you work them, while still using VS Code to edit, move, and do the git collaboration.

If it turns out to be useful, we can create a NW-NDA-Org version that has the framework and only the /G/ materials that are immediately relevant.


The above should be focused on what a law student (non-coder) would need to start the course, get an account at GitHub, install VS Code.  Sync.  These are a few videos on GitForLaw connecting David Tollen’s class at Berkeley Law.  https://www.youtube.com/results?search_query=gitforlaw


The practice of Prose Objects needs similar (and better) stuff.  

Converting a complex PDF to Prose Object - https://www.youtube.com/video/c-qN9_CJTCA/

*** If "VS Code does not identify Git in the user's path" : The issue is either that the user has not given VS Code the “permission” to access all the computer’s files (therefore VS Code was not able to find Git), or that the user needs to manually overwrite the “git.path” setting to point to their program files directory (see the many answers at https://stackoverflow.com/questions/26620312/git-installing-git-in-path-with-github-client-for-windows). However, generally, when you install the Github extension to VS Code, there is no problem whatsoever ***
