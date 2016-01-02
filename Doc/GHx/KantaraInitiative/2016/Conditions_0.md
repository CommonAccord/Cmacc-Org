RSO-ASO.Title=RSO-ASO role establishment

RSO-ASO.Condition=For the period that the {Resource_Server_Operator} and {Authorization_Server_Operator} have mutually agreed to serve in these respective roles for each other

RSO-ASO.=[GH/KantaraInitiative/UMA-Text/Z/Clause_0.md]


RSO-AuthzP.Title=RSO-AuthzP role establishment

RSO-AuthzP.Condition=For the period that the {Resource_Server_Operator} and {Authorizing_Party} have mutually agreed to serve in these respective roles for each other

RSO-AuthzP.=[GH/KantaraInitiative/UMA-Text/Z/Clause_0.md]


ASO-AuthzP.Title=ASO-AuthzP role establishment

ASO-AuthzP.Condition=For the period that the {Authorization_Server_Operator} and {Authorizing_Party} have mutually agreed to serve in these respective roles for each other

ASO-AuthzP.=[GH/KantaraInitiative/UMA-Text/Z/Clause_0.md]


ASO choice acceptable to RSO: When more than one choice of an Authorization Server Operator is acceptable to a Resource Server Operator

RS nondefault AS choice interface: When the Resource Server has presented an interface to the Resource Owner that does not default to an automatic choice of Authorization Server
RSO meets ASO client credentials requirements: When the Resource Server has met any requirements for acquiring OAuth client credentials
(maybe need other security precautions here, about OAuth redirects and registered callback endpoints? or can that be commentary?)

Duty:
Duty.1 of Introduce-Authorization-Server (probably reworded to be more formal)

Conditions precedent:
No preestablished ASO relationship with RSO: When the Authorization Server Operator has no preestablished relationship with the Resource Server Operator




Model.Root=<ol><li>{RSO-ASO.Sec}<li>{RSO-AuthzP.Sec}<li>{ASO-AuthzP.Sec}</ol>