Doc.Ti=Common Food Supply Purchase Order ("{_PO}")

0.sec=Order Date:  <span class="dealpoint">{Order_Date}</span><br> {Parties.Sec}

Parties.Ti=Parties:

Parties.sec=<table><tr><td>"{_P1}":<br>{P1.US.Adr.N/1/2}<td/><td>          </td><td>"{_P2}":<br>{P2.US.Adr.N/1/2}</td></tr></table>

Parties.=[OTF/Z/ol/Base]

Order.Ti=Order

Order.0.sec={_P2} will supply the following list of items (the "{_Order}"):

Order.00.sec={Order.Total.sec}

Order.Total.sec=The total price for the {_Order} is {Order_Total_Price}.

Order.=[OTF/Z/ol/s2]

Order.secs={Ordered_Items}

1 Item={Order_Item_1}

2 Items={Order_Item_1}<li>{Order_Item_2}

3 Items={Order_Item_1}<li>{Order_Item_2}<li>{Order_Item_3}

4 Items={Order_Item_1}<li>{Order_Item_2}<li>{Order_Item_3}<li>{Order_Item_4}

5 Items={Order_Item_1}<li>{Order_Item_2}<li>{Order_Item_3}<li>{Order_Item_4}<li>{Order_Item_5}

6 Items={Order_Item_1}<li>{Order_Item_2}<li>{Order_Item_3}<li>{Order_Item_4}<li>{Order_Item_5}<li>{Order_Item_6}

Delivery.Ti=Delivery

Delivery.1.sec={_P2} will deliver the {_Order} to {_P1} at {P1.US.Adr.1,2}.

Delivery.2.sec=Delivery will be completed by {Delivery_Due_By}.  The hours during which {_P1} receives deliveries are {Client Reception Hours}.
 
Delivery.=[OTF/Z/ol/s2]

Comp.Ti=Compensation

Comp.sec={_P1} will pay {_P2} a total of {Order_Total_Price}.

Comp.=[OTF/Z/ol/Base]

Terms.Ti=Master Agreement Terms

Terms.1.sec=This {_PO} is subject to the terms of a master agreement titled "{MSA.Doc.Ti}," dated {MSA.EffectiveDate.YMD} identified as Document number {MSA.Doc.GUID}, and referenced below.

Terms.2.sec=<b>This {_PO} has no effect unless the parties have a master agreement.</b>

Terms.=[OTF/Z/ol/s2]

Sign.=[OTF/Z/ol/Base]

Model.Root={Doc}

Secs={Order.lI}{Delivery.LI}{Comp.LI}{Terms.Li}

Head.Message=<font color="grey">Order Number: <b>{Order_Number}</b><br>(MSA Number: {MSA Document Number})</font>

=[OTF/Z/ol/Base]
