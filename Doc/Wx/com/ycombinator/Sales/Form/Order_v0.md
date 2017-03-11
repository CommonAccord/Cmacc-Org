Note=https://www.ycombinator.com/documents/#sales

Note=Made this into a conventionally-formatted agreement - can be remixed to be put back into the Order, Signature, T&C format

Doc.Title=SAAS SERVICES AGREEMENT

P1.Handle={Company}

P2.Handle={Customer}

Intro.Agree.sec=This SaaS Services Agreement ("{Agreement}") is entered into on {EffectiveDate.YMD} (the "{Effective_Date}") between {P1.N,E,A} ("{Company}"), and {P2.N,E,A} ("{Customer}").  {This_Agreement} includes and incorporates the {Order Form}, as well as the attached Terms and Conditions and contains, among other things, warranty disclaimers, liability limitations and use limitations.  There shall be no force or effect to any different terms of any related purchase order or similar form even if signed by the parties after the date hereof.

Order Form=terms below

1.Ti=Customer

1.1.sec=Customer: {P2.Name.Full}

1.2.sec=Contact Person: {P2.Contact.Name.Full}, {P2.Contact.Adr.1,2}

1.3.sec=Phone: {P2.Contact.Phone}, Email:  {P2.Contact.Email}

1.=[Z/ol/s3]

2.Ti=Services

2.sec={Services.Describe} (the "Service(s)").

3.Ti=Fees

3.sec={Fee.Monthly.$} per month, payable in advance, subject to the terms of Section 4 of the Terms and Conditions.

4.Ti=Initial Service Term

4.sec={InitialServiceTerm}

5.Ti=Service Capacity

5.sec={ServiceCapacity}

Note=include any limits on usage.

Note=Also, if additional fees will be required for overages, include details here or in fees section above]

6.Ti=Implementation Services

6.1.sec={Company} will use commercially reasonable efforts to provide {Customer} the services described in the Statement of Work ("SOW") attached as Exhibit A hereto ("Implementation Services"), and {Customer} shall pay {Company} the Implementation Fee in accordance with the terms herein.

6.2.sec=Implementation Fee (one-time) {ImplementationFee.$}

6.=[Z/ol/s2]

Note=OPTIONAL: If you delete this section, remove any reference to "Implementation Services" in the Terms and Conditions

7.Ti=Pilot Use

7.1.sec=Check here {PilotUse.Check} if Services use during the Pilot Period will be restricted to non-productive evaluation use.  If so, then, notwithstanding anything else, in connection with such pilot/evaluation use (1) no fees will apply, except for any Pilot Use Fee specified below, (2) the Services are provided "AS IS" and no warranty obligations of {Company} will apply, and (3) {Customer} may terminate {this_Agreement} and all of its rights hereunder by providing {Company} written notice thereof no less than 10 days prior to the end of the Pilot Period; otherwise, this Agreement shall continue in effect for the Initial Service Term (subject to earlier termination as provided in {this_Agreement}).  

Note=OPTIONAL:  delete this section if you are not offering a pilot

7.2.sec=Pilot Period:  Sixty (60) days

7.3.sec=Pilot Use Fee: {PilotUse.Fee.$}

7.=[Z/ol/s3]

=[F/US/00/Agt/Base/Form/0.md]

=[Z/ol/7]

DocBody={Doc}

Attach.Block=<hr><hr>{TC.Doc}

TC.=[Wx/com/ycombinator/Sales/YC_Sales_TC.01.md]

MessageToUser=From {PageName}

PageName=Wx/com/ycombinator/Sales/YC_Sales_Form.01.md