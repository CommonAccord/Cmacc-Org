Note=From:  http://kantarainitiative.org/pipermail/wg-uma/2016-February/004229.html

Ti=Definitions

1.Ti=Resource Registration Agreement

1.sec=A contract between the {Resource_Server_Operator} and the resource subject or authorized agent of the resource subject that defines a resource pertaining to the resource subject, including available and supported scopes, and delegates some control over that resource to an {Authorization_Server}. The Resource Registration Agreement establishes Phase 1 of the UMA Protocol at a time when neither the Client nor the Requesting Party are known to either the {RS} / {RSO} or the {AS} / {ASO}. As such, this is equivalent to a typical healthcare ROI form if the ROI form were to specify an agent for the subject instead of the client for for the purpose of authorized access to the resource.

2.Ti=Authorization Server Endpoint

2.sec=The URI and associated .well_known endpoints of a standards-based authorization server acting as the agent of the resource subject during UMA Phase 2. Under this Resource Registration Agreement, the RSO agrees to consider a token signed by the {AS} as presented by the {RqP} / {Client}. The {RS} may either accept the token or it can notify the {AS} that the token was not accepted or modified in scope.

3.Ti=Resource Subject Signature and Date

3.sec=The individual who's PII is accessed via the resource. This individual could be any age and should not need to be able to read or write or use technology. 

4.Ti=Authorized Agent Name, Signature and Date

4.sec=The individual that the {RSO} recognizes as an authorized agent of the resource subject in cases where the resource subject is unable to sign for herself. The basis of this recognition is completely out of band from UMA.

=[Z/ol/4]

Note=For parameterized terms.

RS={Resource_Server}

RSO={Resource_Server_Operator}

AS={Authorization_Server}

ASO={Authorization_Server_Operator}

RqP={Requesting_Party}

=[GH/KantaraInitiative/UMA-Text/0.md]