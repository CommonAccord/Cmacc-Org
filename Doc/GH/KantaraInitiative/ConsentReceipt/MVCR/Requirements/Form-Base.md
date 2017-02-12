Note=Example

Note1=Section 1: Header

jurisdiction=US

iat=1435367226

iss=http://www.consentreceipt.org/

jti=9ef6b81a414b2432ec6e3d384c5a36cea8aa0c30d3dd2b67364126ed80856f9c20654f032eef87ad981187da8c23c1186eefe1503714835c2e952bbb3f22729c

sub=example@example.com

Note2=Section 2: Data Controller

data_controller={"on_behalf": true, "contact": "Dave Controller", "company": "Data Controller Inc.", "address": "123 St., Place", "email": "dave@datacontroller.com", "phone": "00-123-341-2351"}

Note2.1=</i>
	
policy_uri=http://example.com/privacy

Note3=Section 3: Purpose Specification			

purpose=[Bob’s store, delivery, ]

Note4=Section 4: Personal Information			

pi_collected={"name" : "Example Example", "email" : "example@example.com"}

sensitive_pi={"health"}

Note5=Section 5: Information Sharing

sharing=[3party: "Bob's Store", purpose : "delivery"]

Note6=In Review			

aud=http://engageidentity.com/protected

consent_payload{"privacy policy" : "agree","ToS" : "agree"}

context=["active privacy policy consent", "passive terms of service consent"]

notice=http://example.com/notice

scopes=read update

=[GH/KantaraInitiative/ConsentReceipt/MVCR/Requirements/ConsentList.md]
