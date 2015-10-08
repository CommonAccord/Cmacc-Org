Ti=AUTHORIZATION TO DISCLOSE PROTECTED HEALTH INFORMATION

1.sec={RS.URL}

2.sec={RO.Name} - {RS.Name} Bilateral Account Number: {RO-RS.Account#}

3.sec={RO.AuthorizationAgent}

4.0.sec=Protected Resource

4.1.sec={MedRec.Date.Begin.YMD}

4.2.sec={MedRec.Date.End.YMD}

4.3.sec=Medical Record Types:  {MedRec.Types}

4.=[Z/ol/s3]

5.sec=This is a summary of the formal agreement. Detailed Terms and Conditions are {RS.DTC.Link}. 

6.sec={EffectiveDate.YMD}

90.sec={SignatureLine}

SignatureLine=Signature: 		I have read the detailed T&Cs  <b><u>{RO.Agree.Y/N}</u></b>

Root={Sec}

=[Z/ol/s6]