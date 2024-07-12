CodersNote=Attempting a new object model for an NDA.  The first steps are to create the document form itself. Since NDAs are formatted as contract agreements, we start with a format for agreements.  (Note that some NDAs are formatted as "letter agreements", but that is less common, and largely done in order to give an informal appearance.  We will find that we will need also to do letters sometime, and can do an NDA letter agreement then.)

In PrOjs it seems that names usually work out well with a semantic element followed by a syntax element.  (This partly has to do with how Prefixing works, I think.)  Happy to have this idea examined, but will start with it.

We need a name for the whole document.  Agt is ugly but short and expressive and not likely used for anything else.  One could use the full name "Agreement" - easier to understand for a newbie, but sort of clogs the name.  Again please examine and explore. 

".Body" imitates HTML's labelling.


r00t={Agt.Body}

We then declare the Divisions of the agreement.  "Div" imitates HTML vocabulary.  An agreement has a heading, identifies who the agreement is among, often has a prologue of why and a bit of other housekeeping, then the body of its text, then signature blocks, then sometime attachments, exhibits, schedules, annexes.  

(I am unhappy with "Text.Div" as a name.  All the agreement is text.  But "Body" is already taken and equally bad.  I have long called this "Sec.Div" because these are the Sections of the Agreement, but jumping right to "Sec.Div" creates some confusions.)  So more to examine and explore.


Agt.Body={Head.Div}{Among.Div}{Prologue.Div}{Text.Div}{By.Div}{Annex.Div}


"This." is for the part of the agreement that starts, "This Agreement is made this {EffectiveDate.YMD}..."  

"That." is for the part that starts, "The Parties therefore agree that:" Again, to be explored.


Prologue.Div={This.Div}{Why.Div}{That.Div}

Have added a link to the existing agreement frame so that the variable will be populated with the existing components and we can see what they could look like as we move along. 

=[G/AgtForm/US/0.md]


