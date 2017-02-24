Note=I'm borrowing from the Polish work generously contributed.  I'm improvising.  Please help!  Can be viewed at <a href="http://source.commonaccord.org/index.php?action=doc&file=GH/CommonAccord/Form-Agt/PL-v0.md">http://source.commonaccord.org/index.php?action=doc&file=GH/CommonAccord/Form-Agt/PL-v0.md</a>

Head.EffectiveDate.sec={_Effective_Date}: {EffectiveDate.YMD}

Note=Parties.  Is there a distinction in the language for 2 parties, 3 parties, 4 parties?

Among.Ti/2=Umowa zawarta pomiędzy:

Among.Ti/3=Umowa zawarta pomiędzy:

Among.secs/2=<ul type="none" style="padding-left: 0"><li>{P1.PL.Contract.Among.Sec}</li><li>{P2.PL.Contract.Among.Sec}</li></ul>

Among.secs/3=<ul type="none" style="padding-left: 0"><li>{P1.PL.Contract.Among.Sec}</li><li>{P2.PL.Contract.Among.Sec}</li><li>{P3.PL.Contract.Among.Sec}</li></ul>

Among.secs/4=<ul type="none" style="padding-left: 0"><li>{P1.PL.Contract.Among.Sec}</li><li>{P2.PL.Contract.Among.Sec}</li><li>{P3.PL.Contract.Among.Sec}</li><li>{P4.PL.Contract.Among.Sec}</li></ul>

Among.Def.sec=Indywidualnie zwane «{_stroną}», a łącznie «{_stronami}».

Note=Friends.Div is for the relatively rare agreements that need to specifically list other persons, for instance affiliates of one of the parties.  Defaults to null.  To use it, define a paragraph with the desired number of referenced persons in the format "Friend.=[Z/ol/s*]" where * is the number of persons, e.g, "Friend.=[Z/ol/s3]".  This uses the common paragraph format widget.

Friend.Ti=Affiliated persons referenced in this {_Agreement}:

Friend.Def.sec=Each a "{_Named_Third_Party}" and collectively the "{_Named_Third_Parties}."

This.sec/2=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and between the {_parties}.

This.sec/3=This {Doc.Ti} (this "{_Agreement}") is made as of {EffectiveDate.YMD} ("{_Effective_Date}"), by and among the {_parties}.

Why.Ti=Recitals

Note=That - is the part that transitions from the introduction into the sections of the agreement.  This is a heavy-duty version, intended to be good in most jurisdictions, at the (slight) cost of having a bit of surplusage for some jurisdictions. 

That.sec=In consideration of the mutual promises contained in {_this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {_parties} agree as follows:

By.Ti=Signature

By.0.sec=Strony poświadczają zawarcie {_this_Agreement} od dnia {_Effective_Date}.

By.secs/2=<table><tr><td valign=top>{P1.PL.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.PL.Contract.By.Sec}</td></tr></table>

By.secs/3=<table><tr><td valign=top>{P1.PL.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.PL.Contract.By.Sec}</td></tr><tr><td valign=top>{P3.PL.Contract.By.Sec}</td><td valign=top>   </td><td valign=top></td></tr></table>

By.secs/4=<table><tr><td valign=top>{P1.PL.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P2.PL.Contract.By.Sec}</td></tr><tr><td valign=top>{P3.PL.Contract.By.Sec}</td><td valign=top>   </td><td valign=top>{P4.PL.Contract.By.Sec}</td></tr></table>

Annex.Ti=Annexes

Note=The Oxford comma is preferred by some and eschewed by others.  If you write your text like this:  one, two, three{q} and four, then the user can make the choice.  Here we default to no Oxford comma:

q=</i>

_stroną=<a href="" class="definedterm" >stroną</a>

_stronami=<a a href="" class="definedterm">stronami</a>

_party={_stroną}

_parties={_stronami}

Note=The common frame:

=[GH/CommonAccord/Form-Agt/00-v0.md]
