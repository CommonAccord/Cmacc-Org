Note=This file is the (US) English language part of the Agreement frame.  It lists the English language snippets and references the common frame.

Head.EffectiveDate.sec={_Effective_Date}: {EffectiveDate.YMD}

Note=Parties.  In English we distinguish between an agreement <i>betweeen</i> two parties and an agreement <i>among</i> three or more.  In the common frame there is a default to two parties because that is most common, but you can change that with Among.Ti={Among.Ti/3} and Among.secs={Among.secs/3} or 4... 

Among.Ti/2=By and Between:

Among.Ti/3=By and Among:

Among.secs={Among.secs/2}

Among.secs/2=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li></ul>

Among.secs/3=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li><li>{P3.US.Contract.Among.Sec}</li></ul>

Among.secs/4=<ul type="none" style="padding-left: 0"><li>{P1.US.Contract.Among.Sec}</li><li>{P2.US.Contract.Among.Sec}</li><li>{P3.US.Contract.Among.Sec}</li><li>{P4.US.Contract.Among.Sec}</li></ul>

Among.Def.sec=Each a "{_party}" and collectively the "{_parties}."

Note=Friends.Div is for the relatively rare agreements that need to specifically list other persons, for instance affiliates of one of the parties.  Defaults to null.  To use it, define a paragraph with the desired number of referenced persons in the format "Friend.=[Z/ol/s*]" where * is the number of persons, e.g, "Friend.=[Z/ol/s3]".  This uses the common paragraph format widget.

Friend.Ti=Affiliated persons referenced in this {_Agreement}:

Friend.Def.sec=Each a "{_Named_Third_Party}" and collectively the "{_Named_Third_Parties}."

This.sec/2=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and between the {_parties}.

This.sec/3=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and among the {_parties}.

Why.Ti=Recitals

Note=That - is the part that transitions from the introduction into the sections of the agreement.  This is a heavy-duty version, intended to be good in most jurisdictions, at the (slight) cost of having a bit of surplusage for some jurisdictions. 

That.sec=In consideration of the mutual promises contained in {_this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {_parties} agree as follows:

By.Ti=Signature

Note=As with "Among," By assumes two parties but you can make more - By.secs={By.secs/3} or 4, etc.

By.0.sec=IN WITNESS WHEREOF, the {_parties} have executed {_this_Agreement} as of the {_Effective_Date}.

By.secs/2=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr></table>

By.secs/3=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr><tr><td valign=top>{P3.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top></td></tr></table>

By.secs/4=<table><tr><td valign=top>{P1.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.US.Contract.By.Sec}</td></tr><tr><td valign=top>{P3.US.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P4.US.Contract.By.Sec}</td></tr></table>

Annex.Ti=Annexes

Note=The Oxford comma is preferred by some and eschewed by others.  If you write your text like this:  one, two, three{q} and four, then the user can make the choice.  Here we default to no Oxford comma:

q=</i>

Note=The common frame:

=[GH/CommonAccord/Form-Agt/00-v0.md]