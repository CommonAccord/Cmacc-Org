# CooleyGo-NDA
CooleyGo's NDA form as of 2021-01

CooleyGo has two forms of US NDAs, one Mutual and the other One-Way.  We will treat them as a single repository and solution.  

These NDAs are also the base of the Agt-NDA-CmA solution, which is one of the most extensive demonstrations of Prose Objects.   But we will start fresh here, assuring that we are working with a current CooleyGo version and making the steps of code-ification clear.

1.  We do the Mutual NDA.  Put the Word document in /99/Original/.

2.  We modify the Word autonumbering to ease our conversion work.  We make the section numbers in the format 3.1.sec= .  

3. Then we select all from the Word doc, copy, create a new .md doc in @Code, paste in the copied text.  /99/Original/... 01.md.

4. Then we add the references to little widgets that will knit the document back together.  The section widgets (G/Z/ol/s19) and the agreement frame (G/Agt-Form-CmA/US/Frame/0.md). We also rename the file so that there are no spaces in the name.  The current rendering software insists that files not have any spaces in their names.  (Good design decision?)

5. Then we parameterize the blanks in the document - for party name and date of the agreement.  We also make a form of Demo document with two parties - Acme and Quake.  

6. Then we parameterize the Defined Terms.  Also break out the list of items included as Confidential Information.  And give a few semantic names to items in the document. 

7. Renaming the form to add "Mutual" :  Form_of_Non-Disclosure_Agreement_Mutual_01.md