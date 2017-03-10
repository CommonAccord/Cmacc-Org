Title={Requesting_Party}-{Authorizing_Party}: Adhere-to-Terms

Condition=When the {Client} successfully gains access from a {Resource_Server} to a protected resource by wielding a valid "bearer" {RPT} associated with at least one currently valid permission for the type of access sought

Parties=the {Requesting_Party} using that {Client} gains an obligation to the {Authorizing_Party}

Duty={Duty.1}

Duty.1=to adhere to any terms it agreed to in order to gain the permission

Comments=This key obligation enables the end-to-end access authorization agreement that {UMA} exists to forge. At a previous stage, the {Requesting_Party} asked for a relevant permission from the {Authorization_Server} and might have had to provide claims of a promissory nature. Accepting access to the protected resource binds the {Requesting_Party} to any terms it agreed to using the claims mechanism, for example, agreeing only to read the resource rather than modifying it, or forbearing from selling the resource data to someone else.

Issues=<b>NEEDS DISCUSSION.</b> Note that the obligation goes into effect the first time a {Client} gains access under the power of a "currently valid permission". If there was more than one valid permission attached to different sets of promises, if a secure record was not kept by the {Resource_Server} and/or {Authorization_Server} of which permission was used for granting access (<b>an opportunity for transaction receipts?</b>), ambiguity is introduced. Defining and using {RPT} profiles other than the "bearer" profile might lessen the potential ambiguity. <b>Alternative choices:</b> Should the condition be earlier, say, when the {RPT} is issued, or even when the {Requesting_Party}/{Client} provides claims (if any are provided)?

=[G/Kantara-UMA-Text-CmA/Z/Clause_0.md]
