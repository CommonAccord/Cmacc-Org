//=First the deal specifications:
 
=[G/SeriesSeed-Cooley-CmA/Demo/Acme_DealPoints.md]

//=Then the set of forms:

TermSheet.=[G/SeriesSeed-Cooley-CmA/notes/Term_Sheet/0.md]

TermsOfPreferred.=[G/SeriesSeed-Cooley-CmA/notes/Convertible_Promissory_Note/TermsOfSeriesSeed/0.md]

BoardConsent.=[G/SeriesSeed-Cooley-CmA/notes/Board_Consent/0.md]

Seed.1.Questionnaire.=[G/SeriesSeed-Cooley-CmA/notes/Investor_Questionnaire/0.md]

PromissoryNote.=[G/SeriesSeed-Cooley-CmA/notes/Convertible_Promissory_Note/0.md]

_=[G/SeriesSeed-Cooley-CmA/Sec/DefinedTerm/0.md]

Def.=[G/SeriesSeed-Cooley-CmA/Sec/DefinedTerm-Inline/0.md]

//=Then select what document or documents (or Section of a document) you want to see.  Remove the / in front of the "Model.Root" that you want (if there is more than one, the first clean "Model.Root" is the one that is taken, as always).  Click on "Edit" above, take out the / from in front of the Model.Root you want to see.  Don't worry about wrecking things, the site gets updated from Github. (Click on "GitHub" above to see the source.

/Model.Root={TermSheet.Sec}  

/Model.Root={TermsOfPreferred.Sec}  

/Model.Root={BoardConsent.Sec}
  
/Model.Root={Seed.1.Questionnaire.Sec}

Model.Root={PromissoryNote.Sec}
  
Model.Root=<ol><li>{TermSheet.Sec}<hr><hr><li>{PromissoryNote.Sec}<hr><hr><li>{BoardConsent.Sec}<hr><hr><li>{Seed.1.Questionnaire.Sec}</ol>