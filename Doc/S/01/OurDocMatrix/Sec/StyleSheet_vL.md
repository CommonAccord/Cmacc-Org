Ti=Our Style Guide

0.sec=This document is automated so we can show examples.  Click "Document" above to read as normal text.

1.Ti=Agreement frame

1.sec=Agreements can be formatted as [Z/Agt/Agt.md].  If two parties, you are done.  If three - six then point at one of the variants.  If it is not an agreement (deed, permit, etc.) use the basic section format described below and make the heading and footer as 0.Sec and 90.Sec (see below).  

2.Ti=Sections

2.sec=Organize the text of a document as a list of its sections. If a section has subsections, make the section as a list of its subsections. Rinse and repeat as deep as your subsections go.  Section headings ar in bold, on a separate line from the body of the text.  All this is done automatically if you use the components like [Z/ol/4].

3.Ti=Defined Terms

3.sec=Defined terms should be presented in green.  You can do this by curly bracketing the defined term in your text, like {Company} or {Intellectual_Property}.  (The underline is preferred practice because easier to spot in reviewing and searches.  We have a number of lists of defined terms you can use, which make them green.  

4.Ti=Definitions

4.sec=The definitions themselves should be in a separate section, in the format:  {Defined_Term.def}.  We should be working to establish shared lists of defined terms.  <a href="https://github.com/CommonAccord/Cmacc-Org/search?utf8=%E2%9C%93&q=DefinedTerms">Some Lists of Defined Terms</a>

Defined_Term.def="{Defined_Term}" means ...

5.Ti=Data, Deal Points
 
5.sec=Where a document needs data, such as a party name or address, price, date, etc., please use one of our standard formats.  These (like everything else) are done with {the data point}, and we generally prefer a format like {Product1.Weight}. (This is likely to be driven by systems of automation, e.g. blockchain. Let's see if we can get on the same page there, too.)  If the party is us, or any of the persons in the list U/id/, please use Px.=[U/id/person_name].  If not, please make a file for the person in that format.  You can ask us to include it here, or you can make one of your own and reference it using the format Px.=[?http://commonaccord.org/Doc/Z/Agt/Agt.md].

6.Ti=Version naming

6.sec=We are not quite stable yet in our thoughts on this.  Currently, we generally use _v01.md etc. at the end of a file.  Each such "version" should have a fixed text.  So _v08 should never change. The "current" version we can name _vL.md - the "L" for "live."  That one can be saved out to a fixed version whenever the maintainer thinks they've hit a benchmark.  Once saved out, the saved out version should not change.  (This is so far mostly theory, not practice.  If you have your repo in git version control, even if you or we goof up, it can be retraced.  But let's try to make this simple. 

7.Ti=Collaboration

7.sec=You can send us your work by any means, including even pasting in an email.  If you want to really make it easy (for us), you can get a GitHub account, fork the repository, make your additions and do a pull request. 

=[Z/ol/7]