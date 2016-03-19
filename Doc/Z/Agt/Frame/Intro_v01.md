Sec={sec}

sec=<ul type="none" style="padding-left: 0"><li>{Persons.sec}</li><li>{EffectiveDate.sec}</li></ul>{This.Sec} {Recite.Sec} {That.Sec}

Note=Choices of persons in the intro block (copy one into your doc):

Persons.sec={Parties.Sec}

Persons.sec={Parties.Sec}<br>{Friends.Sec}

Parties.Sec=<b>{Parties.Ti}</b>{Parties.xlist}

Parties.Ti=By and Betweeen:

Parties.xlist=<ul type="none"><li>{Parties.List}</li><li>{Parties.Def.sec}</li></ul>

Parties.Def.sec=Each a "{party}" and collectively the "{parties}."

Parties.List={Parties.List.1-2}

Parties.List.1-2={P1.sec}</li><li>{P2.sec}

Parties.List.1-3={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}

Parties.List.1-4={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}</li><li>{P4.sec}

Parties.List.1-5={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}</li><li>{P4.sec}</li><li>{P5.sec}

Parties.List.1-6={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}</li><li>{P4.sec}</li><li>{P5.sec}</li><li>{P6.sec}

Parties.List.1,2={P1.sec}</li><li>{P2.sec}

Parties.List.1,3={P1.sec}</li><li>{P3.sec}

Parties.List.2,3={P2.sec}</li><li>{P3.sec}

P1.sec={P1.N,E,A} ("{P1.Handle}") 

P2.sec={P2.N,E,A} ("{P2.Handle}") 

P3.sec={P3.N,E,A} ("{P3.Handle}") 

P4.sec={P4.N,E,A} ("{P4.Handle}") 

P5.sec={P5.N,E,A} ("{P5.Handle}") 

P6.sec={P6.N,E,A} ("{P6.Handle}") 
 
Friends.Sec=<b>{Friends.Ti}</b>{Friends.xlist}

Friends.Ti=Third Parties referenced but not party to this {Agreement}:

Friends.xlist=<ul type="none"><li>{Friends.List}</li><li>{Friends.Define.sec}</li></ul>

Friends.Define.sec=Each a "{Named_Third_Party}" and collectively the "{Named_Third_Parties}."

Friends.List={Friends.List.1,2,3,4,5,6}

Friends.List.1,2={F1.sec}</li><li>{F2.sec}

Friends.List.1,2,3={F1.sec}</li><li>{F2.sec}</li><li>{F3.sec}

Friends.List.1,2,3,4={F1.sec}</li><li>{F2.sec}</li><li>{F3.sec}</li><li>{F4.sec}

Friends.List.1,2,3,4,5={F1.sec}</li><li>{F2.sec}</li><li>{F3.sec}</li><li>{F4.sec}</li><li>{F5.sec}

Friends.List.1,2,3,4,5,6={F1.sec}</li><li>{F2.sec}</li><li>{F3.sec}</li><li>{F4.sec}</li><li>{F5.sec}</li><li>{F6.sec}

F1.sec={F1.N,E,A} ("{F1.Handle}")

F2.sec={F2.N,E,A} ("{F2.Handle}")

F3.sec={F3.N,E,A} ("{F3.Handle}")

F4.sec={F4.N,E,A} ("{F4.Handle}")

F5.sec={F5.N,E,A} ("{F5.Handle}")

F6.sec={F6.N,E,A} ("{F6.Handle}") 
 
/Note=The conventional legal method of just giving a day will not be sufficient in many online systems.  So provide for date and time. 

EffectiveDate.sec=Effective Date: {Agt.Effective.YMDT} (the "{Effective_Date}")

/Note=Default to just the day - backward compatibility

Agt.Effective.YMDT={EffectiveDate.YMD}

This.Sec={This.sec}

This.sec=This {Doc.Title} (the "{Agreement}") is made as of the {Effective_Date} by and between the {parties}.

Recite.Sec=<br><br><b>{Recite.Ti}:</b><ul type="none">{Recite.secs}</li></ul>

Recite.Ti=Recitals

That.Sec={That.sec}

That.sec=In consideration of the mutual promises contained in {this_Agreement} and other good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the {parties} agree as follows:

Model.Root={Sec}
