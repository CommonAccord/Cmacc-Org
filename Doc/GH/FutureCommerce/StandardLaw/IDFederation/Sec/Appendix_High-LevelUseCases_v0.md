Model.Root=<a href="http://commonaccord.org/Doc/GH/FutureCommerce/StandardLaw/IDFederation/History/AttachH.pdf"> alt="Exhibit" style="width:304px;height:228px;"</a>

ID Federation Use Cases Specification
Ti=High-Level Technical Use Cases

1.sec=The High-Level Technical Use Cases below satisfy all of the business use cases outlined in Section 1.01 of this document as well as logical extensions of those business use cases which could exist, but were not described. 

2.sec=Table 1 below provides an indexed cross-reference for each of those business use cases, listing the high-level technical use case that addresses each business use case, followed by Detailed Use Case analyses for each of the high-level use cases.
Table 1

Table.0.sec=Business# Technical# Use Case Description Individual User

Table.1.sec=1 iv Direct Carrier Quote on Carrier Website IdP Agency Producer

Table.2.sec=2 iv Direct Carrier Inquiry/Endorsement on Carrier Website IdP Agency Producer

Table.3.sec=3 vi Carrier Inquiry/Endorsement from Agency Management System to Carrier Website IdP Agency Producer

Table.4.sec=4 vi Comparative Quote from Agency Management System to Comparative Rater IdP Agency Producer

5 vi Comparative Quote directly from Agency Management System IdP Agency Producer
6 vi Comparative Quote directly from Comparative Rater IdP Agency Producer
7 iv First Notice of Loss on Carrier Website IdP Agency Producer
8 vi First Notice of Loss from Agency Management System to Carrier Website IdP Agency Producer
9 ii Customer Management (Account, CRM, etc.) on Vendor Application IdP Agency Producer
10 vi Book roll IdP Agency Producer
11 iii Direct Carrier Quote on Carrier Website Non-IdP Agency Producer
12 iii Direct Carrier Inquiry/Endorsement on Carrier Website Non-IdP Agency Producer
13 i Carrier Inquiry/Endorsement from Agency System IdP to Carrier Website Non-IdP Agency Producer
14 i Comparative Quote from Agency System IdP to Comparative Rater Non-IdP Agency Producer
15 i Comparative Quote directly from Agency System IdP Non-IdP Agency Producer
16 i Comparative Quote directly from Comparative Rater IdP Non-IdP Agency Producer
17 iii First Notice of Loss on Carrier Website Non-IdP Agency Producer
18 v First Notice of Loss from Agency System IdP to Carrier Website Non-IdP Agency Producer
19 i Customer Management (Account, CRM, etc.) on Vendor IdP Application Non-IdP Agency Producer
20 viii Book Roll from Agency System IdP to Carrier System Non-IdP Agency Producer
21 iv or v or viii Inquiry on Carrier Website via Agency or Vendor IdP Non-IdP Consumer
22 i or ii Inquiry on Agency / Vendor Portal via Agency or Vendor IdP Non-IdP Consumer
23 iv or v of viii Quote on Carrier Website via Agency or Vendor IdP Non-IdP Consumer
24 i or ii Quote on Agency / Vendor Portal via Agency or Vendor IdP Non-IdP Consumer
25 i or ii Comparative Quote via Agency or Vendor IdP Non-IdP Consumer
26 iv or v of viii First Notice of Loss on Carrier Website via Agency or Vendor IdP Non-IdP Consumer
27 i or ii First Notice of Loss on Agency / Vendor Portal via Agency or Vendor IdP Non-IdP Consumer
28 iii or v All Individual Users logging into Identity Provider System Remote Worker
29 ii or iv or vi Direct Login to Carrier/Agency/Vendor Website IdP Agency Producer
30 i or iii or v Direct Login to Carrier/Agency/Vendor Website Non-IdP Agency Producer

4.sec=Note: Consumers can act as Individual Users in any of the high-level use cases described below, but a participating User Authority must be responsible for requesting provisioning, managing access to, and de-provisioning the Credentials and Tokens issued by a participating Identity Provider.
(i) Individual User accesses participating Vendor Systems (IdP & RPs) via non-participating Agency – “Non-Participating Agency to Participating Vendor”
1) Agency provides access to Vendor systems, but is not a Participant in the ID Federation
2) Vendor system (IdP) Authenticates Individual User via Vendor system login page
3) Vendor system (IdP) creates Individual User Identity Attributes
4) Vendor system (IdP) provides access to other participating Vendor systems (RPs) using Individual User Identity Attributes
5) Other Vendor systems (RPs) accept Individual User Identity Attributes from Vendor system (IdP)
(ii) Individual User accesses participating Vendor systems (RPs) via participating Agency (IdP) – “Participating Agency to Participating Vendor”
1) Agency (IdP) Authenticates Individual User via Agency login page
2) Agency (IdP) creates Agency Individual User Identity Attributes
3) Agency (IdP) provides access to Vendor systems (RPs) using Agency Individual User Identity Attributes
4) Vendor systems (RPs) accept Individual User Identity Attributes from Agency (IdP) Trust Framework | Trust Federation 04/30/14
Trust Framework Resources 3
(iii) Individual User accesses participating Carrier systems (IdP & RPs) via non-participating agency – “Non-Participating Agency to Participating Carrier”
1) Agency provides access to Carrier systems, but is not a Participant in the ID
Federation
2) Carrier system (IdP) Authenticates Individual User via Carrier system login page
3) Carrier system (IdP) creates Carrier Individual User Identity Attributes
4) Carrier system (IdP) provides access to Carrier systems (RPs) using Carrier Individual User Identity Attributes
5) Carrier systems (RPs) accept Individual User Identity Attributes from Carrier system
(IdP)
(iv) Individual User accesses participating Carrier systems (RPs) via participating Agency (IdP) – “Participating Agency to Participating Carrier”
1) Agency (IdP) Authenticates Individual User via Agency login page
2) Agency (IdP) creates Agency Individual User Identity Attributes
3) Agency (IdP) provides access to Carrier systems (RPs) using Agency Individual User Identity Attributes
4) Carrier systems (RPs) accept Individual User Identity Attributes from Agency (IdP)
(v) Individual User accesses participating Carrier systems (RPs) via participating vendor system (IdP) – “Participating Vendor to Participating Carrier”
1) Vendor system (IdP) Authenticates Individual User via Vendor system login page
2) Vendor system (IdP) creates Vendor Individual User Identity Attributes
3) Vendor system (IdP) provides access to Carrier systems (RPs) using Vendor
Individual User Identity Attributes
4) Carrier systems (RPs) accept Individual User Identity Attributes from Vendor system (IdP)
(vi) Individual User accesses participating Carrier systems (RPs) via participating Agency
(IdP) and participating Vendor systems (IdP & RPs) – “Participating Agency to
Participating Vendor to Participating Carrier”
1) Agency (IdP) Authenticates Individual User via Agency login page
2) Agency (IdP) creates Agency Individual User Identity Attributes
3) Agency (IdP) provides access to Vendor systems (RPs) using Agency Individual User
Identity Attributes
4) Vendor systems (RPs) accept Individual User Identity Attributes from Agency (IdP)
5) Vendor system (IdP) creates Individual User Identity Attributes using Agency
Individual User Identity Attributes
6) Vendor system (IdP) provides access to Carrier systems (RPs) using Vendor
Individual User Identity Attributes
7) Carrier systems (RPs) accept Individual User Identity Attributes from Vendor system
(IdP)
(vii)Individual User accesses participating Vendor systems (IdP & RPs) via participating
Carrier system – “Participating Carrier to Participating Vendor”
1) Carrier system (IdP) Authenticates Individual User via Carrier system login page
2) Carrier system (IdP) creates Carrier Individual User Identity Attributes
3) Carrier system (IdP) provides access to Vendor systems (RPs) using Carrier
Individual User Identity Attributes
4) Vendor systems (RPs) accept Carrier Individual User Identity Attributes from Carrier system (IdP)
(viii) Web Service accesses participating Carrier systems (RPs) via participating vendor system (IdP) – “Participating Vendor Web Service to Participating Carrier”
1) Vendor system calls Web Service with Individual User's original Identity Attributes Web Service requests new Token containing original Identity Attributes from Vendor system (IdP)
3) Vendor system (IdP) provides access to Carrier systems (RPs) using Vendor Web Service Identity Attributes
4) Carrier systems (RPs) accept Web Service Identity Attributes from Vendor system
(IdP)
(ix) Web Service accesses participating Vendor systems (RPs) via participating Carrier system (IdP) – “Participating Carrier Web Service to Participating Vendor”
1) Carrier system calls Web Service with Individual User's original Identity Attributes
2) Web Service requests new Token containing original Identity Attributes from Carrier System (IdP)
3) Carrier System (IdP) provides access to Vendor systems (RPs) using Carrier Web service Identity Attributes
4) Vendor systems (RPs) accept Web Service Identity Attributes from Carrier system
(IdP)
Currently Out of Scope Use Cases
 Participating IdP attempts to accesses Participating RP via Non-Participant – “NonParticipant Pass-Through”
 Consumer (IdP) accesses Agency (RP)
 Consumer (IdP) accesses Vendor (RP)
 Consumer (IdP) accesses Carrier (RP)