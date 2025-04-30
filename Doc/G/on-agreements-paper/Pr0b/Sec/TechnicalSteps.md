Ti=Technical Steps

0.sec=Technically, ProseObjects can be viewed as an extension of git, or as a human-friendly system of LLM text chunking. With the persistance of git and the rise of LLMs, this can be viewed as two ends of a"" spectrum. ProseObjects sit close to the git end of the spectrum, in human-friendly chunks of legal meaning. 


1.Ti=ProseObjects as extension of git

1.0=ProseObjects are a human-friendly way to represent legal text as git objects.

1.Ti=What we know about ProseObjects and git

1.1.0.sec=The current implementation demonstrates:

1.1.1.sec=Plain text files (nodes) of key/values (maps), where each value is either a string of text or a reference to another file (node).  We have made some "opinionated" choices about the format of the key=value pairs.  An example is at <a href="https://github.com/CommonAccord/Cmacc-Org/blob/master/Doc/G/on-agreements-paper/Pr0b/Tweaks/HazJ.md">https://github.com/CommonAccord/Cmacc-Org/blob/master/Doc/G/on-agreements-paper/Pr0b/Tweaks/HazJ.md</a>.

1.1.2.sec=The files (nodes) are usually organized as a tree of folders in a file system.  The tree is kept in a git repository.  Multiple trees can be kept in multiple repositories, allowing for collaborative development and use.  For instance, the NVCA model documents can be kept in a single repository for all their form documents or in multiple repositories for each form document, and all used in a repository that includes all of a user's materials.  Currently, the user needs to use git to pull the various repositories together into a combined tree, but in the future an application would access the repository where it is maintained, notably directly on GitHub. 

1.1.3.sec=Git can be used also for collaboration control - a user can create branches of the repository for internal collaboration - for instance within a company or between a company and its lawyers.  The branches can be merged into the main branch when the collaboration is complete.  This is similar to how git is used for software development, where branches are used for feature development and then merged into the main branch when the feature is complete.  The difference is that in this case, the branches are not just for feature development, but also for collaboration control.  This allows for a more flexible and collaborative approach to document development and use.

1.1.=[G/Z/ol/s3]

1.2.sec=Technically, one could deepen the integration with git by expressing each node as a folder in git and each key=value as a file in that folder, where the name is the key and the content of the file is the value.  This would allow a more granular approach to version control.  Among the disadvantages is that most of the potential users of the system are familiar with managing files. A file of key=values can be managed in a text editor, pasted into an email, etc. 

1.3.sec=Similarly, an LLM or other application should access and manipulate a variety of data structures as ProseObjects.  That would include Excel spreadsheets, JSON files, blockchains and graph databases.  See the imagining at <a href="">here</a>

1.=[G/Z/ol/s3]



2.Ti=ProseObjects as Substrate for LLMs

2.0.sec=LLMs have the ability to analyze, manipulate and generate text.  They can be used to analyze and manipulate ProseObjects, as well as to generate new ProseObjects.  This is a powerful combination, as it allows the LLM to root its work in human (lawyer) friendly formats of text.  The key=values and node names can function as tokens for the LLM at a much higher level than normal LLM tokens, a level that humans (lawyers) can directly work with, understand and contribute.  

2.1.sec=Dummy

2.2.sec=Dummy

2.=[G/Z/ol/s2]

=[G/Z/ol/2]