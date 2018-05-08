Ti=Technology Requirements for IdPs and RPs

0.0.sec=Pre-requisites for Participation by an IdP or RP in the ID Federation:

0.1.sec=IdPs must be able to generate digitally signed SAML/WS-federation Tokens;

0.2.sec=RPs must be able to consume digitally signed SAML/WS-Federation Tokens;

0.3.sec=A PKI based certificate from a trusted third Certificate Authority;

0.4.sec=Ability to create a connection end point;

0.5.sec=Consume Metadata from federation partner including information on the federation end-point;

0.6.sec=Establish secure transport layer to communicate (SSL/HTTPS);

0.7.sec=Any additional attributes beyond what is specified in Section 3.02(c)(i) and (ii) are considered custom attributes and must be agreed upon between IdP and RP

0.Sec={3.0.sec}

0.=[G/Z/ol-none/s7]

1.Ti=Establishing Initial ID Federation Relationship Between IdPs and RPs

1.0.sec=Once the pre-requisites are met, an IdP and an RP exchange Metadata to configure their respective technology products to participate in the federation.

1.1.Ti=Metadata Exchange

1.1.sec=After legal and business agreements are established, Participants in the ID Federation can exchange Metadata. Metadata can be exchanged dynamic via a link or out of band.

1.2.Ti=Time Synchronization

1.2.sec=All Participants must implement an agreed upon level of time synchronization on all infrastructure providing IdP or RP services. Time synchronization is required to ensure that timeouts and expirations can be applied correctly across multiple systems and eliminate the risk of time drift generating connectivity issues. Clock synchronization is critical for ID Federation to be successful. It is recommended that partners participating in federation use a standard time sync tool, such as NTP pool or any central service the federation partners are signed up with. It is recommended the degree of tolerance should not exceed Stratum 3.

1.=[G/Z/ol-i/2]

=[G/Z/ol-a/1]
