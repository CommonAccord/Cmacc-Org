Here's one idea for how CommonAccord could work with UMA:


1.Ti=Alice -> RS

1.0.sec=Enable the RS to author the form to describe the accessible resources and policies

1.1.sec=Separate sections for each choice they are willing to offer the Resource Owner (via UMA)

1.2.sec=Give each choice (3) a unique identifier within the form

1.3.sec=Publish the form so that any interested Client or Requesting Party (RqP) can find it anytime

1.=[Z/ol/s3]


2.Ti=When an AS is specified as part of Resource Registration (UMA Phase 1) (RS ->AS)

2.1.sec=Transmit the form to the AS

2.2.sec=The AS notifies the RO and hosts a secure link to the Form
 
2.3.sec=The RO reads the form, makes choices, and saves the result locally at the AS

2.4.sec=The AS returns success to the RS and the resource is registered

2.=[Z/ol/s4]


3.Ti=When a RqP / Client pair approach the AS (UMA Phase 2) (AS -> RqP)

3.1.sec=The Client, having access to the published form from step (1.3) requests access in terms of the locally unique identifiers (1.2)

3.2.sec=The AS compares the request to the policies stored in step (3.1)

3.3.sec=The AS issues a token to the C to present to the RS

3.4.sec=The RS introspects the token to get the identifiers (1.2) applicable to this particular authorization

3.5.sec=The RS provides access to the Client according to (3.4)

3.=[Z/ol/s5]

=[Z/ol/3]

=In this sequence, CommonAccord is only active relative to the RS. The simplest AS knows nothing about CommonAccord, although a more sophisticated AS could look up the CommonAccord details if they are published along with (5) and use that information to provide additional context to the RO.

=In addition, a public ledger (e.g.: blockchain) for non-repudiation could be used to document:

=- the claims presented by the RqP / C in order to protect the AS / RO

=- the the RS-AS token introspection transaction in order to protect the RS

=- the actual accounting for disclosure in step 14 

=This pattern has two major benefits. It allows for generic authorization servers that have no domain-specific ontologies. Second, this pattern is privacy-preserving for the RO because details of policy are not shared with the RS - only the outcome. Also, when this pattern is combined with a personal AS, it avoids a major problem with management of sensitive data (e.g: 42CFR Part 2  substance abuse information in healthcare) by a highly regulated separate consent management service.

=Could we hack CommonAccord and UMA to do this?
  
=Yes we can!