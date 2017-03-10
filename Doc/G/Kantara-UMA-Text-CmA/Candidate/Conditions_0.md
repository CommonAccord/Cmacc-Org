RSO-ASO.Role-Establishment.Title={Resource_Server_Operator}-{Authorization_Server_Operator} role establishment

RSO-ASO.Role-Establishment.Condition=For the period that the {Resource_Server_Operator} and {Authorization_Server_Operator} have mutually agreed to serve in these respective roles for each other

RSO-ASO.Role-Establishment.=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]


RSO-AuthzP.Role-Establishment.Title={Resource_Server_Operator}-{Authorizing_Party} role establishment

RSO-AuthzP.Role-Establishment.Condition=For the period that the {Resource_Server_Operator} and {Authorizing_Party} have mutually agreed to serve in these respective roles for each other

RSO-AuthzP.Role-Establishment.=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]


ASO-AuthzP.Role-Establishment.Title={Authorization_Server_Operator}-{Authorizing_Party} role establishment

ASO-AuthzP.Role-Establishment.Condition=For the period that the {Authorization_Server_Operator} and {Authorizing_Party} have mutually agreed to serve in these respective roles for each other

ASO-AuthzP.Role-Establishment.=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]


RO-RSO.RSO-Accepts-RO-Choice-Of-ASO.Title={Authorization_Server_Operator} choice acceptable to {Resource_Server_Operator}

RO-RSO.RSO-Accepts-RO-Choice-Of-ASO.Condition=When more than one choice of an {Authorization_Server_Operator} is acceptable to a {Resource_Server_Operator}

RO-RSO.RSO-Accepts-RO-Choice-Of-ASO.=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]


RO-RS.No-Default-AS.Title={Resource_Server} nondefault {Authorization_Server} choice interface

RO-RS.No-Default-AS.Condition=When the {Resource_Server} has presented an interface to the {Resource_Owner} that does not default to an automatic choice of an {Authorization_Server}

RO-RS.No-Default-AS.=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]


ASO-RSO.RSO-Satisfies-ASO-Credentials-Requirements.Title={Resource_Server_Operator} meets {Authorization_Server_Operator} client credentials requirements

Note=Do we mean "{Client}"?

ASO-RSO.RSO-Satisfies-ASO-Credentials-Requirements.Condition=When the {Resource_Server} has met any requirements for acquiring OAuth client credentials

ASO-RSO.RSO-Satisfies-ASO-Credentials-Requirements.=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]


Model.Root=<ol><li>{RSO-ASO.Role-Establishment.Sec}<li>{RSO-AuthzP.Role-Establishment.Sec}<li>{ASO-AuthzP.Role-Establishment.Sec}<li>{RO-RSO.RSO-Accepts-RO-Choice-Of-ASO.Sec}<li>{RO-RS.No-Default-AS.Sec}<li>{ASO-RSO.RSO-Satisfies-ASO-Credentials-Requirements.Sec}</ol>

=[G/Kantara-UMA-Text-CmA/Terminology/ParameterizedTerms_0.md]


(maybe need other security precautions here, about OAuth redirects and registered callback endpoints? or can that be commentary?)

Duty:
Duty.1 of Introduce-Authorization-Server (probably reworded to be more formal)

Conditions precedent:
No preestablished ASO relationship with RSO: When the Authorization Server Operator has no preestablished relationship with the Resource Server Operator
