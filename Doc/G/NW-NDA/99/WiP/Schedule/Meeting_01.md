1. Introductions

    Jim = https://www.linkedin.com/in/jameshazard/
    
    Megan = https://www.linkedin.com/in/meganma75/
    
    Chris = https://www.linkedin.com/in/chriscatoya/


2. Manifesto

    Legal transparency, efficiency, quality

    Make legal docs available in "source" format, on GitHub, etc.
    
    Use the tools of coders. Pull-requests, etc.
    
    Focus on Non-Disclosure Agreements
    
    Express transactions and relationships in a network "graph". 
    
    Connect to model document projects.
    
    Connect to other parts of the transacting ecosystem.
  
    Encourage "decentralized" data management.
    
    Make the case for governance of legal source code - a Digital Napoleonic Code.  
    https://github.com/CommonAccord/OpenTrustFabric/blob/master/File/Centre.pdf
    

3. "Future Retrospective"
    
    Led by Chris
    - Align on expectations for course and project
    - Define what success looks like
    - Identify stakeholders and their needs/requirements
    -- Bridging the gap between software and legal work practices 


4. Getting Started
    
    (Optimistic agenda)
    
    Up on GitHub, install VSCode, local clone of NW-NDA, do some pull-requests.
    
    Make a local instance of Cmacc-Org (install MAMP etc.)
    
    Play with a Prose Object.
    
5.  This next week's work:

    Get up on Git, VSCode, - even do a local install of Cmacc-Org using MAMP or another perl/php/web-engine.
    
    Convert the NYCBar monster NDA into a more refined Prose Object - 
    
    https://github.com/CommonAccord/NW-NDA/blob/main/99/Sandbox/NYCBar/Original/Orig-NDA.md
    
    
# Some Guidance on [G/Z/ol/*] 

    Some help on the "logic" of the /G/Z/* widgets used to knit the k/vs back into a full document. 
    
    =[G/Z/ol-i/s3]
    
    /G/ is where all the current materials are (meant to suggest that it is composed of Git repos).
    
    /Z/ is where the document widgets live. 
    
    /ol-i/ will give a list numbered i, ii, iii, iv ...  /ol/ will give 1, 2, 3,  /ol/-a/ will give a, b, c, etc., /ol/-AA/ will give A, B, C, etc.  /para/ will run them all into a single paragraph, /paras/ will make them separate unnumbered paragraphs, etc.  ("ol-AA" because we can't use "ol-A" since some file systems do not distinguish uppercase and lowercase.)
    
    /s3] will give three sections - without tities.  /3] will include the titles, e.g. "2.Ti=Second Title". in a formulation of Sec=<b>{Ti}<ol><li>{sec}</li></ol> (this somewhat simplified.  
    
    (These /G/Z/ widgets are an example of something that wants an algorithmic solution instead a zillion little files - an important subject for later, maybe soon). It is at the boundary with other automation things such as spreadsheet-like formula and returns from computing environments.)   
    
    Note that these /G/Z/ widgets establish conventions for key names:
    
       Sec=Is a whole section - mostly used when calling a section.
       
       Ti= is a title of a section
       
       sec=is the text of a section
       
       0.sec=is the intro part of a section that has subsections. (Optional, defaults to an invisible character "</i>".)
       
       1.sec=is a subsection.
       
       2.sec=is a subsection.
       
       00.sec=is the footer part of a section, following any subsections. (Optional, defaults to an invisible character "</i>".)

       E.g.               

