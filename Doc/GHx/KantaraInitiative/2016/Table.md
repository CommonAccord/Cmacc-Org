0.1.sec=Trust relationship

0.2.sec=Dependencies on existing nonfunctional requirements

0.3.sec=In scope for model text work?

0.4.sec=(Candidate names of agreements formed out of our official clauses)

0.5.sec=Technical artifact

0.6.sec=Dependencies on existing technical artifacts

0.7.sec=Discussion

1.1.sec=Resource Subject - Grantor (if they are different)

1.2.sec=n/a

1.3.sec=No

1.4.sec=n/a

1.5.sec=n/a

1.6.sec=n/a

	 
2.1.sec=RSO - ASO

2.2.sec=n/a

2.3.sec=Yes

2.4.sec=Protection API client agreement

2.5.sec=OAuth client credentials for RS

2.6.sec=n/a

90.Sec=</i>

=[Z/tb/r/2]

=[Z/tb/c/7]
	 
Grantor - ASO	n/a	Yes	Authorization services agreement	n/a	n/a	This has no technical artifact in UMA, and therefore no exact or obvious moment of appearing "on stage" for our work. Does this have an impact on whether it is in scope based on the rationale above? We agreed there are definitely reasons to have UMA-specific clauses, looking at our draft ones.
Grantor - RSO	RSO - ASO	Yes	Resource protection agreement	PAT	OAuth client credentials for RS	It's awkward to have a two-party agreement resting on a PAT. There are plenty of agreements where there are multiple Persons in one of the roles, but we're not so sure about true three-role agreements.
Client Operator - ASO	n/a	Yes	Authorization API client agreement	OAuth client credentials for Client	n/a	We have not scrutinized the definition of Client Operator. Let's put a pin in that to be sure it's okay.
"RqP" - Client Operator	n/a	No	n/a	n/a	n/a	We need to work on the term for "RqP". Let's put a pin in that.
"RqP" - ASO	Client Operator - ASO	Yes	Resource authorization agreement	AAT	OAuth client credentials for Client	The same discussion about n-party agreements above applies here.
Grantor - "RqP"	Resource Subject - Grantor, RSO - ASO, Grantor - ASO, Grantor - RSO, Client Operator - ASO, "RqP" - Client Operator, "RqP" - ASO, Grantor - "RqP"	Yes?	
Resource sharing agreement
Resource access agreement
Trust elevation mechanism and specifically claims subprotocol	OAuth client credentials for RS, PAT, OAuth client credentials for Client, AAT	Could be in the form of a consent receipt, sent to a notification endpoint. Is this trust relationship too "dependent" to be in scope, or does the calculus work? More discussion is needed.