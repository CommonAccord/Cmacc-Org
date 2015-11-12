Some thoughts on a generalizable system of permissioning

=It may be simplifying to initially view this as a matter of the subject - the person about whom the information relates - as giving permission to the end user.  While there will be intermediaries of many sorts, they are all acting to at least some degree as agents of one party or the other.  They may have reasons to impose _more_ restrictions, but they cannot impose _fewer_ restrictions than the subject.

=It may be better hygiene to view the authorizations as "express" - that is, any authorization must be stated.  The default is no authorization.

=In that structure, the subject signs on to a list of express authorizations.  These can be formulaic - a known list - or custom.  A list that is custom can of course become a formula.

=To be optimally machine-readable, these lists need to have a common vocabulary, of unlimited granularity and possibilities of combination.  

=On the other hand, to be human readable, they need to be synthesized into a text.

=We propose a way to accomplish this and to allow for intermediate gating by researchers, administrators, legal counsel and other relevant parties. 

=The most complex part of this is to develop a vocabulary of permissions.  

=Starting with the list created at genomicsandhealth/REWG/Paris/Form/, :

Ti=Authorizations Taxonomy

1.Ti=Geo.

1.0.sec=Place of Use - Domain names?:

1.1.0.sec=Geo.NL etc., lists based on domain names?  Is there a better standard for short place names that correspond to things a subject might care about?

1.1.1.sec={DNS.NL}

1.1.2.sec={DNS.FR}

1.1.=[Z/ol/s2]

1.2.0.sec=Can make aggregates of these:

1.2.1.sec={DNS.EU}

1.2.2.sec={Geo.Europe}

DNS.EU={DNS.NL}; {DNS.FR}

DNS.NL=Netherlands

DNS.FR=France

DNS.CH=Switzerland

Geo.Europe={DNS.EU}; {DNS.CH}

1.2.=[Z/ol/s2]

1.=[Z/ol/s2]

2.Ti=Raw.

2.sec=Extent to Which the Data has been abstracted.  The opposites (there will be many) of Raw would be cooked somehow - some extracts of the data, including the notions of anonymization.  Dragons.

3.Ti=Whom.

3.sec=Characteristics of the person who is using the information.  This is another complex subject and involves such notions as whom they work for, whom they entrust the info to, whether they change status, etc.

4.Ti=Domain.

4.sec=The area of use.  Examples would include for all medical purposes, for the subject's precise medical condition, and places in between or elsewhere.  (Goal., Purpose. ?)

5.Ti=Contact.

5.sec=May or must the subject be recontacted?  Return results, ask for more permissions, etc.

6.Ti=Use.

6.=[Wx/org/genomicsandhealth/REWG/Paris/Access/Sec/Use_v0.md]

7.Ti=Attribution.

7.0.sec=This is a category that in medicine is probably only applicable to intermediaries, not the subject.  Is this the equivalent set of issues as Creative Commons BY-SA etc.?  Would that help comprehension?

7.=[Wx/org/genomicsandhealth/REWG/Paris/Access/Sec/Attribution_v0.md]
 
7.=[Wx/org/genomicsandhealth/REWG/Paris/Access/Sec/When_v0.md]

8.Ti=Approve.

8.=[Wx/org/genomicsandhealth/REWG/Paris/Access/Sec/Approval_v0.md]

9.Ti=Security.

9.=[Wx/org/genomicsandhealth/REWG/Paris/Access/Sec/Security_v0.md]

10.Ti=Dragon.

10.0.sec="Dragons" lie here.  TBD, unknown, watch out, etc.  From Wilbanks.

=[Z/ol/10]  

=[Wx/org/genomicsandhealth/REWG/Paris/Access/Form/_v0.md]