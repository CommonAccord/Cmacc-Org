Title={Requesting_Party}-{Resource_Server_Operator}: Is-Legitimate-Bearer

Condition=When the {Authorization_Server} issues an {RPT} to a {Client} and for as long as the {RPT} is valid

Parties=the {Requesting_Party} using that {Client} gains an obligation to the {Resource_Server_Operator}

Duty={Duty.1}

Duty.1=to represent the legitimate bearer of the {RPT} or its authorized representative, and not to allow others to impersonate the {Requesting_Party}

Comments=In the case where the "bearer" {RPT} profile or any other bearer-style {RPT} profile is used, the token may not be bound in any technically confirmable way to the specific client and requesting party it applies to. Defining and using different {UMA} token profiles can mitigate the risk of failure or malice on the {Requesting_Party}'s part. The "authorized representative" phrase is intended to clear the way for token-chaining profiles or similar

=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]
