Title={Resource_Server_Operator}-{Authorization_Server_Operator}: Respect-Permissions

Condition=For the period that the {Resource_Server_Operator} and {Authorization_Server_Operator} have mutually agreed to serve in these respective roles for each other

Parties=the {Resource_Server_Operator} gains an obligation to the {Authorization_Server_Operator}

Duty={Duty.1}

Duty.1=to disallow access by a {Client} presenting an {RPT} in all cases where the authorization data associated by the {Authorization_Server} is insufficient for the access attempt.

Comments=The original condition was "When the {Resource_Server} successfully introspects a "bearer" {RPT}". We now suspect this is much too late. The original commentary on this condition was "The {Resource_Server_Operator}, as a {Person} that is otherwise potentially not obligated to the {Authorization_Server_Operator}, carries a great deal of responsibility here not to allow access where the {Authorization_Server} has not granted permission and to make every effort to grant access where the {Authorization_Server} has granted permission. Its interpretation of scopes and permissions is not directly auditable by the {Authorization_Server}. Further, issues can arise from the skew between permission validity periods and actual access. Defining and using different {RPT} profiles can mitigate the risk of failure or malice on the {Resource_Server_Operator}'s part." The duty has also been changed so that the {Resource_Server} has to perform the negative case, but doesn't have to perform the positive case (let the {Requesting_Party} in just because the authorization data said so).

=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]
