
Ti=Standards Conformance (IdP & RP)

0.sec=IdPs and RPs must conform to at least one of the following standards. (Links regarding these standards may be found on the ID Federation website.)

1.Ti=Standards

1.0.sec=The identity standards used by ID Federation Participants are Security Assertion Markup Language (SAML) and WS-Federation.

1.1.Ti=Security Assertion Markup Language (SAML)

2.1.sec=SAML is an XML-based open standard for exchanging Authentication and Authorization data between an IdP and an RP.

1.2.Ti=WS-Federation

1.2.sec=WS-Federation is an identity federation specification, developed by BEA Systems, BMC Software, CA Inc., IBM, Layer 7 Technologies, Microsoft, Novell, Ping Identity, and VeriSign. Part of the larger Web Services Security framework, WS-Federation defines mechanisms for allowing disparate security realms to broker information on identities, Identity Attributes and Authentication.

1.=[G/Z/ol-i/2]

2.Ti=Profiles

2.0.sec=A profile defines a set of rules and constraints for a standard in order to facilitate the usage of that standard for common Use Cases. The high-level Use Cases in Section 3.01(c) are supported by the following common profiles.

2.1.Ti=SAML

2.1.sec=Web Browser SSO Profile

2.2.Ti=WS-Federation

2.2.sec=WS-Federation Passive Requester Profile, WS-Federation Active Requester Profile

2.=[G/Z/ol-i/2]

3.Ti=Attributes

3.0.sec=Participation enables identity attribute sharing across Participant security domains to facilitate access to resources. Participants in the IdP Role are expected to provide authoritative and accurate attribute assertions to other Participants. Attributes are mutually agreed upon between each IdP and RP pair. ID Federation does not require specific attribute values, but it does require at least one attribute that is a unique identifier for the user responsible for a given transaction and at least one attribute that is a unique identifier for the organization or entity responsible for a given transaction. Relying Parties receiving attribute assertions from IdPs may choose to ignore those assertions not required to provide access.

3.1.Ti=Recommended Unique Identifier Attributes

3.1.1.sec=Email Address: If used, the email address must be valid. This is a globally unique value and is typically linked to other security controls outside of the Trust Framework, for example: first.last@somedomain.com.

3.1.2.sec=Organization Identifier: The Federation Operator maintains a list of all Participants in the Participant Directory.

3.1.=[G/Z/ol/s2]

3.2.Ti=Optional Attributes

3.2.0.Ti=Optional attributes are allowed and must be mutually agreed upon between Participants. Examples of optional attributes are:

3.2.1.sec=Given Name;

3.2.2.sec=Surname;

3.2.3.sec=Organization Name – this is the name of the Participating organization a person is affiliated with as mutually agreed upon between IdP and RP;

3.2.4.sec=Any additional attributes which are deemed relevant between the two federating parties

3.2.=[G/Z/ol/s4]

3.3.Ti=Attribute Uniqueness

3.3.sec=Attributes are required to be assigned names in the form of a URL. This is to ensure uniqueness. For example: Attribute Name identifies an attribute called ‘name’ qualified by a namespace in the form of a URL. This is a predefined attribute type defined by Microsoft. If Participants require a ‘name’ attribute with different semantics, something like this could be used: Attribute Name. See the appropriate standards for SAML and WS-Federation attribute naming requirements.

3.=[G/Z/ol-i/3]

=[G/Z/ol-a/3]
