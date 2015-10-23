
Ti=Security Requirements (IdP & RP)

0.sec=This section includes the security requirements applicable to the ID Federation.

1.Ti=User IDs and Passwords

1.0.sec=All Participants of the Trust Framework that will act as an IdP will adhere to the standard requirements for the implementation and administration of User IDs and passwords. The requirements were selected to meet regulatory and compliance guidelines as well as Information Security best practices. In addition, any entity providing a service or storing data on behalf of the Trust Framework must adhere to the requirements. A Participant may implement stricter security measures but is required to meet or exceed the requirements defined below to participate as a Trusted Partner. The following section is based upon NIST recommendations and California DMV standards.

1.1.Ti=User ID

1.1.1.sec=User ID naming convention (applies to Trust Framework entity only)

1.1.2.sec=Access privilege removal for inactive, suspended, and terminated User IDs by the vendor

1.1.3.sec=An IdP must have a process to ensure credentials will never be sent to an RP where the User’s ID is suspended, terminated, or revoked by the vendor

1.1.=[Z/f/ol/s3]

1.2.=[GH/FutureCommerce/StandardLaw/IDFederation/Sec/Technical/SecurityRequirements_Password_v0.md]

1.=[Z/ol-i/2]


2.Ti=Certificate

2.0.sec=One of the primary tools aimed at ensuring confidentiality, integrity, and availability will be the utilization of a Public Key Infrastructure. This approach requires a pre-existing relationship between Participants and the utilization of digital signatures from a reputable Certificate Authority. It is at the discretion of each Participant whether to accept digital certificates from an individual Certificate Authority.

2.1.Ti=Certificate Authority

2.1.sec=While the ID Federation does not endorse any particular Certificate Authorities, a list of common Certificate Authorities may be available on the ID Federation website from time to time. Acceptable Certificate Authorities must be agreed to by the integrating Participants for each implementation.

2.2.Ti=Certificate Expiration

2.2.sec=Certificate will be issued for no longer than one (1) year.

2.3.Ti=Certificate Management

2.3.sec=Each organization must obtain its own certificates. Certificates are validated on use to meet date, name, issuer and revocation requirements.

2.=[Z/ol-i/3]

3.Ti=Delegation

3.sec=Delegation by Identity Provider Proxies is permitted in the Trust Framework to the restrictions set forth in Section 1.01(b)(1).

4.Ti=Logging and Monitoring

4.1.sec=All IdPs and RPs are required to deploy appropriate logging mechanisms for the purpose of providing audit, traceability, troubleshooting and threat identification of identity-related activities, including but not limited to the success or failure of Authentication events.

4.2.sec=All IdPs and RPs are required to deploy appropriate log monitoring and alerting mechanisms for the purpose of identifying and responding to potential threats and attacks. The term of retention for logging shall be agreed upon between IdP and RP.

4.=[Z/ol-i/s2]

5.Ti=General Enterprise Security Controls

5.0.sec=Creating a secure environment is foundational to business relationships and is not limited to federated transactions. The requirements within Section 3.04 above speak to those which are directly related to federation. Numerous other security measures will be taken into consideration with any implementation between two external entities, including without limitation the following:

5.1.sec=Enterprise-Wide Security Controls

5.2.sec=Risk management program, including vulnerability management;

5.3.sec=Security & compliance management;

5.4.sec=Human resources security;

5.5.sec=Third party relationships;

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

5.=[Z/ol-i/s5]

=[Z/ol-a/5]
