//=First the deal specifications:
 
=[G/SeriesSeed-Cooley-CmA/Demo/Acme_DealPoints.md]

//=Then the set of forms:

TermSheet.=[G/SeriesSeed-Cooley-CmA/equity/Term_Sheet/0.md]

PurchaseAgreement.=[G/SeriesSeed-Cooley-CmA/equity/Preferred_Stock_Investment_Agreement/Form/0.md]

BoardConsent.=[G/SeriesSeed-Cooley-CmA/equity/Board_Consent/0.md]

Seed.1.Questionnaire.=[G/SeriesSeed-Cooley-CmA/equity/Investor_Questionnaire/0.md]

BoardMinutes.=[G/SeriesSeed-Cooley-CmA/equity/Restated_Certificate/Board_Minutes/0.md]

RestatedCertificate.=[G/SeriesSeed-Cooley-CmA/equity/Restated_Certificate/Certificate/0.md]

StockholderConsent.=[G/SeriesSeed-Cooley-CmA/equity/Stockholder_Consent/0.md]

_=[G/SeriesSeed-Cooley-CmA/Sec/DefinedTerm/0.md]

Def.=[G/SeriesSeed-Cooley-CmA/Sec/DefinedTerm-Inline/0.md]  

//=Then select what document or documents (or Section of a document) you want to see.  Remove the / in front of the "Model.Root" that you want (if there is more than one, the first clean "Model.Root" is the one that is taken, as always).  Click on "Edit" above, take out the / from in front of the Model.Root you want to see.  Don't worry about wrecking things, the site gets updated from Github. (Click on "GitHub" above to see the source.)  If you want all of the documents in as a single (long) page, then / out all but the last, which has the whole list.

Model.Root={TermSheet.Sec}  

/Model.Root={PurchaseAgreement.Sec}

/Model.Root={BoardConsent.Sec}
  
/Model.Root={Seed.1.Questionnaire.Sec}

/Model.Root={BoardMinutes.Sec}  

/Model.Root={RestatedCertificate.Sec}  

/Model.Root={StockholderConsent.Sec}

Model.Root=<ol><li>{TermSheet.Sec}<hr><hr><li>{PurchaseAgreement.Sec}<hr><hr><li>{BoardConsent.Sec}<hr><hr><li>{Seed.1.Questionnaire.Sec}<hr><hr><li>{BoardMinutes.Sec}<hr><hr><li>{RestatedCertificate.Sec}<hr><hr><li>{StockholderConsent.Sec}</ol>