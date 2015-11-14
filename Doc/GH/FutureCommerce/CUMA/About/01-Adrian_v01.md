Here's one idea for how CommonAccord could work with UMA:

1 - Modify CommonAccord so the Document and Print tabs create an HTML form
2 - Enable the RS to author the HTML form to describe the accessible resources and policies
3 - Help the RS create separate sections for each choice they are willing to offer the Resource Owner (via UMA)
4 - Give each choice (3) a unique identifier within the form
5 - Publish the form so that any interested Client or Requesting Party can find it anytime

When an AS is specified as part of Resource Registration (UMA Phase 1)

6 - Transmit the HTML form to the AS
7 - The AS notifies the RO and hosts a secure link to the Form 
8 - The RO reads the form, makes choices, and saves the result locally at the AS
9 - The AS returns success to the RS and the resource is registered

When a RqP / Client pair approach the AS (UMA Phase 2)

10 - The Client, having access to the published form from step (5) requests access in terms of the locally unique identifiers (4)
11 - The AS compares the request to the policies stored in step (8)
12 - The AS issues a token to the C to present to the RS
13 - The RS introspects the token to get the identifiers (4) applicable to this particular authorization
14 - The RS provides access to the Client according to (13)

In this sequence, CommonAccord is only active relative to the RS. The simplest AS knows nothing about CommonAccord, although a more sophisticated AS could look up the CommonAccord details if they are published along with (5) and use that information to provide additional context to the RO.

In addition, a public ledger (e.g.: blockchain) for non-repudiation could be used to document:
- the claims presented by the RqP / C in order to protect the AS / RO
- the the RS-AS token introspection transaction in order to protect the RS
- the actual accounting for disclosure in step 14 

This pattern has two major benefits. It allows for generic authorization servers that have no domain-specific ontologies. Second, this pattern is privacy-preserving for the RO because details of policy are not shared with the RS - only the outcome. Also, when this pattern is combined with a personal AS, it avoids a major problem with management of sensitive data (e.g: 42CFR Part 2  substance abuse information in healthcare) by a highly regulated separate consent management service.

Could we hack CommonAccord and UMA to do this?
