

CodersNote=This is a renewal.  Here we have the particulars.  Below, we reference the Renewal form.  We then also reference the first Authorization (which we are renewing).  That gives us access to its information and connects the two events. 

EffectiveDate.YMD=2021-06-01

ExpirationDate.YMD=2022-05-31

P1.Sign.Date.YMD=2021-05-23

Renewal.OtherReason.cl=modification d'adresse pour la transmission des données á {F2.Name.Full}

AddressForReceivingData.cl={F2.FR.N,1,2}

=[G/FR-CNIL-Mandat-Exercise-Droits-RGPD/99/Form/RenewAuthorization.md]

CodersNote=We rely on the initial Authorization for most information.  We state it here two times.  Once to be able to use the default information - e.g. for the parties, and a second time with prefix to be able to reference data from the first one expressly. This is a bit kludgy - but works. Is there a better solution?

=[G/FR-CNIL-Mandat-Exercise-Droits-RGPD/99/Demo/Ang-Acme-Quake-SafeHands-New.md]

AuthDoc1.=[G/FR-CNIL-Mandat-Exercise-Droits-RGPD/99/Demo/Ang-Acme-Quake-SafeHands-New.md]
