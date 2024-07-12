CodersNote=A basic outline for an NDA.  Borrowing some terms from "TechContracts.com".

CodersNote=We start with the basic frame for an Agreement - header, parties, why, sections, signature.

=[G/NW-NDA/00/Form/Agt.md]

sec=<ol><li>{Prime.Sec}<li>{Def.Sec}<li>{General.Sec}<li>{Misc.Sec}</ol>

CodersNote=We borrow TechContracts' notion of "Prime" clauses - the business terms.

Prime.Sec=<b>{Prime.Ti}</b><br>{Intro.sec}<ol><li>{ConfInfo.Sec}</li><li>{Use.Sec}</li><li>{IP.Sec}</li><li>{Flow.Sec}</li></ol>

Use.Sec=<b>{Use.Ti}</b><br><ol><li>{Use.Purpose.Sec}</li><li>{Use.Analyze.Sec}</li></ol>

IP.Sec=<b>{IP.Ti}</b><br><ol><li>{IP.Had.Sec}</li><li>{IP.Make.Sec}</li></ol>

CodersNote="Flow" is for the intended movement of information.  Confide, Circulate, Copy, Return.  Disclosure to a non-party is an unintended risk, handled in the General terms.

CodersNote="Flow" is something like the notion of "Happy Path", what is supposed to happen with information confided by the Provider to the Recipient.  Most of the rest is background or risk management.

Flow.Sec=<b>{Flow.Ti}</b><br><ol><li>{Confide.Sec}</li><li>{Circulate.Sec}</li><li>{Copy.Sec}</li><li>{Return.Sec}</li></ol>

Confide.Sec=<b>{Confide.Ti}</b><br><ol><li>{Confide.Scope.Sec}</li><li>{Confide.Method.Sec}</li></ol>

Circulate.Sec=<b>{Circulate.Ti}</b><br><ol><li>{Circulate.ToWhom.Sec}</li><li>{Circulate.Conditions.Sec}</li></ol>

Copy.Sec=<b>{Copy.Ti}</b><br><ol><li>{Copy.Permitted.Sec}</li><li>{Copy.Tracking.Sec}</li></ol>

Return.Sec=<b>{Return.Ti}</b><br><ol><li>{ReturnToProvider.Sec}</li><li>{Destroy.Sec}</li></ol>

ConfInfo.Sec=<b>{ConfInfo.Ti}</b><br>{ConfInfo.Intro.sec}<ol><li>{Include.Sec}</li><li>{Exclude.Sec}</li></ol>

Include.Sec=<b>{Include.Ti}</b><br>{Include.Intro.sec}<ol><li>{Include.Core.sec}</li><li>{Include.Marked.sec}</li><li>{Include.Obvious.sec}</li></ol>

Def.Sec=<b>{Def.Ti}</b><br><ol><li>{Def.Provider.sec}</li><li>{Def.Recipient.sec}</li><li>{Def.Confidential_Information.sec}</li><li>{Def.Asset.sec}</li></ol>

General.Sec=<b>{General.Ti}</b><br><ol><li>{BreachByDisclosure.Sec}</li><li>{Notice.Sec}</li><li>{Amend.Sec}</li><li>{GovtDemand.Sec}</li><li>{Dispute.Sec}</li><li>{Law.Sec}</li></ol>

Misc.Sec=<b>{Misc.Ti}</b><br><ol><li>{Counterpart.Sec}</li></ol>

CodersNote=English Language defaults (to be moved to the /US/EN/ folder)

Doc.Ti=Non-Disclosure Agreement

Why.Ti=Whereas:

Among.secs/2=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li></ul>

Among.Ti/2=By and Between:

Among.Def.sec=Each a "{DefT.Party}" and collectively the "{_Parties}."

This.sec/2=This {Doc.Ti} (this "{DefT.Agreement}") is made as of {EffectiveDate.YMD} ("{DefT.Effective_Date}"), by and between the {_Parties}.

Why.Ti=Recitals

That.sec=In consideration of the mutual promises contained in {_this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {_Parties} agree as follows:

By.Ti=Signature

Note=As with "Among," By assumes two parties but you can make more - By.secs={By.secs/3} or 4, etc.

By.0.sec=IN WITNESS WHEREOF, the {_Parties} have executed {_this_Agreement} as of the {_Effective_Date}.

By.secs/2=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr></table>

CodersNote=Section Headings

Prime.Ti=Primary Terms

Use.Ti=Use of Information

IP.Ti=Intellectual Property Rights

Flow.Ti=The Flow of Confidential Information

Confide.Ti=Scope and Methods of Confiding Information

Circulate.Ti=Circulation of Information by Recipient

Copy.Ti=Copies of Information Made by Recipient

Return.Ti=Return of Information by Recipient

ConfInfo.Ti=Confidential Information

Def.Ti=Definitions

General.Ti=General Terms

Misc.Ti=Miscellaneous Terms


CodersNote=Examples of Defined Terms as Links:

_Effective_Date=<a href="#Def.Effective_Date.sec" class="definedterm">Effective Date</a>

_Agreement=<a href="#Def.Agreement.sec" class="definedterm">Agreement</a>

_this_Agreement=this {_Agreement}

_Party=<a href="#Def.Party.sec" class="definedterm">Party</a>

_Parties=<a href="#Def.Party.sec" class="definedterm">Parties</a>

CodersNote=These terms are defined "inline" - in the text rather than in the Definitions section. That is a common device, though debatable as a best practice.  We can make each use of the defined term link to the place in which the term is defined by using the device of a double include - the Def.Agreement.sec={_Agreement} provides an HTML target called Def.Agreement.sec.  

Def.Effective_Date.sec={_Effective_Date}

Def.Agreement.sec={_Agreement}

Def.Party.sec={_Party}
