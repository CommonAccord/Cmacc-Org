Title={Authorizing_Party}-{Resource_Server_Operator}: Introduce-Authorization-Server

Condition=When the {Authorization_Server} issues a {PAT} to a {Resource_Server} and as long as the {PAT} is valid

Parties=the {Authorizing_Party} gains an obligation to the {Resource_Server_Operator}

Duty={Duty.1}

Duty.1=to introduce the desired {Authorization_Server} to this {Resource_Server} in outsourcing protection of this {Resource_Server}'s resources

Comments=Once the {Authorization_Server_Operator} becomes the {Authorizing_Party}’s authorization proxy, the {Resource_Server_Operator} begins relying on it in other, more specific ways. How the {Authorizing_Party} indicated the desired {Authorization_Server} to the host is out of band for {UMA}; it is the {Authorizing_Party}'s responsibility to check that it has been redirected to an acceptable {Authorization_Server} before the {Authorization_Server} successfully issues the {PAT}. This obligation can be removed through {PAT} revocation.

=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]
