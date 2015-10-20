Ti=Article 3: Technical

1.Ti=3.01 Use Cases

1.1.Ti=3.01(a) Technical Scope

1.1.sec=The technical scope is defined by the Use Cases that are contained in the Appendices to this Trust Framework and application of the standards, specifications and configurations described in this Article 3. Unless otherwise noted, the provisions within Article 3 apply to Parties acting in the Role of an IdP and/or an RP.

1.2.Ti=3.01(b) Technology and Use Case Change Management

1.2.sec=Use Cases may be active or pending. The process for proposing a Use Case, and establishing when a Use Case is actively supported within the then current scope of the ID Federation or when it is agreed to become actively supported pending a future sunrise date is specified in the Trust Framework Amendment and Change Management Policy. Use Cases that are active and pending are included within the Trust Framework, with their respective status so noted, including any applicable sunrise dates.

1.3.Ti=3.01(c) Technical Use Cases

1.3.sec=The active and pending Use Cases are fully detailed in the ID Federation Use Cases Specification, which is hereby incorporated by reference into this Trust Framework and are attached hereto at Appendix G.

1.=[Z/f/ol/3]

2.Ti=3.02 Standards Conformance (IdP & RP)

2.0.sec=IdPs and RPs must conform to at least one of the following standards. (Links regarding these standards may be found on the ID Federation website.)

2.1.Ti=3.02(a) Standards

2.1.0.sec=The identity standards used by ID Federation Participants are Security Assertion Markup Language (SAML) and WS-Federation.

2.1.1.Ti=3.02(a)(i) Security Assertion Markup Language (SAML)

2.2.1.sec=SAML is an XML-based open standard for exchanging Authentication and Authorization data between an IdP and an RP.

2.1.2.Ti=3.02(a)(ii) WS-Federation

2.1.2.sec=WS-Federation is an identity federation specification, developed by BEA Systems, BMC Software, CA Inc., IBM, Layer 7 Technologies, Microsoft, Novell, Ping Identity, and VeriSign. Part of the larger Web Services Security framework, WS-Federation defines mechanisms for allowing disparate security realms to broker information on identities, Identity Attributes and Authentication.

2.1.=[Z/f/ol/2]

2.2.Ti=3.02(b) Profiles

2.2.0.sec=A profile defines a set of rules and constraints for a standard in order to facilitate the usage of that standard for common Use Cases. The high-level Use Cases in Section 3.01(c) are supported by the following common profiles.

2.2.1.Ti=3.02(b)(i) SAML

2.2.1.sec=Web Browser SSO Profile

2.2.2.Ti=3.02(b)(ii) WS-Federation

2.2.2.sec=WS-Federation Passive Requester Profile, WS-Federation Active Requester Profile

2.2.=[Z/f/ol/2]

2.3.Ti=3.02(c) Attributes

2.3.0.sec=Participation enables identity attribute sharing across Participant security domains to facilitate access to resources. Participants in the IdP Role are expected to provide authoritative and accurate attribute assertions to other Participants. Attributes are mutually agreed upon between each IdP and RP pair. ID Federation does not require specific attribute values, but it does require at least one attribute that is a unique identifier for the user responsible for a given transaction and at least one attribute that is a unique identifier for the organization or entity responsible for a given transaction. Relying Parties receiving attribute assertions from IdPs may choose to ignore those assertions not required to provide access.

2.3.1.Ti=3.02(c)(i) Recommended Unique Identifier Attributes

2.3.1.1.sec=Email Address: If used, the email address must be valid. This is a globally unique value and is typically linked to other security controls outside of the Trust Framework, for example: first.last@somedomain.com.

2.3.1.2.sec=Organization Identifier: The Federation Operator maintains a list of all Participants in the Participant Directory.

2.3.1.=[Z/f/ol/s2]

2.3.2.Ti=3.02(c)(ii) Optional Attributes

2.3.2.0.Ti=Optional attributes are allowed and must be mutually agreed upon between Participants. Examples of optional attributes are:

2.3.2.1.sec=Given Name;

2.3.2.2.sec=Surname;

2.3.2.3.sec=Organization Name – this is the name of the Participating organization a person is affiliated with as mutually agreed upon between IdP and RP;

2.3.2.4.sec=Any additional attributes which are deemed relevant between the two federating parties

2.3.2.=[Z/f/ol/s4]

2.3.3.Ti=3.02(c)(iii) Attribute Uniqueness

2.3.3.sec=Attributes are required to be assigned names in the form of a URL. This is to ensure uniqueness. For example: Attribute Name identifies an attribute called ‘name’ qualified by a namespace in the form of a URL. This is a predefined attribute type defined by Microsoft. If Participants require a ‘name’ attribute with different semantics, something like this could be used: Attribute Name. See the appropriate standards for SAML and WS-Federation attribute naming requirements.

2.3.=[Z/f/ol/3]

2.=[Z/f/ol/3]

3.Ti=3.03 Technology Requirements for IdPs and RPs

3.0.0.sec=Pre-requisites for Participation by an IdP or RP in the ID Federation:

3.0.1.sec=IdPs must be able to generate digitally signed SAML/WS-federation Tokens;

3.0.2.sec=RPs must be able to consume digitally signed SAML/WS-Federation Tokens;

3.0.3.sec=A PKI based certificate from a trusted third Certificate Authority;

3.0.4.sec=Ability to create a connection end point;

3.0.5.sec=Consume Metadata from federation partner including information on the federation end-point;

3.0.6.sec=Establish secure transport layer to communicate (SSL/HTTPS);

3.0.7.sec=Any additional attributes beyond what is specified in Section 3.02(c)(i) and (ii) are considered custom attributes and must be agreed upon between IdP and RP

3.0.=[Z/ol-none/s7]

3.1.Ti=3.03(a) Establishing Initial ID Federation Relationship Between IdPs and RPs

3.1.0.sec=Once the pre-requisites are met, an IdP and an RP exchange Metadata to configure their respective technology products to participate in the federation.

3.1.1.Ti=3.03(a)(i) Metadata Exchange

3.1.1.sec=After legal and business agreements are established, Participants in the ID Federation can exchange Metadata. Metadata can be exchanged dynamic via a link or out of band.

3.1.2.Ti=3.03(a)(ii) Time Synchronization

3.1.2.sec=All Participants must implement an agreed upon level of time synchronization on all infrastructure providing IdP or RP services. Time synchronization is required to ensure that timeouts and expirations can be applied correctly across multiple systems and eliminate the risk of time drift generating connectivity issues. Clock synchronization is critical for ID Federation to be successful. It is recommended that partners participating in federation use a standard time sync tool, such as NTP pool or any central service the federation partners are signed up with. It is recommended the degree of tolerance should not exceed Stratum 3.

3.1.=[Z/f/ol/2]

3.=[Z/f/ol/1]

4.Ti=3.04 Security Requirements (IdP & RP)

4.0.sec=This section includes the security requirements applicable to the ID Federation.

4.1.Ti=3.04(a) User IDs and Passwords

4.1.0.sec=All Participants of the Trust Framework that will act as an IdP will adhere to the standard requirements for the implementation and administration of User IDs and passwords. The requirements were selected to meet regulatory and compliance guidelines as well as Information Security best practices. In addition, any entity providing a service or storing data on behalf of the Trust Framework must adhere to the requirements. A Participant may implement stricter security measures but is required to meet or exceed the requirements defined below to participate as a Trusted Partner. The following section is based upon NIST recommendations and California DMV standards.

4.1.1.Ti=3.04(a)(i) User ID

4.1.1.1.sec=User ID naming convention (applies to Trust Framework entity only)

4.1.1.2.sec=Access privilege removal for inactive, suspended, and terminated User IDs by the vendor

4.1.1.3.sec=An IdP must have a process to ensure credentials will never be sent to an RP where the User’s ID is suspended, terminated, or revoked by the vendor

4.1.1.=[Z/f/ol/s3]

4.1.2.=[GH/FutureCommerce/StandardLaw/IDFederation/Sec/Technical_Security_Password_v0.md]

4.1.=[Z/f/ol/2]



4.2.Ti=3.04(b) Certificate

4.2.0.sec=One of the primary tools aimed at ensuring confidentiality, integrity, and availability will be the utilization of a Public Key Infrastructure. This approach requires a pre-existing relationship between Participants and the utilization of digital signatures from a reputable Certificate Authority. It is at the discretion of each Participant whether to accept digital certificates from an individual Certificate Authority.
4.2.1.Ti=3.04(b)(i) Certificate Authority

4.2.1.sec=While the ID Federation does not endorse any particular Certificate Authorities, a list of common Certificate Authorities may be available on the ID Federation website from time to time. Acceptable Certificate Authorities must be agreed to by the integrating Participants for each implementation.

4.2.2.Ti=3.04(b)(ii) Certificate Expiration

4.2.2.sec=Certificate will be issued for no longer than one (1) year.

4.2.3.Ti=3.04(b)(iii) Certificate Management

4.2.3.sec=Each organization must obtain its own certificates. Certificates are validated on use to meet date, name, issuer and revocation requirements.

4.2.=[Z/f/ol/3]

4.3.Ti=3.04(c) Delegation

4.3.sec=Delegation by Identity Provider Proxies is permitted in the Trust Framework to the restrictions set forth in Section 1.01(b)(1).

4.4.Ti=3.04(d) Logging and Monitoring

4.4.1.sec=All IdPs and RPs are required to deploy appropriate logging mechanisms for the purpose of providing audit, traceability, troubleshooting and threat identification of identity-related activities, including but not limited to the success or failure of Authentication events.

4.4.2.sec=All IdPs and RPs are required to deploy appropriate log monitoring and alerting mechanisms for the purpose of identifying and responding to potential threats and attacks. The term of retention for logging shall be agreed upon between IdP and RP.

4.4.=[Z/f/ol/s2]

4.5.Ti=3.04(e) General Enterprise Security Controls

4.5.0.sec=Creating a secure environment is foundational to business relationships and is not limited to federated transactions. The requirements within Section 3.04 above speak to those which are directly related to federation. Numerous other security measures will be taken into consideration with any implementation between two external entities, including without limitation the following:

4.5.1.sec=Enterprise-Wide Security Controls

4.5.2.sec=Risk management program, including vulnerability management;

4.5.3.sec=Security & compliance management;

4.5.4.sec=Human resources security;

4.5.5.sec=Third party relationships;

NOTE=COMPLETE!

Offshore security (i.e. outside the U.S.);
Physical security;
Access control for internal users;
Password policy for internal users;
Data security;
Remote access security;
Change management;
Operations management: network monitoring & capacity management;
Anti-malware;
Logging;
Business continuity management (BCP and DR)
Secure Development
Valid software development life cycle (SDLC) process;
Inclusion of the OWASP Top 10 in testing, examples:
Session management;
Input validation;
Cross-site attacks;
Error handling
Security Testing
Penetration testing;
Vulnerability scanning;
Remediation and mitigation
Production Isolation
Production and non-production system isolation;
Carrier separation
Incident Handling
Incident response plan, including breach response
Platform Vulnerability Management
Operating System (OS) patching;
Configuration management;
Vulnerability scanning

4.5.=[Z/f/ol/s5]

4.=[Z/f/ol/5]

5.Ti=3.05 Central Services

5.1.Ti=3.05(a) Introduction

5.1.sec=The Policy Authority supports the provision of certain central services by the Federation Operator that aid in the implementation of federated technology. In addition to the information laid out in this documentation, additional services will be provided to those Members of this organization. Details for these services are provided below.

5.2.Ti=3.05(b) Participant Directory

5.2.0.sec=A Participant Directory will house Participant data which will be accessible by ID Federation Participants.

5.2.1.Ti=3.05(b)(i) Contents

5.2.1.0.sec=Minimally, the contents of the Participant Directory will contain the following information fields (some of which are only applicable to certain Role(s):
Data Attribute IdP RP Liaison
IDFI IDFI Role • • •
IDFI URI • • •
IDFI Organization Name • • •
Membership Agreement • • •
Dues • • •
Organization Organization Name • • •
Organization HQ
Location
• • •
Data Attribute IdP RP Liaison
Contact Info • • •
Technical
Certification
Participation Agreement • • •
Assessment Completion • • N/A
Certification Result • • N/A
Section 3.04 Rules • • N/A
Federation Standard and
Version (SAML)
• • N/A
Endpoint URL(s) per
App
Optional • N/A
Server Certificates (and
Certificate Authority)
• • N/A
Attribute List • • N/A
Sample XML • • N/A

5.2.1.=[Z/f/ol/s4]

5.2.2.Ti=3.05(b)(ii) Modifying & Notifications

5.2.2.sec=The information contained within the Participant Directory must be kept current. It is the sole responsibility of the Participants to provide current and accurate information. The ID Federation assumes no responsibility for its accuracy and relevance. The server certificates have expiration dates and must be properly updated beyond the initial federation set up. It is the responsibility of each Participant to notify other Participants, as relevant, of updated information.

5.2.3.Ti=3.05(b)(iii) Removal

5.2.3.sec=When a Participant is terminated in accordance with Section 1.04, the data they have provided will be inactivated for a period of six (6) months, and after which, it will be purged.

5.2.=[Z/f/ol/3]

5.=[Z/f/ol/2]

=[Z/f/ol/5]
