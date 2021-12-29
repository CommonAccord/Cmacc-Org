Doc.Ti=Food Supply Master Agreement

EffectiveDate.YMD={MSA Effective Date}

Doc.GUID={MSA Document Number}

Why.Secs=To formalise the terms of trading between {_P1} and {_P2}.

Point.sec=To be specified in {_POs}.

Deal.PO.Ti=Purchase Orders

Deal.PO.sec=All purchases will be documented by {_POs}.

Deal.PO.=[G/Z/ol/Base]

Deal.Pay.Ti=Payment

Deal.Pay.1.Ti=Due

Deal.Pay.1.sec={_P1} will pay {_P2} in full for all uncontested charges not later than <u>{Payment Due Within}</u> after delivery of the {_Products}.

Deal.Pay.2.Ti=Method

Deal.Pay.2.sec={_P1} will pay {_P2} by bank transfer to {_P2}'s account at: <u>{Supplier Bank Information}</u>. 

Deal.Pay.3.Ti=Late Charge

Deal.Pay.3.sec=Any charge that is unpaid within that time will bear interest at the rate of <u>{Interest on Late Payments}</u> per annum from the time of delivery of the related {_Products} until paid in full. 

Deal.Pay.=[G/Z/ol/3]

Deal.Delivery.Ti=Delivery

Deal.Delivery.Shipping.Ti=Packing and Delivery

Deal.Delivery.Shipping.sec={_P2} takes full responsibility for properly packing, labeling and delivering {_Products} to {_P2}'s receiving area.

Deal.Delivery.Shipping.=[G/Z/ol/Base]

Deal.Delivery.Receiving.Ti=Receiving

Deal.Delivery.Receiving.sec={_P1} is responsible for keeping its receiving area available during scheduled delivery periods and having personnel available to receive the {_Products}.

Deal.Delivery.Receiving.=[G/Z/ol/Base]

Deal.Delivery.Confirming.Ti=Confirmation

Deal.Delivery.Confirming.sec={_P2} will confirm receipt of {_Products} at the moment of delivery.

Deal.Delivery.Confirming.=[G/Z/ol/Base]

Deal.Delivery.sec=<ol class="secs-and">{Deal.Delivery.Shipping.LI}{Deal.Delivery.Receiving.LI}{Deal.Delivery.Confirming.LI}</ol>

Deal.Delivery.=[G/Z/ol/Base]

Deal.sec=<ol class="secs-and">{Deal.PO.LI}{Deal.Pay.LI}{Deal.Delivery.LI}</ol>

Def.sec=Terms parameterised in {_this_Agreement} are to be defined in the terms annexed to {_this_Agreement} (the "{_Annex}").

Relate.sec=To be specified in the {_Annex}.

Misc.sec=To be specified in the {_Annex}.

=[G/Agt-Outline-Universal-CmA/Outline/Base/0.md]

Annex.Div=<hr><hr><h3>Annex - {Annex.Doc.Ti}</h3><br>{Annex.Comment.sec}<br>{Annex.Sec}