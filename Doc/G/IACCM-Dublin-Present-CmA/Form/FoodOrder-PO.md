Doc.Ti=Common Food Supply Purchase Order ("{_PO}")

0.sec=Order Date:  <span class="dealpoint">{Order Date}</span><br> {Parties.Sec}

Parties.Ti=Parties:

Parties.sec=<table><tr><td>"{_P1}":<br>{P1.US.Adr.N/1/2}<td/><td>          </td><td>"{_P2}":<br>{P2.US.Adr.N/1/2}</td></tr></table>

Parties.=[G/Z/ol/Base]

Order.Ti=Order

Order.0.sec={_P2} will supply the following list of items (the "{_Order}"):

Order.00.sec={Order.Total.sec}

Order.Total.sec=The total price for the {_Order} is {Order Total Price}.

Order.=[G/Z/ol/s2]

Order.secs={Ordered Items}

1 Item={Order Item 1}

2 Items={Order Item 1}<li>{Order Item 2}

3 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}

4 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}<li>{Order Item 4}

5 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}<li>{Order Item 4}<li>{Order Item 5}

6 Items={Order Item 1}<li>{Order Item 2}<li>{Order Item 3}<li>{Order Item 4}<li>{Order Item 5}<li>{Order Item 6}

Delivery.Ti=Delivery

Delivery.1.sec={_P2} will deliver the {_Order} to {_P1} at {P1.US.Adr.1,2}.

Delivery.2.sec=Delivery will be completed by {Delivery Due By}.  The hours during which {_P1} receives deliveries are {Client Reception Hours}.
 
Delivery.=[G/Z/ol/s2]

Comp.Ti=Compensation

Comp.sec={_P1} will pay {_P2} a total of {Order Total Price}.

Comp.=[G/Z/ol/Base]

Terms.Ti=Master Agreement Terms

Terms.1.sec=This {_PO} is subject to the terms of a master agreement titled "{MSA.Doc.Ti}," dated {MSA.EffectiveDate.YMD} identified as Document number {MSA.Doc.GUID}, and referenced below.

Terms.2.sec=<b>This {_PO} has no effect unless the parties have a master agreement.</b>

Terms.=[G/Z/ol/s2]

Sign.=[G/Z/ol/Base]

Model.Root={Doc}

Secs={Order.lI}{Delivery.LI}{Comp.LI}{Terms.Li}

Head.Message=<font color="grey">Order Number: <b>{Order Number}</b><br>(MSA Number: {MSA Document Number})</font>

=[G/Z/ol/Base]
