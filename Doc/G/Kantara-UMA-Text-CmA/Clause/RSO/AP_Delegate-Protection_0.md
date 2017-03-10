Title={Resource_Server_Operator}-{Authorizing_Party}: Delegate-Protection

Condition=For the period that the {Resource_Server_Operator} and {Authorizing_Party} have mutually agreed to serve in these respective roles for each other

Parties=the {Resource_Server_Operator} gains an obligation to the {Authorizing_Party}

Duty={Duty.1}

Duty.1=to delegate protection services to the {Authorization_Server_Operator} for the set of protectable resources for which it represents this capability to the {Authorizing_Party}, and to respect the authorization data that the {Authorization_Server} has associated with an {RPT} when the {Resource_Server} subsequently allows or disallows access by the {Client} that presented that {RPT}

Comments=The original condition was "When the {Authorization_Server} issues a {PAT} to a {Resource_Server} and as long as the {PAT} is valid". That is, it relied on later action that involved the {Authorization_Server_Operator}. We now suspect this is much too late, and inappropriately entangling with a third party. The original commentary on this condition was "Once the {Authorization_Server_Operator} becomes the {Authorizing_Party}'s authorization proxy, it begins relying on the {Resource_Server_Operator} in other, more specific ways. The {Resource_Server} has the opportunity to inspect AM-issued permissions or take other actions that delegate protection responsibility to the {Authorization_Server} at a later stage, but its responsibility for respecting them begins now. The specific protection services made available to the {Resource_Server} by the {Authorization_Server} differ depending on the {RPT} profile in use. This obligation can be removed through {PAT} revocation."

=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]
