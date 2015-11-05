Note=Just playing around

Note=Form:
  
Model.Root=<center><b>Consent Form</b><br>{EffectiveDate.YMD}<br>{GUID}<br></center><br><ol>{Who.Sec}<li>{What.Sec}<li>{When.Sec}<li>{Where.Sec}<li>{Why.Sec}<li>{How.Sec}<li>{WhatIf.Sec}</ol>

Who.Sec=<b>Who is involved:</b><br>Parties and other persons who are involved.<ol><li>{Principal.Sec}<li>{DataController.Sec}<li>{DataAccessor.Sec}<li>{Arbitrator.Sec}</ol>

Principal.Sec=<b>Principal</b><br>{Principal.sec}

Principal.sec={Principal.N/A/T/E/F}

Principal.sec.2=<ol><li><b>Principal 1:</b><br>{Principal.1.N/A/T/E/F}<li><b>Principal 2:</b><br>{Principal.1.N/A/T/E/F}</ol>

DataController.Sec=<b>Data Controller</b><br>{DataController.sec}

DataController.sec={DataController.N/A/T/E/F}

DataAccessor.Sec=<b>Data Accessor</b><br>{DataAccessor.sec}

DataAccessor.sec={DataAccessor.N/A/T/E/F}

DataAccessor.sec.2=<ol><li><b>DataAccessor 1:</b><br>{DataAccessor.1.N/A/T/E/F}<li><b>DataAccessor 2:</b><br>{DataAccessor.2.N/A/T/E/F}</ol>

Arbitrator.Sec=<b>Arbitrator</b><br>{Arbitrator.N/A/T/E/F}

What.Sec=<b>What Information May Be Disclosed</b><br>Description of the scope of information that may be {csuf,_ed}.<ol><li>{Certain.Sec}<li>{AsNeeded.Sec}<li>{Prohibited.Sec}</ol>

When.Sec=<b>When Will Information Be Disclosed or Deleted</b><br>This section is for time-related terms. <ol><li>{WhenDisclosed.Sec}<li>{WhenDeleted.Sec}</ol>

Where.Sec=<b>Where information will be {csuf,_ed}</b><ol><li>{Where.DataController.Sec}<li>{Where.DataAccessor.Sec}<li>{Where.DataTransit.Sec}</ol>

Note=Why may be tied into Who, What, When, Where.
Why.Sec=<b>Why the information is being {csuf,_ed}</b><ol><li>{Why.1.Sec}<li>{Why.2.Sec}</ol>

How.Sec=<b>How will information be {csuf,_ed}</b><br>This section is for details and technical specifications. <ol><li>{WhenDisclosed.Sec}<li>{WhenDeleted.Sec}</ol>

WhatIf.Sec=<b>What-if provisions for events, foreseen or otherwise, that we hope don't happen</b><ol><li>{GovernmentDemands.Sec}<li>{Liability.Sec}<li>{Dispute.Sec}<li>{Misc.Sec}</ol>

=[Wx/org/consentreceipt/api/Form/Doc_v0.md]  

csuf,_ed=collected, stored, used, forwarded