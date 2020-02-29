
_P1.The=The University 

_P1.the=the University 

_Agreement=this lease

_P2.the=the Lessee

Model.Root={Action.cl} when {Trigger.cl}, by {Method.cl}{Except.cl}.

Action.cl={_P1.The} may terminate {_Agreement}


Trigger.cl={Trigger.1.cl}, or {Trigger.2.cl}, or {Trigger.3.cl}, or {Trigger.4.cl}


Trigger.1.cl={_P2.the}, having made application and executed this lease in advance of enrollment, is not eligible to enroll or fails to enroll in {_P1.the} or leaves {_P1.the} at any time prior to the expiration of this lease


Trigger.2.cl=for violation of any provisions of this lease


Trigger.3.cl=for violation of any University regulation relative to resident Halls

Trigger.4.cl=for health reasons

Method.cl=providing the student with written notice of this termination {Notice.Period} prior to the effective date of termination

Notice.Period=30 days


Except.cl=; unless {Except.Trigger.cl}, in which cases {Except.Effect.cl}

Except.Trigger.cl={Except.Trigger.1.cl}, {Except.Trigger.2.cl}, or {Except.Trigger.3.cl}, or {Except.Trigger.4.cl}, or {Except.Trigger.5.cl}



Except.Trigger.1.cl=life, limb, or property would be jeopardized
 
Except.Trigger.2.cl={_P2.the} engages in the sales of purchase of controlled substances in violation of federal, state or local law

Except.Trigger.3.cl={_P2.the} is no longer enrolled as a student

Except.Trigger.4.cl={_P2.the} engages in the use or possession of firearms, explosives, inflammable liquids, fireworks, or other dangerous weapons within the building

Except.Trigger.5.cl=turns in a false alarm


Except.Effect.cl= a maximum of {Except.Notice.Period} notice would be sufficient

Except.Notice.Period=24 hours