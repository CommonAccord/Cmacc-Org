Note=Just playing around

Note=Form:
  
Model.Root=<center><b>Consent Form</b><br>{EffectiveDate.YMD}<br>{GUID}<br></center><br><ol>{Who.Sec}<li>{What.Sec}<li>{When.Sec}<li>{Where.Sec}<li>{Why.Sec}<li>{How.Sec}<li>{WhatIf.Sec}</ol>

Who.Sec=<b>Who is involved:</b><br>Parties and other persons who are involved.<ol><li>{Principal.Sec}<li>{DataController.Sec}<li>{DataAccessor.Sec}<li>{Arbitrator.Sec}</ol>

Principal.Sec=<b>Principal</b><br>{Principal.N/A/T/E/F}

DataController.Sec=<b>Data Controller</b><br>{DataController.N/A/T/E/F}

What.Sec=<b>What Information May Be Disclosed</b><br>Description of the scope of information that may be {csuf,_ed}.<ol><li>{Now.Sec}<li>{Future.Sec}<li>{Possible.Sec}<li>{Prohibited.Sec}</ol>

When.Sec=<b>When Will Information Be Disclosed or Deleted</b><br>This section is for time-related terms. <ol>{WhenDisclosed.Sec}<li>{WhenDeleted.Sec}</ol>

Where.Sec=<b>Where information will be {csuf,_ed}<ol><li>{Where.DataController.Sec}<li>{Where.DataAccessor.Sec}<li>{Where.DataTransit.Sec}</ol>

Note=Why may be tied into Who, What, When, Where.
Why.Sec=<b>Why the information is being {csuf,_ed}</b><ol><li>{Why.1.Sec}<li>{Why.2.Sec}</ol>

How.Sec=<b>How will information be {csuf,_ed}</b><br>This section is for details and technical specifications. <ol>{WhenDisclosed.Sec}<li>{WhenDeleted.Sec}</ol>

WhatIf.Sec=<b>What If provisions for events, foreseen or otherwise, that may happen.<ol><li>{GovernmentDemands.Sec}<li>{Liability.Sec}<li>{Dispute.Sec}<li>{Misc.Sec}</ol>

=[Wx/org/consentreceipt/api/Form/Doc_v0.md]  

csuf,_ed=collected, stored, used, forwarded