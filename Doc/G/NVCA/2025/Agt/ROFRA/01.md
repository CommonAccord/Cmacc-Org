ProofersNote=Free-standing ProseObject conversion of NVCA Model Right of First Refusal and Co-Sale Agreement (2025). Section/paragraph formatting widgets are pulled from /Doc/G/Z/. Cross-references use the {*.Xnum} pattern. Defined terms use {DefT.Term} at the place of definition and {_Term} elsewhere. NVCA bracketed variables are replaced with named parameters intentionally left empty (no default value) so that a demo deal file supplies the value. Bracketed alternatives are exposed via the Prefix.=[G/Z/Alt/*] mechanism.

Doc.Ti=<span style='text-transform:uppercase'>{Amend.sec}Right of First Refusal and Co-Sale Agreement</span>

Ti={Amend.sec}Right of First Refusal and Co-Sale Agreement

r00t={Doc}

Doc.GUID=NVCA-Model-ROFRA-2025

MessageToUser=National Venture Capital Association Model Right of First Refusal and Co-Sale {_Agreement} (free-standing ProseObject edition).

Note=Bracketed alternative: [AMENDED AND RESTATED] prefix. Alt1 = new agreement (no prefix), Alt2 = amended and restated.

Amend.Alt1.sec=
Amend.Alt2.sec=AMENDED AND RESTATED 

Doc=<center><h4>{Doc.Ti}</h4></center>{This.sec}<br><br>{Recitals.sec}<br><br>{That.sec}<br>{Body.sec}<br><br>{00.sec}

Body.xlist=<ol><li>{Def.Sec}</li><li>{Core.Sec}</li><li>{Exempt.Sec}</li><li>{Legend.Sec}</li><li>{LockUp.Sec}</li><li>{Misc.Sec}</li></ol>

Body.=[G/Z/Base]

Note=*** PREAMBLE ***

This.sec=THIS {Doc.Ti} (this "{DefT.Agreement}"), is made as of {EffectiveDate.YMD}, by and among {Company.Name.Full}, a Delaware corporation (the "{DefT.Company}"), the Investors (as defined below) listed on Schedule {Schedule.A.Xnum} attached hereto and the Key Holders (as defined below) listed on Schedule {Schedule.B.Xnum} attached hereto.

Note=Deal points: EffectiveDate.YMD, Company.Name.Full, Cap.Series.Name.Full, Cap.Series.ParValue.$, Cap.Series.Prior.Name.Full, Cap.Series.Prior.ParValue.$, PriorROFR.EffectiveDate.YMD, SPA.Ti — all set in the demo file; all parameters left empty here.


Note=*** RECITALS — two alternatives: Alt1 = new agreement (no Prior Agreement); Alt2 = amended and restated (Prior Agreement exists) ***

Recitals.sec=RECITALS<br><br>{Why.sec}

Why.Alt1.sec={Why.Alt1.1.sec}<br><br>{Why.Alt1.2.sec}

Why.Alt1.1.sec=WHEREAS, each {_Key_Holder} is the beneficial owner of shares of {_Capital_Stock}, or of options to purchase {_Capital_Stock}; and

Why.Alt1.2.sec=WHEREAS, the {_Key_Holders} and the {_Company} desire to induce the {_Investors} to purchase shares of {Cap.Series.Name.Full} of the {_Company}, par value {Cap.Series.ParValue.$} per share (the "{DefT.Series_Preferred_Stock}"), pursuant to that certain {SPA.Ti} dated as of the date hereof by and among the {_Company} and such {_Investors} (the "{DefT.Purchase_Agreement}") by entering into this {_Agreement} to provide the {_Investors} with the rights and privileges as set forth herein.

Why.Alt2.sec={Why.Alt2.1.sec}<br><br>{Why.Alt2.2.sec}<br><br>{Why.Alt2.3.sec}

Why.Alt2.1.sec=WHEREAS, each {_Key_Holder} is the beneficial owner of shares of {_Capital_Stock}, or of options to purchase {_Capital_Stock}; and

Why.Alt2.2.sec=WHEREAS, the {_Company}, certain of the {_Key_Holders} and certain of the {_Investors} (the "{DefT.Existing_Investors}") previously entered into a {_Prior_Agreement} Right of First Refusal and Co-Sale Agreement, dated {PriorROFR.EffectiveDate.YMD} (the "{DefT.Prior_Agreement}"), in connection with the purchase of shares of {Cap.Series.Prior.Name.Full} of the {_Company}, par value {Cap.Series.Prior.ParValue.$} per share ("{DefT.Series_Prior_Preferred_Stock}"); and

Why.Alt2.3.sec=WHEREAS, the {_Key_Holders}, the {_Existing_Investors} and the {_Company} desire to induce certain of the {_Investors} to purchase shares of {Cap.Series.Name.Full} of the {_Company}, par value {Cap.Series.ParValue.$} per share ("{_Series_Preferred_Stock}"), pursuant to that certain {SPA.Ti} dated as of the date hereof by and among the {_Company} and such {_Investors} (the "{_Purchase_Agreement}") by amending and restating the {_Prior_Agreement} in its entirety to provide the {_Investors} with the rights and privileges as set forth herein.

Why.=[G/Z/Alt/2]

That.Alt1.sec=NOW, THEREFORE, the {_Company}, the {_Key_Holders} and the {_Investors} agree as follows:

That.Alt2.sec=NOW, THEREFORE, the {_Company}, the {_Key_Holders}, the {_Investors} including the {_Existing_Investors} each hereby agree that the {_Prior_Agreement} is hereby amended and restated in its entirety by this {_Agreement}, and the parties hereto further agree as follows:

That.=[G/Z/Alt/2]

Note=*** SECTION 1 — DEFINITIONS ***

Def.Ti=Definitions

Def.sec={Def.Affiliate.sec}<br>{Def.Board_of_Directors.sec}<br>{Def.Capital_Stock.sec}<br>{Def.Change_of_Control.sec}<br>{Def.Common_Stock.sec}<br>{Def.Company_Notice.sec}<br>{Def.Competitor.sec}<br>{Def.Deemed_Liquidation_Event.sec}<br>{Def.DPA.sec}<br>{Def.DPA_Triggering_Rights.sec}<br>{Def.Entity_Transfer.sec}<br>{Def.Foreign_Person.sec}<br>{Def.Investor_Notice.sec}<br>{Def.Investors.sec}<br>{Def.Key_Holders.sec}<br>{Def.Person.sec}<br>{Def.Preferred_Stock.sec}<br>{Def.Proposed_Key_Holder_Transfer.sec}<br>{Def.Proposed_Transfer_Notice.sec}<br>{Def.Prospective_Transferee.sec}<br>{Def.Qualified_Direct_Listing.sec}<br>{Def.Qualified_Key_Holder.sec}<br>{Def.Restated_Certificate.sec}<br>{Def.Right_of_Co-Sale.sec}<br>{Def.Right_of_First_Refusal.sec}<br>{Def.Sanctioned_Party.sec}<br>{Def.Sanctions.sec}<br>{Def.Secondary_Notice.sec}<br>{Def.Secondary_Refusal_Right.sec}<br>{Def.Side_Letters.sec}<br>{Def.Transfer_Stock.sec}<br>{Def.Undersubscription_Notice.sec}


Def.Affiliate.sec="{DefT.Affiliate}" means, with respect to any specified {_Person}, any other {_Person} who, directly or indirectly, controls, is controlled by, or is under common control with such {_Person}, including, without limitation, any general partner, managing member, officer, director or trustee of such {_Person}, or any venture capital fund or other investment fund now or hereafter existing that is controlled by one or more general partners, managing members or investment advisers of, or shares the same management company or investment adviser with, such {_Person}.

Def.Board_of_Directors.sec="{DefT.Board_of_Directors}" means the board of directors of the {_Company}.

Def.Capital_Stock.sec="{DefT.Capital_Stock}" means (a) shares of {_Common_Stock} and {_Preferred_Stock} (whether now outstanding or hereafter issued in any context including shares of {_Common_Stock} issued or issuable upon conversion of {_Preferred_Stock} [but excluding any shares of {_Common_Stock} issued upon conversion of {_Preferred_Stock} pursuant to a Special Mandatory Conversion (as defined in the {_Restated_Certificate})]), and (b) shares of {_Common_Stock} issued or issuable upon exercise or conversion, as applicable, of stock options, warrants or other convertible securities of the {_Company}, in each case now owned or subsequently acquired by any {_Key_Holder}, any {_Investor}, or their respective successors or permitted transferees or assigns. For purposes of the number of shares of {_Capital_Stock} held by an {_Investor} or {_Key_Holder} (or any other calculation based thereon), all shares of {_Preferred_Stock} shall be deemed to have been converted into {_Common_Stock} at the then-applicable conversion ratio.

Def.Change_of_Control.sec="{DefT.Change_of_Control}" means a transaction or series of related transactions in which a person, or a group of related persons, acquires from stockholders of the {_Company} shares representing more than 50% of the outstanding voting power of the {_Company}.

Def.Common_Stock.sec="{DefT.Common_Stock}" means shares of Common Stock of the {_Company}, {Cap.Common.ParValue.$} par value per share.

Def.Company_Notice.sec="{DefT.Company_Notice}" means written notice from the {_Company} notifying the selling {_Key_Holders} and each {_Investor} that the {_Company} intends to exercise its {_Right_of_First_Refusal} as to some or all of the {_Transfer_Stock} with respect to any {_Proposed_Key_Holder_Transfer}.

Def.Competitor.sec="{DefT.Competitor}" means a {_Person} engaged, directly or indirectly (including through any partnership, limited liability company, corporation, joint venture or similar arrangement (whether now existing or formed hereafter)), in {Competitor.Description}, but shall not include any financial investment firm or collective investment vehicle that, together with its {_Affiliates}, holds less than 20% of the outstanding equity of any {_Competitor} and does not, nor do any of its {_Affiliates}, have a right to designate any members of the board of directors of any {_Competitor}.{Competitor.Carveout.cl}

Note=Competitor.Description = deal-point: description of business. Competitor.Carveout.cl = optional named-entity carve-out (leave empty if unused).

Def.Deemed_Liquidation_Event.sec="{DefT.Deemed_Liquidation_Event}" has the meaning ascribed to it in the {_Restated_Certificate}.

Def.DPA.sec="{DefT.DPA}" means Section 721 of the Defense Production Act, as amended, including all implementing regulations thereof.

Def.DPA_Triggering_Rights.sec="{DefT.DPA_Triggering_Rights}" means (i) "control" (as defined in the {_DPA}); (ii) access to any "material non-public technical information" (as defined in the {_DPA}) in the possession of the {_Company}; (iii) membership or observer rights on the {_Board_of_Directors} or equivalent governing body of the {_Company} or the right to nominate an individual to a position on the {_Board_of_Directors} or equivalent governing body of the {_Company}; (iv) any involvement, other than through the voting of shares, in substantive decision-making of the {_Company} regarding (x) the use, development, acquisition or release of any {_Company} "critical technology" (as defined in the {_DPA}); (y) the use, development, acquisition, safekeeping, or release of "sensitive personal data" (as defined in the {_DPA}) of U.S. citizens maintained or collected by the {_Company}; or (z) the management, operation, manufacture, or supply of "covered investment critical infrastructure" (as defined in the {_DPA}).

Def.Entity_Transfer.sec="{DefT.Entity_Transfer}" means any sale, assignment, derivative transaction, issuance, encumbrance, hypothecation, pledge, conveyance in trust, gift, transfer by request, devise or descent, or other transfer or disposition of any kind, including, but not limited to, transfers to receivers, levying creditors, trustees or receivers in bankruptcy proceedings or general assignees for the benefit of creditors, whether voluntary or by operation of law, directly or indirectly of any ownership or economic interest in such entity.

Def.Foreign_Person.sec="{DefT.Foreign_Person}" means either (i) a {_Person} or government that is a "foreign person" within the meaning of the {_DPA} or (ii) a {_Person} through whose investment a "foreign person" within the meaning of the {_DPA} would obtain any {_DPA_Triggering_Rights}.

Def.Investor_Notice.sec="{DefT.Investor_Notice}" means written notice from any {_Investor} notifying the {_Company} and the selling {_Key_Holder}(s) that such {_Investor} intends to exercise its {_Secondary_Refusal_Right} as to a portion of the {_Transfer_Stock} with respect to any {_Proposed_Key_Holder_Transfer}.

Def.Investors.sec="{DefT.Investors}" means the persons named on Schedule {Schedule.A.Xnum} hereto, each person to whom the rights of an {_Investor} are assigned pursuant to Section {Misc.Assign.Xnum}, and each person who hereafter becomes a party to this {_Agreement} pursuant to Section {Misc.AdditionalInvestors.Xnum}{Investors.MinHolding.cl}.

Note=Investors.MinHolding.cl = optional minimum-holding threshold (leave empty if unused). E.g.: "; provided, however, that any such person shall cease to be considered an Investor for purposes of this Agreement at any time such person and his, her or its Affiliates collectively hold fewer than [____________] shares of Capital Stock (as adjusted for any stock combination, stock split, stock dividend, recapitalization or other similar transaction)"
Investors.MinHolding.cl=

Def.Key_Holders.sec="{DefT.Key_Holders}" means the persons named on Schedule {Schedule.B.Xnum} hereto, each person to whom the rights of a {_Key_Holder} are assigned pursuant to Section {Misc.Assign.1.Xnum}, each person who hereafter becomes a party to this {_Agreement} pursuant to Section {Misc.Assign.Xnum} or {Misc.AdditionalKeyHolders.Xnum} and any one of them, as the context may require.

Def.Person.sec="{DefT.Person}" means any individual, corporation, partnership, trust, limited liability company, association, or other entity.

Def.Preferred_Stock.sec="{DefT.Preferred_Stock}" means, collectively, all shares of {_Series_Preferred_Stock}{Def.Preferred_Stock.AdditionalSeries.cl}.

Note=Def.Preferred_Stock.AdditionalSeries.cl = optional additional series, e.g. " and Series [_] Preferred Stock". Leave empty if only one series.
Def.Preferred_Stock.AdditionalSeries.cl=

Def.Proposed_Key_Holder_Transfer.sec="{DefT.Proposed_Key_Holder_Transfer}" means any assignment, sale, offer to sell, pledge, mortgage, hypothecation, encumbrance, disposition of or any other like transfer or encumbering of any {_Transfer_Stock} (or any interest therein) proposed by any of the {_Key_Holders}.

Def.Proposed_Transfer_Notice.sec="{DefT.Proposed_Transfer_Notice}" means written notice from a {_Key_Holder} setting forth the terms and conditions of a {_Proposed_Key_Holder_Transfer}.

Def.Prospective_Transferee.sec="{DefT.Prospective_Transferee}" means any {_Person} to whom a {_Key_Holder} proposes to make a {_Proposed_Key_Holder_Transfer}.

Def.Qualified_Direct_Listing.sec="{DefT.Qualified_Direct_Listing}" has the meaning ascribed to it in the {_Restated_Certificate}.

Def.Qualified_Key_Holder.sec="{DefT.Qualified_Key_Holder}" means a {_Key_Holder} and (i) if an individual, is providing services to the {_Company} or its subsidiaries as a {QualifiedKeyHolder.Service.cl} and (ii) if an entity, is owned or controlled by an individual providing services to the {_Company} or its subsidiaries as a {QualifiedKeyHolder.Service.cl}.

Note=QualifiedKeyHolder.Service.cl = deal-point describing qualifying service relationship, e.g. "full-time employee [or consultant (excluding service solely as member of the Board)]"
QualifiedKeyHolder.Service.cl=

Def.Restated_Certificate.sec="{DefT.Restated_Certificate}" means the {_Company}'s Amended and Restated Certificate of Incorporation, as amended and/or restated from time to time.

Def.Right_of_Co-Sale.sec="{DefT.Right_of_Co-Sale}" means the right, but not an obligation, of an {_Investor} to participate in a {_Proposed_Key_Holder_Transfer} on the terms and conditions specified in the {_Proposed_Transfer_Notice}.

Def.Right_of_First_Refusal.sec="{DefT.Right_of_First_Refusal}" means the right, but not an obligation, of the {_Company}, or its permitted transferees or assigns, to purchase some or all of the {_Transfer_Stock} with respect to a {_Proposed_Key_Holder_Transfer}, on the terms and conditions specified in the {_Proposed_Transfer_Notice}.

Def.Sanctioned_Party.sec="{DefT.Sanctioned_Party}" means any {_Person}: (i) organized under the laws of, ordinarily resident in, or located in a country or territory that is the subject of comprehensive {_Sanctions} ("Restricted Countries"); (ii) 50% or more owned or controlled by the government of a Restricted Country; or (iii) (A) designated on a sanctioned parties list administered by the United States, European Union, or United Kingdom, including, without limitation, the U.S. Department of the Treasury's Office of Foreign Assets Control's Specially Designated Nationals and Blocked Persons List, Foreign Sanctions Evaders List, and Sectoral Sanctions Identification List, the Consolidated List of Persons, Groups, and Entities Subject to EU Financial Sanctions, and the UK's Consolidated Sanctions List (collectively, "{DefT.Designated_Parties}"); or (B) 50% or more owned or, where relevant under applicable {_Sanctions}, controlled, individually or in the aggregate, by one or more {_Designated_Party}, in each case only to the extent that dealings with such {_Person} are prohibited pursuant to applicable {_Sanctions}.

Def.Sanctions.sec="{DefT.Sanctions}" means applicable laws and regulations pertaining to trade and economic sanctions administered by the United States, European Union, or United Kingdom.

Def.Secondary_Notice.sec="{DefT.Secondary_Notice}" means written notice from the {_Company} notifying the {_Investors} and the selling {_Key_Holder} that the {_Company} does not intend to exercise its {_Right_of_First_Refusal} as to all shares of any {_Transfer_Stock} with respect to a {_Proposed_Key_Holder_Transfer}, on the terms and conditions specified in the {_Proposed_Transfer_Notice}.

Def.Secondary_Refusal_Right.sec="{DefT.Secondary_Refusal_Right}" means the right, but not an obligation, of each {_Investor} to purchase up to its pro rata portion (based upon the total number of shares of {_Capital_Stock} then held by all {_Investors}) of any {_Transfer_Stock} not purchased pursuant to the {_Right_of_First_Refusal}, on the terms and conditions specified in the {_Proposed_Transfer_Notice}.

Def.Side_Letters.sec="{DefT.Side_Letters}" has the meaning ascribed to it in the {_Purchase_Agreement}.

Def.Transfer_Stock.sec="{DefT.Transfer_Stock}" means shares of {_Capital_Stock} owned by a {_Key_Holder}, or issued to a {_Key_Holder} after the date hereof (including, without limitation, in connection with any stock split, stock dividend, recapitalization, reorganization, or the like), but does not include any shares of {_Preferred_Stock} or of {_Common_Stock} that are issued or issuable upon conversion of {_Preferred_Stock}.

Def.Undersubscription_Notice.sec="{DefT.Undersubscription_Notice}" means written notice from an {_Investor} notifying the {_Company} and the selling {_Key_Holder} that such {_Investor} intends to exercise its option to purchase all or any portion of the {_Transfer_Stock} not purchased pursuant to the {_Right_of_First_Refusal} or the {_Secondary_Refusal_Right}.

Note=*** SECTION 2 — AGREEMENT AMONG COMPANY, INVESTORS AND KEY HOLDERS ***

Core.Ti=Agreement Among the Company, the Investors and the Key Holders

Core.xlist=<ol><li>{Core.FirstRefusal.Sec}</li><li>{Core.CoSale.Sec}</li><li>{Core.FailureToComply.Sec}</li><li>{Core.ForeignPerson.Sec}</li><li>{Core.EntityTransfer.Sec}</li></ol>


Note=*** 2.1 Right of First Refusal ***

Core.FirstRefusal.Ti=Right of First Refusal

Core.FirstRefusal.xlist=<ol type='a'><li>{Core.FirstRefusal.1.Sec}</li><li>{Core.FirstRefusal.2.Sec}</li><li>{Core.FirstRefusal.3.Sec}</li><li>{Core.FirstRefusal.4.Sec}</li><li>{Core.FirstRefusal.5.Sec}</li><li>{Core.FirstRefusal.6.Sec}</li></ol>


Core.FirstRefusal.1.Ti=Grant

Core.FirstRefusal.1.sec=Subject to the terms of Section {Exempt.Xnum} below, each {_Key_Holder} hereby unconditionally and irrevocably grants to the {_Company} a {_Right_of_First_Refusal} to purchase all or any portion of {_Transfer_Stock} that such {_Key_Holder} may propose to include in a {_Proposed_Key_Holder_Transfer}, at the same price and on the same terms and conditions as those offered to the {_Prospective_Transferee}.


Core.FirstRefusal.2.Ti=Notice

Core.FirstRefusal.2.sec=Each {_Key_Holder} proposing to make a {_Proposed_Key_Holder_Transfer} must deliver a {_Proposed_Transfer_Notice} to the {_Company} and each {_Investor} not later than {ROFR.Notice.Days} days prior to the consummation of such {_Proposed_Key_Holder_Transfer}. Such {_Proposed_Transfer_Notice} shall contain the material terms and conditions (including price and form of consideration) of the {_Proposed_Key_Holder_Transfer}, the identity of the {_Prospective_Transferee} and the intended date of the {_Proposed_Key_Holder_Transfer}. To exercise its {_Right_of_First_Refusal} under this Section {Core.Xnum}, the {_Company} must deliver a {_Company_Notice} to the selling {_Key_Holder} and the {_Investors} within 15 days after delivery of the {_Proposed_Transfer_Notice} specifying the number of shares of {_Transfer_Stock} to be purchased by the {_Company}. {Core.FirstRefusal.2.ConflictResolution.cl}

Note=ROFR.Notice.Days = deal-point: advance notice period (e.g. 45). Core.FirstRefusal.2.ConflictResolution.cl = optional clause addressing conflicts with other ROFR agreements or Bylaws. Leave empty or set to one of the bracketed alternatives from the source.


Core.FirstRefusal.3.Ti=Grant of Secondary Refusal Right to the Investors

Core.FirstRefusal.3.sec=Subject to the terms of Section {Exempt.Xnum} below, each {_Key_Holder} hereby unconditionally and irrevocably grants to the {_Investors} a {_Secondary_Refusal_Right} to purchase all or any portion of the {_Transfer_Stock} not purchased by the {_Company} pursuant to the {_Right_of_First_Refusal}, as provided in this Section {Core.FirstRefusal.3.Xnum}. If the {_Company} does not provide the {_Company_Notice} exercising its {_Right_of_First_Refusal} with respect to all {_Transfer_Stock} subject to a {_Proposed_Key_Holder_Transfer}, the {_Company} must deliver a {_Secondary_Notice} to the selling {_Key_Holder} and to each {_Investor} to that effect no later than 15 days after the selling {_Key_Holder} delivers the {_Proposed_Transfer_Notice} to the {_Company}. To exercise its {_Secondary_Refusal_Right}, an {_Investor} must deliver an {_Investor_Notice} to the selling {_Key_Holder} and the {_Company} within ten days after the {_Company}'s deadline for its delivery of the {_Secondary_Notice} as provided in the preceding sentence.


Core.FirstRefusal.4.Ti=Undersubscription of Transfer Stock

Core.FirstRefusal.4.sec=If options to purchase have been exercised by the {_Company} and the {_Investors} pursuant to Sections {Core.FirstRefusal.2.Xnum} and {Core.FirstRefusal.3.Xnum} with respect to some but not all of the {_Transfer_Stock} by the end of the ten day period specified in the last sentence of Section {Core.FirstRefusal.3.Xnum} (the "{DefT.Investor_Notice_Period}"), then the {_Company} shall, within five days after the expiration of the {_Investor_Notice_Period}, send written notice (the "{DefT.Company_Undersubscription_Notice}") to those {_Investors} who fully exercised their {_Secondary_Refusal_Right} within the {_Investor_Notice_Period} (the "{DefT.Exercising_Investors}"). Each {_Exercising_Investor} shall, subject to the provisions of this Section {Core.FirstRefusal.4.Xnum}, have an additional option to purchase all or any part of the balance of any such remaining unsubscribed shares of {_Transfer_Stock} on the terms and conditions set forth in the {_Proposed_Transfer_Notice}. To exercise such option, an {_Exercising_Investor} must deliver an {_Undersubscription_Notice} to the selling {_Key_Holder} and the {_Company} within ten days after the expiration of the {_Investor_Notice_Period}. In the event there are two or more such {_Exercising_Investors} that choose to exercise the last-mentioned option for a total number of remaining shares in excess of the number available, the remaining shares available for purchase under this Section {Core.FirstRefusal.4.Xnum} shall be allocated to such {_Exercising_Investors} pro rata based on the number of shares of {_Transfer_Stock} such {_Exercising_Investors} have elected to purchase pursuant to the {_Secondary_Refusal_Right} (without giving effect to any shares of {_Transfer_Stock} that any such {_Exercising_Investor} has elected to purchase pursuant to the {_Company_Undersubscription_Notice}). If the options to purchase the remaining shares are exercised in full by the {_Exercising_Investors}, the {_Company} shall immediately notify all of the {_Exercising_Investors} and the selling {_Key_Holder} of that fact.


Core.FirstRefusal.5.Ti=Forfeiture of Rights

Core.FirstRefusal.5.sec=Notwithstanding the foregoing, if the total number of shares of {_Transfer_Stock} that the {_Company} and the {_Investors} have agreed to purchase in the {_Company_Notice}, {_Investor_Notices} and {_Undersubscription_Notices} is less than the total number of shares of {_Transfer_Stock}, then the {_Company} and the {_Investors} shall be deemed to have forfeited any right to purchase such {_Transfer_Stock}, and the selling {_Key_Holder} shall be free to sell all, but not less than all, of the {_Transfer_Stock} to the {_Prospective_Transferee} on terms and conditions substantially similar to (and in no event more favorable than) the terms and conditions set forth in the {_Proposed_Transfer_Notice}, it being understood and agreed that (i) any such sale or transfer shall be subject to the other terms and restrictions of this {_Agreement}, including, without limitation, the terms and restrictions set forth in Sections {Core.CoSale.Xnum} and {Misc.Assign.2.Xnum}; (ii) any future {_Proposed_Key_Holder_Transfer} shall remain subject to the terms and conditions of this {_Agreement}, including this Section {Core.Xnum}; and (iii) such sale shall be consummated within 45 days after receipt of the {_Proposed_Transfer_Notice} by the {_Company} and, if such sale is not consummated within such 45 day period, such sale shall again become subject to the {_Right_of_First_Refusal} and {_Secondary_Refusal_Right} on the terms set forth herein.


Core.FirstRefusal.6.Ti=Consideration; Closing

Core.FirstRefusal.6.sec=If the consideration proposed to be paid for the {_Transfer_Stock} is in property, services or other non-cash consideration, the fair market value of the consideration shall be as determined in good faith by the {_Board_of_Directors} and as set forth in the {_Company_Notice}. If the {_Company} or any {_Investor} for any reason cannot or does not wish to pay for the {_Transfer_Stock} in the same form of non-cash consideration, the {_Company} or such {_Investor} may pay the cash value equivalent thereof, as determined in good faith by the {_Board_of_Directors} and as set forth in the {_Company_Notice}. The closing of the purchase of {_Transfer_Stock} by the {_Company} and the {_Investors} shall take place, and all payments from the {_Company} and the {_Investors} shall have been delivered to the selling {_Key_Holder}, by the later of (i) the date specified in the {_Proposed_Transfer_Notice} as the intended date of the {_Proposed_Key_Holder_Transfer}; and (ii) {ROFR.Closing.Days} days after delivery of the {_Proposed_Transfer_Notice}.

Note=ROFR.Closing.Days = deal-point: closing period after Proposed Transfer Notice (e.g. 45).


Note=*** 2.2 Right of Co-Sale ***

Core.CoSale.Ti=Right of Co-Sale

Core.CoSale.xlist=<ol type='a'><li>{Core.CoSale.1.Sec}</li><li>{Core.CoSale.2.Sec}</li><li>{Core.CoSale.3.Sec}</li><li>{Core.CoSale.4.Sec}</li><li>{Core.CoSale.5.Sec}</li><li>{Core.CoSale.6.Sec}</li></ol>


Core.CoSale.1.Ti=Exercise of Right

Core.CoSale.1.sec=If any {_Transfer_Stock} subject to a {_Proposed_Key_Holder_Transfer} is not purchased pursuant to Section {Core.FirstRefusal.Xnum} above and thereafter is to be sold to a {_Prospective_Transferee}, each respective {_Investor} may elect to exercise its {_Right_of_Co-Sale} and participate on a pro rata basis in the {_Proposed_Key_Holder_Transfer} as set forth in Section {Core.CoSale.2.Xnum} below and, subject to Section {Core.CoSale.4.Xnum}, otherwise on the same terms and conditions specified in the {_Proposed_Transfer_Notice}. Each {_Investor} who desires to exercise its {_Right_of_Co-Sale} (each, a "{DefT.Participating_Investor}") must give the selling {_Key_Holder} written notice to that effect within 15 days after the deadline for delivery of the {_Secondary_Notice} described above, and upon giving such notice such {_Participating_Investor} shall be deemed to have effectively exercised the {_Right_of_Co-Sale}.


Core.CoSale.2.Ti=Shares Includable

Core.CoSale.2.sec=Each {_Participating_Investor} may include in the {_Proposed_Key_Holder_Transfer} all or any part of such {_Participating_Investor}'s {_Capital_Stock} equal to the product obtained by multiplying (i) the aggregate number of shares of {_Transfer_Stock} subject to the {_Proposed_Key_Holder_Transfer} (excluding shares purchased by the {_Company} or the {_Participating_Investors} pursuant to the {_Right_of_First_Refusal} or the {_Secondary_Refusal_Right}) by (ii) a fraction, the numerator of which is the number of shares of {_Capital_Stock} owned by such {_Participating_Investor} immediately before consummation of the {_Proposed_Key_Holder_Transfer} (including any shares that such {_Participating_Investor} has agreed to purchase pursuant to the {_Secondary_Refusal_Right}) and the denominator of which is the total number of shares of {_Capital_Stock} owned, in the aggregate, by all {_Participating_Investors} immediately prior to the consummation of the {_Proposed_Key_Holder_Transfer} (including any shares that all {_Participating_Investors} have collectively agreed to purchase pursuant to the {_Secondary_Refusal_Right}), plus the number of shares of {_Transfer_Stock} held by the selling {_Key_Holder}. To the extent one or more of the {_Participating_Investors} exercise such right of participation in accordance with the terms and conditions set forth herein, the number of shares of {_Transfer_Stock} that the selling {_Key_Holder} may sell in the {_Proposed_Key_Holder_Transfer} shall be correspondingly reduced.


Core.CoSale.3.Ti=Purchase and Sale Agreement

Core.CoSale.3.sec=The {_Participating_Investors} and the selling {_Key_Holder} agree that the terms and conditions of any {_Proposed_Key_Holder_Transfer} in accordance with this Section {Core.CoSale.Xnum} will be memorialized in, and governed by, a written purchase and sale agreement with the {_Prospective_Transferee} (the "{DefT.Purchase_and_Sale_Agreement}") with customary terms and provisions for such a transaction, and the {_Participating_Investors} and the selling {_Key_Holder} further covenant and agree to enter into such {_Purchase_and_Sale_Agreement} as a condition precedent to any sale or other transfer in accordance with this Section {Core.CoSale.Xnum}.


Core.CoSale.4.Ti=Allocation of Consideration

Core.CoSale.4.xlist=<ol type='i'><li>{Core.CoSale.4.1.Sec}</li><li>{Core.CoSale.4.2.Sec}</li></ol>


Core.CoSale.4.1.sec=Subject to Section {Core.CoSale.4.2.Xnum}, the aggregate consideration payable to the {_Participating_Investors} and the selling {_Key_Holder} shall be allocated based on the number of shares of {_Capital_Stock} sold to the {_Prospective_Transferee} by each {_Participating_Investor} and the selling {_Key_Holder} as provided in Section {Core.CoSale.2.Xnum}, provided that if a {_Participating_Investor} wishes to sell {_Preferred_Stock}, the price set forth in the {_Proposed_Transfer_Notice} shall be appropriately adjusted based on the conversion ratio of the {_Preferred_Stock} into {_Common_Stock}.


Core.CoSale.4.2.sec=In the event that the {_Proposed_Key_Holder_Transfer} constitutes a {_Change_of_Control}, the terms of the {_Purchase_and_Sale_Agreement} shall provide that the aggregate consideration from such transfer shall be allocated to the {_Participating_Investors} and the selling {_Key_Holder} in accordance with Section 2 of Article Fourth, Part B of the {_Restated_Certificate} as if (A) such transfer were a {_Deemed_Liquidation_Event}, and (B) the capital stock sold in accordance with the {_Purchase_and_Sale_Agreement} were the only capital stock outstanding.


Core.CoSale.5.Ti=Purchase by Selling Key Holder; Deliveries

Core.CoSale.5.sec=Notwithstanding Section {Core.CoSale.3.Xnum} above, if any {_Prospective_Transferee}(s) refuse(s) to purchase securities subject to the {_Right_of_Co-Sale} from any {_Participating_Investor} or {_Investors} or upon the failure to negotiate in good faith a {_Purchase_and_Sale_Agreement} reasonably satisfactory to the {_Participating_Investors}, no {_Key_Holder} may sell any {_Transfer_Stock} to such {_Prospective_Transferee}(s) unless and until, simultaneously with such sale, such {_Key_Holder} purchases all securities subject to the {_Right_of_Co-Sale} from such {_Participating_Investor} or {_Investors} on the same terms and conditions (including the proposed purchase price) as set forth in the {_Proposed_Transfer_Notice} and as provided in Section {Core.CoSale.4.1.Xnum}; provided, however, if such sale constitutes a {_Change_of_Control}, the portion of the aggregate consideration paid by the selling {_Key_Holder} to such {_Participating_Investor} or {_Investors} shall be made in accordance with Section {Core.CoSale.4.2.Xnum}. In connection with such purchase by the selling {_Key_Holder}, such {_Participating_Investor} or {_Investors} shall deliver to the selling {_Key_Holder} any stock certificate or certificates, properly endorsed for transfer, representing the capital stock being purchased by the selling {_Key_Holder} (or request that the {_Company} effect such transfer in the name of the selling {_Key_Holder}). Any such shares transferred to the selling {_Key_Holder} will be transferred to the {_Prospective_Transferee} against payment therefor in consummation of the sale of the {_Transfer_Stock} pursuant to the terms and conditions specified in the {_Proposed_Transfer_Notice}, and the selling {_Key_Holder} shall concurrently therewith remit or direct payment to each such {_Participating_Investor} the portion of the aggregate consideration to which each such {_Participating_Investor} is entitled by reason of its participation in such sale as provided in this Section {Core.CoSale.5.Xnum}.


Core.CoSale.6.Ti=Additional Compliance

Core.CoSale.6.sec=If any {_Proposed_Key_Holder_Transfer} is not consummated within 60 days after receipt of the {_Proposed_Transfer_Notice} by the {_Company}, the {_Key_Holders} proposing the {_Proposed_Key_Holder_Transfer} may not sell any {_Transfer_Stock} unless they first comply in full with each provision of this Section {Core.Xnum}. The exercise or election not to exercise any right by any {_Investor} hereunder shall not adversely affect its right to participate in any other sales of {_Transfer_Stock} subject to this Section {Core.CoSale.Xnum}.


Note=*** 2.3 Effect of Failure to Comply ***

Core.FailureToComply.Ti=Effect of Failure to Comply

Core.FailureToComply.xlist=<ol type='a'><li>{Core.FailureToComply.ImproperTransfer.Sec}</li><li>{Core.FailureToComply.RefusalToTransfer.Sec}</li><li>{Core.FailureToComply.CoSale.Sec}</li></ol>


Core.FailureToComply.ImproperTransfer.Ti=Transfer Void; Equitable Relief

Core.FailureToComply.ImproperTransfer.sec=Any {_Proposed_Key_Holder_Transfer} not made in compliance with the requirements of this {_Agreement} shall be null and void ab initio, shall not be recorded on the books of the {_Company} or its transfer agent and shall not be recognized by the {_Company}. Each party hereto acknowledges and agrees that any breach of this {_Agreement} would result in substantial harm to the other parties hereto for which monetary damages alone could not adequately compensate. Therefore, the parties hereto unconditionally and irrevocably agree that any non-breaching party hereto shall be entitled to seek protective orders, injunctive relief and other remedies available at law or in equity (including, without limitation, seeking specific performance or the rescission of purchases, sales and other transfers of {_Transfer_Stock} not made in strict compliance with this {_Agreement}).


Core.FailureToComply.RefusalToTransfer.Ti=Violation of First Refusal Right

Core.FailureToComply.RefusalToTransfer.sec=If any {_Key_Holder} becomes obligated to sell any {_Transfer_Stock} to the {_Company} or any {_Investor} under this {_Agreement} and fails to deliver such {_Transfer_Stock} in accordance with the terms of this {_Agreement}, the {_Company} and/or such {_Investor} may, at its option, in addition to all other remedies it may have, send to such {_Key_Holder} the purchase price for such {_Transfer_Stock} as is herein specified and transfer to the name of the {_Company} or such {_Investor} (or request that the {_Company} effect such transfer in the name of an {_Investor}) on the {_Company}'s books any certificates, instruments, or book entry representing the {_Transfer_Stock} to be sold.


Core.FailureToComply.CoSale.Ti=Violation of Co-Sale Right

Core.FailureToComply.CoSale.sec=If any {_Key_Holder} purports to sell any {_Transfer_Stock} in contravention of the {_Right_of_Co-Sale} (a "{DefT.Prohibited_Transfer}"), each {_Participating_Investor} who desires to exercise its {_Right_of_Co-Sale} under Section {Core.CoSale.Xnum} may, in addition to such remedies as may be available by law, in equity or hereunder, require such {_Key_Holder} to purchase from such {_Participating_Investor} the type and number of shares of capital stock that such {_Participating_Investor} would have been entitled to sell to the {_Prospective_Transferee} had the {_Prohibited_Transfer} been effected in compliance with the terms of Section {Core.CoSale.Xnum}. The sale will be made on the same terms, including, without limitation, as provided in Section {Core.CoSale.4.1.Xnum} and the first sentence of Section {Core.CoSale.4.2.Xnum}, as applicable, and subject to the same conditions as would have applied had the {_Key_Holder} not made the {_Prohibited_Transfer}, except that the sale (including, without limitation, the delivery of the purchase price) must be made within 90 days after the {_Participating_Investor} learns of the {_Prohibited_Transfer}, as opposed to the timeframe proscribed in Section {Core.CoSale.Xnum}. Such {_Key_Holder} shall also reimburse each {_Participating_Investor} for any and all reasonable and documented out-of-pocket fees and expenses, including reasonable legal fees and expenses, incurred pursuant to the exercise or the attempted exercise of the {_Participating_Investor}'s rights under Section {Core.CoSale.Xnum}.


Note=*** 2.4 Limitation on Foreign Person Investors (optional) ***

Core.ForeignPerson.Ti=Limitation on Foreign Person Investors

Core.ForeignPerson.sec=Notwithstanding the covenants set forth in this Section {Core.Xnum}, no {_Investor} that is a {_Foreign_Person} shall be permitted to obtain greater than 9.9% of the outstanding voting shares of the {_Company}.


Note=*** 2.5 Entity Transfers (optional) ***

Core.EntityTransfer.Ti=Entity Transfers

Core.EntityTransfer.sec=No {_Key_Holder} that is a trust, corporation, partnership, limited liability company or other entity shall engage or permit any {_Entity_Transfer} without complying with this {_Agreement} mutatis mutandis as if such {_Entity_Transfer} were a direct Transfer of {_Transfer_Stock} by the {_Key_Holder}.


Note=*** SECTION 3 — EXEMPT TRANSFERS ***

Exempt.Ti=Exempt Transfers

Exempt.xlist=<ol><li>{Exempt.Transfer.Sec}</li><li>{Exempt.Offering.Sec}</li><li>{Exempt.Transferee.Sec}</li></ol>


Note=*** 3.1 Exempted Transfers ***

Exempt.Transfer.Ti=Exempted Transfers

Exempt.Transfer.0.sec=Notwithstanding the foregoing or anything to the contrary herein, the provisions of Sections {Core.FirstRefusal.Xnum} and {Core.CoSale.Xnum} shall not apply

Exempt.Transfer.1.sec=in the case of a {_Key_Holder} that is an entity, upon a Transfer by such {_Key_Holder} to its stockholders, members, partners or other equity holders

Exempt.Transfer.2.sec=to a repurchase of {_Transfer_Stock} from a {_Key_Holder} by the {_Company} at a price no greater than that originally paid by such {_Key_Holder} for such {_Transfer_Stock} and pursuant to an agreement containing vesting and/or repurchase provisions approved by a majority of the disinterested members of the {_Board_of_Directors}

Exempt.Transfer.3.sec=in the case of a {_Key_Holder} that is a natural person, upon a Transfer of {_Transfer_Stock} by such {_Key_Holder} made for bona fide estate planning purposes, either during such person's lifetime or on death by will or intestacy to such person's spouse, including any life partner or similar statutorily-recognized domestic partner, child (natural or adopted), or any other direct lineal descendant of such {_Key_Holder} (or such person's spouse, including any life partner or similar statutorily-recognized domestic partner) (all of the foregoing collectively referred to as "{DefT.family_members}"), or any other {_Person} approved by a majority of the disinterested members of the {_Board_of_Directors}, or any custodian or trustee of any trust, partnership, limited liability company or other corporate entity for the benefit of, or the ownership interests of which are owned wholly by such {_Key_Holder} or any such {_family_members}

Note=Optional exemption (d): pledge creating mere security interest
Exempt.Transfer.4.sec=to a pledge of {_Transfer_Stock} that creates a mere security interest in the pledged {_Transfer_Stock}, provided that the pledgee thereof agrees in writing in advance to be bound by and comply with all applicable provisions of this {_Agreement} to the same extent as if it were the {_Key_Holder} making such pledge

Note=Optional exemption (e): de minimis sale by Key Holder. Exempt.Transfer.DeMinimis.Pct = deal-point: percentage (e.g. 5).
Exempt.Transfer.5.sec=to the sale by the {_Key_Holder} of up to {Exempt.Transfer.DeMinimis.Pct}% of the {_Transfer_Stock} held by such {_Key_Holder} as of the date that such {_Key_Holder} first became party to this {_Agreement} (including any agreement of which this {_Agreement} is a direct or indirect amendment or restatement)


Exempt.Transfer.Provided.1.sec=provided that in the case of clause(s) (a), (c), (d) or (e), the {_Key_Holder} shall deliver prior written notice to the {_Investors} of such pledge, gift or transfer and such shares of {_Transfer_Stock} shall at all times remain subject to the terms and restrictions set forth in this {_Agreement} and such transferee shall, as a condition to such Transfer, deliver a counterpart signature page to this {_Agreement} as confirmation that such transferee shall be bound by all the terms and conditions of this {_Agreement} as a {_Key_Holder} (but only with respect to the securities so transferred to the transferee), including the obligations of a {_Key_Holder} with respect to {_Proposed_Key_Holder_Transfers} of such {_Transfer_Stock} pursuant to Section {Core.Xnum}

Exempt.Transfer.Provided.2.sec=and provided further in the case of any transfer pursuant to clause (a) or (c) above, that such transfer is made pursuant to a transaction in which there is no consideration actually paid for such transfer.

Exempt.Transfer.sec={Exempt.Transfer.0.sec}<ol type='a'><li>{Exempt.Transfer.1.sec},</li><li>{Exempt.Transfer.2.sec},</li><li>{Exempt.Transfer.3.sec},</li><li>{Exempt.Transfer.4.sec},</li><li>{Exempt.Transfer.5.sec};</li></ol>{Exempt.Transfer.Provided.1.sec}; and<br>{Exempt.Transfer.Provided.2.sec}


Note=*** 3.2 Exempted Offerings ***

Exempt.Offering.Ti=Exempted Offerings

Exempt.Offering.sec=Notwithstanding the foregoing or anything to the contrary herein, the provisions of Section {Core.Xnum} shall not apply to the sale of any {_Transfer_Stock} (a) to the public in an offering pursuant to an effective registration statement under the Securities Act of 1933, as amended (a "{DefT.Public_Offering}"); or (b) pursuant to a {_Deemed_Liquidation_Event}.


Note=*** 3.3 Prohibited Transferees ***

Exempt.Transferee.Ti=Prohibited Transferees

Exempt.Transferee.sec=Notwithstanding the foregoing, no {_Key_Holder} shall transfer any {_Transfer_Stock} to any (a) {_Competitor}; (b) customer, distributor or supplier of the {_Company}, if the majority of the disinterested members of the {_Board_of_Directors} should determine that such transfer would result in such customer, distributor or supplier receiving information that would place the {_Company} at a competitive disadvantage with respect to such customer, distributor or supplier; (c) {_Sanctioned_Party}; or (d) {_Foreign_Person} that pursuant to any such transfer would acquire any {_DPA_Triggering_Rights}, unless otherwise approved by the majority of the disinterested members of the {_Board_of_Directors}.


Note=*** SECTION 4 — LEGEND ***

Legend.Ti=Legend

Legend.0.sec=Each certificate, instrument, or book entry representing shares of {_Transfer_Stock} held by the {_Key_Holders} or issued to any permitted transferee in connection with a transfer permitted by Section {Exempt.Transfer.Xnum} hereof shall be notated with the following legend:

Legend.1.sec=<span style='text-transform:uppercase'>The sale, pledge, hypothecation, or transfer of the securities represented hereby is subject to, and in certain cases prohibited by, the terms and conditions of a certain Right of First Refusal and Co-Sale Agreement by and among the stockholder, the corporation and certain other holders of stock of the corporation. Copies of such agreement may be obtained upon written request to the secretary of the corporation.</span>

Legend.00.sec=Each {_Key_Holder} agrees that the {_Company} may instruct its transfer agent to impose transfer restrictions on the shares notated with the legend referred to in this Section {Legend.Xnum} above to enforce the provisions of this {_Agreement}, and the {_Company} agrees to promptly do so. The legend shall be removed upon termination of this {_Agreement} at the request of the holder.

Legend.sec={Legend.0.sec}<br><br>{Legend.1.sec}<br><br>{Legend.00.sec}


Note=*** SECTION 5 — LOCK-UP ***

LockUp.Ti=Lock-Up

LockUp.xlist=<ol><li>{LockUp.Agreement.Sec}</li><li>{LockUp.StopTransfer.Sec}</li><li>{LockUp.Survival.Sec}</li></ol>


Note=*** 5.1 Agreement to Lock-Up ***

LockUp.Agreement.Ti=Agreement to Lock-Up

LockUp.Agreement.sec=Each {_Key_Holder} hereby agrees that it will not, without the prior written consent of the managing underwriter, during the period commencing on the date of the final prospectus relating to a {_Public_Offering}, the registration by the {_Company} of shares of its {_Common_Stock} or any other equity securities on a registration statement (other than a Form S-8), and ending on the date specified by the managing underwriter or the {_Company}, as applicable (such period not to exceed 180 days, or such other period as may be requested by the {_Company} or an underwriter to accommodate regulatory restrictions on (1) the publication or other distribution of research reports and (2) analyst recommendations and opinions, including, but not limited to, the restrictions contained in applicable FINRA rules, or any successor provisions or amendments thereto), (a) lend; offer; pledge; sell; contract to sell; sell any option or contract to purchase; purchase any option or contract to sell; grant any option, right, or warrant to purchase; or otherwise transfer or dispose of, directly or indirectly, any shares of {_Common_Stock} (or other equity securities of the {_Company}) or any securities convertible into or exercisable or exchangeable (directly or indirectly) for such {_Common_Stock} (or other equity securities) held or (b) enter into any swap or other arrangement that transfers to another, in whole or in part, any of the economic consequences of ownership of the capital stock, whether any such transaction described in clauses (a) or (b) above is to be settled by delivery of capital stock or other securities, in cash or otherwise. The foregoing provisions of this Section {LockUp.Xnum} shall not apply to the sale of any shares to an underwriter pursuant to an underwriting agreement or to the establishment of a trading plan pursuant to Rule 10b5-1, provided that such plan does not permit transfers during the restricted period. The {_Company}'s underwriters are intended third-party beneficiaries of this Section {LockUp.Xnum} and shall have the right, power and authority to enforce the provisions hereof as though they were a party hereto. Each {_Key_Holder} further agrees to execute such agreements as may be reasonably requested by the underwriters that are consistent with this Section {LockUp.Xnum} or that are necessary to give further effect thereto. In the event a {_Key_Holder} is or becomes party to a lock-up or market standoff agreement with the {_Company} or any third party beneficiary of this Section {LockUp.Agreement.Xnum} that contains terms that are more restrictive to the {_Key_Holder}, the {_Key_Holder} agrees that the {_Key_Holder} shall be subject to the more restrictive terms and compliance therewith shall be deemed compliance herewith.


Note=*** 5.2 Stop Transfer Instructions ***

LockUp.StopTransfer.Ti=Stop Transfer Instructions

LockUp.StopTransfer.sec=In order to enforce the foregoing covenant, the {_Company} may impose stop-transfer instructions with respect to the shares of capital stock of each {_Key_Holder} (and transferees and assignees thereof) until the end of such restricted period.


Note=*** 5.3 Survival ***

LockUp.Survival.Ti=Survival

LockUp.Survival.sec=Unless and only to the extent otherwise superseded by an underwriting agreement entered into in connection with the underwritten {_Public_Offering}, the obligations of the {_Key_Holders} under this Section {LockUp.Xnum} shall survive the termination of this {_Agreement} or any provision(s) of this {_Agreement}.


Note=*** SECTION 6 — MISCELLANEOUS ***

Misc.Ti=Miscellaneous

Misc.xlist=<ol><li>{Misc.Life.Sec}</li><li>{Misc.StockSplit.Sec}</li><li>{Misc.Ownership.Sec}</li><li>{Misc.DisputeResolution.Sec}</li><li>{Misc.Notice.Sec}</li><li>{Misc.ElectronicNotice.Sec}</li><li>{Misc.EntireAgreement.Sec}</li><li>{Misc.Delay.Sec}</li><li>{Misc.AmendWaive.Sec}</li><li>{Misc.Assign.Sec}</li><li>{Misc.Sever.Sec}</li><li>{Misc.AdditionalInvestors.Sec}</li><li>{Misc.GoverningLaw.Sec}</li><li>{Misc.Titles.Sec}</li><li>{Misc.Counterpart.Sec}</li><li>{Misc.AggregationOfStock.Sec}</li><li>{Misc.Injunction.Sec}</li><li>{Misc.AdditionalKeyHolders.Sec}</li><li>{Misc.Sanctions.Sec}</li><li>{Misc.CostsOfEnforcement.Sec}</li></ol>


Note=*** 6.1 Term ***

Misc.Life.Ti=Term

Misc.Life.sec=This {_Agreement} shall automatically terminate upon the earlier of (a) immediately prior to the consummation of the {_Company}'s initial {_Public_Offering} ("{DefT.IPO}") or {_Qualified_Direct_Listing}, as applicable; and (b) the consummation of a {_Deemed_Liquidation_Event} in which the consideration received by the {_Investors} in such {_Deemed_Liquidation_Event} is in the form of cash and/or publicly traded securities, or if the {_Investors} receive substantially similar rights.


Note=*** 6.2 Stock Split ***

Misc.StockSplit.Ti=Stock Split

Misc.StockSplit.sec=All references to numbers of shares in this {_Agreement} shall be appropriately adjusted to reflect any stock dividend, split, combination or other recapitalization affecting the capital stock occurring after the date of this {_Agreement}.


Note=*** 6.3 Ownership ***

Misc.Ownership.Ti=Ownership

Misc.Ownership.sec=Each {_Key_Holder} represents and warrants that such {_Key_Holder} is the sole legal and beneficial owner of the shares of {_Transfer_Stock} subject to this {_Agreement} and that no other person or entity has any interest in such shares (other than a community property interest as to which the holder thereof has acknowledged and agreed in writing to the restrictions and obligations hereunder).


Note=*** 6.4 Dispute Resolution — three alternatives: Court, JAMS Arbitration, Delaware Rapid Arbitration Act ***

Misc.DisputeResolution.Ti=Dispute Resolution

Misc.DisputeResolution.sec={Misc.DisputeResolution.Court.sec}{Misc.DisputeResolution.JuryWaiver.sec}

Misc.DisputeResolution.Arbitration.sec=Except as (i) otherwise provided in this {_Agreement}, or (ii) any disputes, controversies, or claims arising out of either party's intellectual property rights for which a provisional remedy or equitable relief is sought, any unresolved dispute, controversy, or claim arising out of or relating to this {_Agreement} or the breach, termination, enforcement, interpretation, or validity thereof, including the determination of the scope or applicability of this agreement to arbitrate, shall be resolved by arbitration before a single arbitrator. Such arbitrator shall be mutually agreed upon by the parties, and if no agreement can be reached within 30 days after names of potential arbitrators have been proposed by Judicial Arbitration and Mediation Services, Inc. ("{DefT.JAMS}"), then {_JAMS} shall choose one arbitrator having reasonable experience in corporate finance transactions of the type provided for in this {_Agreement}. The arbitration shall take place in {Dispute.Location}, pursuant to the JAMS Comprehensive Arbitration Rules and Procedures; provided, however, that there shall be limited discovery prior to the arbitration hearing as follows: (x) exchange of witness lists and copies of documentary evidence and documents relating to the issues to be arbitrated, (y) depositions of all party witnesses, and (z) such other depositions as may be allowed by the arbitrators upon a showing of good cause. Depositions shall be conducted in accordance with the {Dispute.State} Code of Civil Procedure, the arbitrator shall be required to provide in writing to the parties the basis for the award or order of such arbitrator, and a court reporter shall record all hearings, with such record constituting the official transcript of such proceedings. Judgment on the award may be entered in any court having jurisdiction.


Misc.DisputeResolution.Court.sec=The parties (i) hereby irrevocably and unconditionally submit to the jurisdiction of the state courts of {Dispute.State} and to the jurisdiction of the United States District Court for the District of {Dispute.JudicialDistrict} for the purpose of any suit, action or other proceeding arising out of or based upon this {_Agreement}, (ii) agree not to commence any suit, action or other proceeding arising out of or based upon this {_Agreement} except in the state courts of {Dispute.State} or the United States District Court for the District of {Dispute.JudicialDistrict}, and (iii) hereby waive, and agree not to assert, by way of motion, as a defense, or otherwise, in any such suit, action or proceeding, any claim that it is not subject personally to the jurisdiction of the above-named courts, that its property is exempt or immune from attachment or execution, that the suit, action or proceeding is brought in an inconvenient forum, that the venue of the suit, action or proceeding is improper or that this {_Agreement} or the subject matter hereof may not be enforced in or by such court. Each of the parties to this {_Agreement} consents to personal jurisdiction for any equitable action sought in the U.S. District Court for the District of {Dispute.JudicialDistrict} or any state court of {Dispute.State} having subject matter jurisdiction.


Misc.DisputeResolution.JuryWaiver.sec=<br><span style='text-transform:uppercase'>Waiver of Jury Trial: Each party hereby waives its rights to a jury trial of any claim or cause of action based upon or arising out of this Agreement, the other Transaction Agreements, the Securities or the subject matter hereof or thereof. The scope of this waiver is intended to be all-encompassing of any and all disputes that may be filed in any court and that relate to the subject matter of this transaction, including, without limitation, contract claims, tort claims (including negligence), breach of duty claims, and all other common law and statutory claims. This Section has been fully discussed by each of the parties hereto and these provisions will not be subject to any exceptions. Each party hereto hereby further warrants and represents that such party has reviewed this waiver with its legal counsel, and that such party knowingly and voluntarily waives its jury trial rights following consultation with legal counsel.</span>


Note=*** 6.5 Notices ***

Misc.Notice.Ti=Notices

Misc.Notice.sec={Misc.Notice.General.sec}<br><br>{Misc.Notice.ElectronicConsent.sec}

Misc.Notice.General.sec=All notices and other communications given or made pursuant to this {_Agreement} shall be in writing (including electronic mail as permitted in this {_Agreement}) and shall be deemed effectively given upon the earlier of actual receipt or (a) personal delivery to the party to be notified, (b) when sent, if sent by electronic mail during normal business hours of the recipient, and if not sent during normal business hours, then on the recipient's next business day, (c) five days after having been sent by registered or certified mail, return receipt requested, postage prepaid, or (d) one business day after deposit with a nationally recognized overnight courier, freight prepaid, specifying next business day delivery, with written verification of receipt. All communications shall be sent to the respective parties at their address as set forth on Schedule {Schedule.A.Xnum} or Schedule {Schedule.B.Xnum} hereof, as the case may be, or (as to the {_Company}) to the address set forth on the signature page hereto, or in any case to such email address or address as subsequently modified by written notice given in accordance with this Section {Misc.Notice.Xnum}. If notice is given to the {_Company}, a copy (which copy shall not constitute notice) shall also be sent to {Company.Counsel.Name}, and if notice is given to any {_Investor}, a copy (which copy shall not constitute notice) shall also be given to any "cc" address noted on Schedule {Schedule.A.Xnum} for such {_Investor}.

Note=Company.Counsel.Name = deal-point: company counsel name and address.

Misc.Notice.ElectronicConsent.sec=Consent to Electronic Notice. Each party to this {_Agreement} consents to the delivery of any stockholder notice pursuant to the Delaware General Corporation Law (the "{DefT.DGCL}"), as amended or superseded from time to time, by electronic mail pursuant to Section 232 of the {_DGCL} (or any successor thereto) at the electronic mail address set forth below such party's name on the Schedules hereto, as updated from time to time by notice to the {_Company}, or as on the books of the {_Company}. To the extent that any notice given by means of electronic mail is returned or undeliverable for any reason, the foregoing consent shall be deemed to have been revoked until a new or corrected electronic mail address has been provided, and such attempted electronic notice shall be ineffective and deemed to not have been given. Each party to this {_Agreement} agrees to promptly notify the {_Company} of any change in its electronic mail address, and that failure to do so shall not affect the foregoing.


Note=*** 6.6 Electronic Notice (folded into 6.5 above per the 2025 source) ***

Misc.ElectronicNotice.Ti=Consent to Electronic Notice

Misc.ElectronicNotice.sec=(See Section {Misc.Notice.Xnum} above.)


Note=*** 6.7 Entire Agreement ***

Misc.EntireAgreement.Ti=Entire Agreement

Misc.EntireAgreement.sec={Misc.EntireAgreement.PriorAgreement.cl}This {_Agreement} (including the Exhibits and Schedules hereto) together with the other Transaction Agreements (as defined in the {_Purchase_Agreement}) and any {_Side_Letters} constitute the full and entire understanding and agreement among the parties with respect to the subject matter hereof, and any other written or oral agreement relating to the subject matter hereof existing between or among any of the parties are expressly canceled.

Note=Misc.EntireAgreement.PriorAgreement.cl = optional clause superseding the Prior Agreement (use Alt2 only). Leave empty for new agreements (Alt1).
Misc.EntireAgreement.PriorAgreement.Alt1.cl=
Misc.EntireAgreement.PriorAgreement.Alt2.cl=Upon the effectiveness of this {_Agreement}, the {_Prior_Agreement} shall be deemed amended and restated and superseded and replaced in its entirety by this {_Agreement}, and shall be of no further force or effect. 
Misc.EntireAgreement.PriorAgreement.cl={Misc.EntireAgreement.PriorAgreement.sec}
Misc.EntireAgreement.PriorAgreement.=[G/Z/Alt/2]


Note=*** 6.8 Delays or Omissions ***

Misc.Delay.Ti=Delays or Omissions

Misc.Delay.sec=No delay or omission to exercise any right, power or remedy accruing to any party under this {_Agreement}, upon any breach or default of any other party under this {_Agreement}, shall impair any such right, power or remedy of such non-breaching or non-defaulting party nor shall it be construed to be a waiver of any such breach or default, or an acquiescence therein, or of or in any similar breach or default thereafter occurring; nor shall any waiver of any single breach or default be deemed a waiver of any other breach or default theretofore or thereafter occurring. Any waiver, permit, consent or approval of any kind or character on the part of any party of any breach or default under this {_Agreement}, or any waiver on the part of any party of any provisions or conditions of this {_Agreement}, must be in writing and shall be effective only to the extent specifically set forth in such writing. All remedies, either under this {_Agreement} or by law or otherwise afforded to any party, shall be cumulative and not alternative.


Note=*** 6.9 Amendment; Waiver and Termination ***

Misc.AmendWaive.Ti=Amendment; Waiver and Termination

Misc.AmendWaive.xlist=<ol type='a'><li>{Misc.AmendWaive.1.Sec}</li><li>{Misc.AmendWaive.2.Sec}</li><li>{Misc.AmendWaive.3.Sec}</li><li>{Misc.AmendWaive.4.Sec}</li><li>{Misc.AmendWaive.5.Sec}</li></ol>


Misc.AmendWaive.1.Ti=

Misc.AmendWaive.1.sec=This {_Agreement} may be amended, modified or terminated (other than pursuant to Section {Misc.Life.Xnum} above) and the observance of any term hereof may be waived (either generally or in a particular instance and either retroactively or prospectively) only by a written instrument executed by (i) the {_Company}, (ii) the {Amend.KeyHolder.Qualifier.cl}{_Key_Holders} holding {Amend.KeyHolder.Pct} of the shares of {_Transfer_Stock} then held by all of the {Amend.KeyHolder.Qualifier.cl}{_Key_Holders} {Amend.KeyHolder.ServiceProviso.cl}, and (iii) the holders of at least {Amend.Investor.Pct}% of the shares of {_Preferred_Stock} then held by the {_Investors} (voting as a single separate class and on an as-converted basis); provided that the {_Company} may in its sole discretion waive compliance with any provision of this {_Agreement} if observance of the terms would cause the {_Company} or any {_Investor} to be in violation of applicable {_Sanctions}.

Note=Amend.KeyHolder.Qualifier.cl = optional "Qualified" qualifier (e.g. "Qualified "). Amend.KeyHolder.Pct = deal-point: Key Holder consent percentage. Amend.KeyHolder.ServiceProviso.cl = optional proviso about service relationship. Amend.Investor.Pct = deal-point: Investor consent percentage.
Amend.KeyHolder.Qualifier.cl=
Amend.KeyHolder.ServiceProviso.cl=
Amend.=[G/Z/Alt/2]


Misc.AmendWaive.2.Ti=

Misc.AmendWaive.2.sec=Any amendment, modification, termination or waiver effected in accordance with this Section {Misc.AmendWaive.Xnum} shall be binding upon the {_Company}, the {_Investors}, the {_Key_Holders} and all of their respective successors and permitted assigns whether or not such party, assignee or other shareholder entered into or approved such amendment, modification, termination or waiver.

Misc.AmendWaive.2.=[G/Z/Base]

Misc.AmendWaive.3.Ti=

Misc.AmendWaive.3.sec=Notwithstanding Section {Misc.AmendWaive.1.Xnum} above, (i) this {_Agreement} may not be amended, modified or terminated and the observance of any term hereunder may not be waived with respect to any {_Investor} or {_Key_Holder} without the written consent of such {_Investor} or {_Key_Holder} unless such amendment, modification, termination or waiver applies to all {_Investors} and {_Key_Holders}, respectively, in the same fashion (it being agreed that a waiver of the provisions of Section {Core.Xnum} with respect to a particular transaction shall be deemed to apply to all {_Investors} in the same fashion if such waiver does so by its terms, notwithstanding the fact that certain {_Investors} may nonetheless, by agreement with the {_Company}, purchase or sell securities in such transaction), (ii) no consent of any {_Key_Holder} shall be required for a waiver of the applicability of the rights provided in Section {Core.Xnum} of this {_Agreement} as to any specific {_Proposed_Key_Holder_Transfer}, (iii) the consent of the {_Key_Holders} shall not be required for any amendment, modification, termination or waiver if such amendment, modification, termination or waiver does not apply to the {_Key_Holders}, and (iv) Schedule {Schedule.A.Xnum} hereto may be amended by the {_Company} from time to time in accordance with the {_Purchase_Agreement} to add information regarding Additional Purchasers (as defined in the {_Purchase_Agreement}) without the consent of the other parties hereto.

Misc.AmendWaive.3.=[G/Z/Base]

Misc.AmendWaive.4.Ti=

Misc.AmendWaive.4.sec=The {_Company} shall give prompt written notice of any amendment, modification or termination hereof or waiver hereunder to any party hereto whose rights and/or obligations were affected by such amendment, modification, termination, or waiver and that did not consent in writing to such amendment, modification, termination or waiver; provided that the failure to provide such notice shall not invalidate any amendment, modification, termination or waiver hereunder; and provided further, for clarity, that no such notice shall be required to be given to any {_Key_Holder} for a waiver of the applicability of the rights provided in Section {Core.Xnum} of this {_Agreement} as to any specific {_Proposed_Key_Holder_Transfer} that does not involve any {_Transfer_Stock} held by such {_Key_Holder}.

Misc.AmendWaive.4.=[G/Z/Base]

Misc.AmendWaive.5.Ti=

Misc.AmendWaive.5.sec=No waivers of or exceptions to any term, condition or provision of this {_Agreement}, in any one or more instances, shall be deemed to be, or construed as, a further or continuing waiver of any such term, condition or provision. Any amendment, modification, termination, or waiver effected in accordance with this Section {Misc.AmendWaive.Xnum} shall be binding on all parties hereto, regardless of whether any such party has consented thereto or received notice thereof.

Misc.AmendWaive.5.=[G/Z/Base]

Note=*** 6.10 Assignment of Rights ***

Misc.Assign.Ti=Assignment of Rights

Misc.Assign.xlist=<ol type='a'><li>{Misc.Assign.1.Sec}</li><li>{Misc.Assign.2.Sec}</li><li>{Misc.Assign.3.Sec}</li><li>{Misc.Assign.4.Sec}</li></ol>


Misc.Assign.1.Ti=

Misc.Assign.1.sec=The terms and conditions of this {_Agreement} shall inure to the benefit of and be binding upon the respective successors and permitted assigns of the parties. Nothing in this {_Agreement}, express or implied, is intended to confer upon any party other than the parties hereto or their respective successors and permitted assigns any rights, remedies, obligations, or liabilities under or by reason of this {_Agreement}, except as expressly provided in this {_Agreement}.


Misc.Assign.2.Ti=

Misc.Assign.2.sec=Any successor or permitted assignee of any {_Key_Holder}, including any {_Prospective_Transferee} who purchases shares of {_Transfer_Stock} in accordance with the terms hereof, shall deliver to the {_Company} and the {_Investors}, as a condition to any transfer or assignment, a counterpart signature page hereto pursuant to which such successor or permitted assignee shall confirm their agreement to be subject to and bound by all of the provisions set forth in this {_Agreement} that were applicable to the predecessor or assignor of such successor or permitted assignee.


Misc.Assign.3.Ti=

Misc.Assign.3.sec=The rights of the {_Investors} hereunder are not assignable without the {_Company}'s written consent (which shall not be unreasonably withheld, delayed or conditioned), except (i) by an {_Investor} to any {_Affiliate}, or (ii) to an assignee or transferee who, after such assignment or transfer, holds at least {Assign.MinShares} shares of {_Capital_Stock} (as adjusted for any stock combination, stock split, stock dividend, recapitalization or other similar transaction), it being acknowledged and agreed that any such assignment, including an assignment contemplated by the preceding clauses (i) or (ii) shall be subject to and conditioned upon any such assignee's delivery to the {_Company} and the other {_Investors} of a counterpart signature page hereto pursuant to which such assignee shall confirm their agreement to be subject to and bound by all of the provisions set forth in this {_Agreement} that were applicable to the assignor of such assignee.

Note=Assign.MinShares = deal-point: minimum share threshold for Investor assignment (e.g. 1,000,000).


Misc.Assign.4.Ti=

Misc.Assign.4.sec=Except in connection with an assignment by the {_Company} by operation of law to the acquirer of the {_Company}, the rights and obligations of the {_Company} hereunder may not be assigned under any circumstances.


Note=*** 6.11 Severability ***

Misc.Sever.Ti=Severability

Misc.Sever.sec=The invalidity or unenforceability of any provision hereof shall in no way affect the validity or enforceability of any other provision.


Note=*** 6.12 Additional Investors ***

Misc.AdditionalInvestors.Ti=Additional Investors

Misc.AdditionalInvestors.sec=Notwithstanding anything to the contrary contained herein, if the {_Company} issues additional shares of the {_Company}'s {_Preferred_Stock} after the date hereof, any purchaser of such shares of {_Preferred_Stock} may become a party to this {_Agreement} by executing and delivering a counterpart signature page to this {_Agreement} and thereafter shall be deemed an "{_Investor}" for all purposes hereunder.


Note=*** 6.13 Governing Law ***

Misc.GoverningLaw.Ti=Governing Law

Misc.GoverningLaw.sec=This {_Agreement} shall be governed by the internal law of {Dispute.State}, without regard to conflict of law principles that would result in the application of any law other than the law of {Dispute.State}.


Note=*** 6.14 Titles and Subtitles ***

Misc.Titles.Ti=Titles and Subtitles

Misc.Titles.sec=The titles and subtitles used in this {_Agreement} are used for convenience only and are not to be considered in construing or interpreting this {_Agreement}.


Note=*** 6.15 Counterparts ***

Misc.Counterpart.Ti=Counterparts

Misc.Counterpart.sec=This {_Agreement} may be executed in two or more counterparts, each of which shall be deemed an original, but all of which together shall constitute one and the same instrument. Counterparts may be delivered via electronic mail (including pdf or any electronic signature complying with the U.S. federal ESIGN Act of 2000, e.g., www.docusign.com) or other transmission method and any counterpart so delivered shall be deemed to have been duly and validly delivered and be valid and effective for all purposes.


Note=*** 6.16 Aggregation of Stock ***

Misc.AggregationOfStock.Ti=Aggregation of Stock

Misc.AggregationOfStock.sec=All shares of {_Capital_Stock} held or acquired by {_Affiliates} shall be aggregated together for the purpose of determining the availability of any rights under this {_Agreement} and such {_Affiliates} may apportion such rights as among themselves in any manner they deem appropriate.


Note=*** 6.17 Specific Performance ***

Misc.Injunction.Ti=Specific Performance

Misc.Injunction.sec=In addition to any and all other remedies that may be available at law in the event of any breach of this {_Agreement}, each {_Investor} shall be entitled to specific performance of the agreements and obligations of the {_Company} and the {_Key_Holders} hereunder and to such other injunction or other equitable relief as may be granted by a court of competent jurisdiction.


Note=*** 6.18 Additional Key Holders ***

Misc.AdditionalKeyHolders.Ti=Additional Key Holders

Misc.AdditionalKeyHolders.sec=In the event that after the date of this {_Agreement}, the {_Company} issues shares of {_Common_Stock}, or options to purchase {_Common_Stock}, to any employee or consultant, which shares or options would collectively constitute with respect to such employee or consultant (taking into account all shares of {_Common_Stock}, options and other purchase rights held by such employee or consultant) 1% or more of the {_Company}'s then outstanding {_Common_Stock} (treating for this purpose all shares of {_Common_Stock} issuable upon exercise of or conversion of outstanding options, warrants or convertible securities, as if exercised or converted), the {_Company} shall, as a condition to such issuance, cause such employee or consultant to execute a counterpart signature page hereto as a {_Key_Holder}, and such person shall thereby be bound by, and subject to, all the terms and provisions of this {_Agreement} applicable to a {_Key_Holder}.


Note=*** 6.19 Sanctions ***

Misc.Sanctions.Ti=Sanctions

Misc.Sanctions.sec=For the avoidance of doubt, at any time that a {_Person} is or becomes a {_Sanctioned_Party}, all rights granted to the {_Person} under this {_Agreement}, including, without limitation, any right to purchase any {_Transfer_Stock}, will be immediately suspended for so long as such {_Person} is a {_Sanctioned_Party} or until authorization is issued by a relevant government authority as required by applicable {_Sanctions}.


Note=*** 6.20 Costs of Enforcement — two alternatives: each party bears own costs vs. prevailing party gets fees ***

Misc.CostsOfEnforcement.Ti=Costs of Enforcement

Misc.CostsOfEnforcement.Alt1.sec=Each party will bear its own costs in respect of any disputes arising under this {_Agreement}.

Misc.CostsOfEnforcement.Alt2.sec=The prevailing party shall be entitled to reasonable attorney's fees, costs, and necessary disbursements in addition to any other relief to which such party may be entitled.


Note=*** SIGNATURE BLOCK ***

By.0.sec=IN WITNESS WHEREOF, the parties have executed this {Amend.sec}Right of First Refusal and Co-Sale Agreement as of the date first written above.

00.sec={By.sec}<br><br>{Schedule.sec}

By.sec={By.0.sec}<br><br>{Company.US.Contract.By.Sec}<br><br>{KeyHolder.US.Contract.By.Sec}<br><br>{Investor.US.Contract.By.Sec}

Company.US.Contract.By.Sec=COMPANY:&nbsp;&nbsp;{Company.Name.Full}<br>By:&nbsp;___<br>Name:&nbsp;___<br>Title:&nbsp;___<br>Address:&nbsp;___<br>Email:&nbsp;___

KeyHolder.US.Contract.By.Sec=KEY HOLDERS:&nbsp;&nbsp;[Insert Key Holder Name]<br>Signature:&nbsp;___

Investor.US.Contract.By.Sec=INVESTORS:&nbsp;&nbsp;[Insert Investor Name]<br>By:&nbsp;___<br>Name:&nbsp;___<br>Title:&nbsp;___

Schedule.sec=<h3>SCHEDULE A</h3>{Schedule.A.Sec}<br><h3>SCHEDULE B</h3>{Schedule.B.Sec}

Schedule.A.Ti=Investors

Schedule.A.sec={ScheduleOfInvestors.sec}


Schedule.B.Ti=Key Holders

Schedule.B.sec={ScheduleOfKeyHolders.sec}


=[G/Z/Base]

Note=*** CROSS-REFERENCE NUMBERS ***

Def.Xnum=<a class='xref' href='{!!!}Def.Sec'>1</a>
Def.=[G/Z/Base]

Core.Xnum=<a class='xref' href='{!!!}Core.Sec'>2</a>

Exempt.Xnum=<a class='xref' href='{!!!}Exempt.Sec'>3</a>

Legend.Xnum=<a class='xref' href='{!!!}Legend.Sec'>4</a>
Legend.=[G/Z/Base]

LockUp.Xnum=<a class='xref' href='{!!!}LockUp.Sec'>5</a>

Misc.Xnum=<a class='xref' href='{!!!}Misc.Sec'>6</a>

Core.FirstRefusal.Xnum={Core.Xnum}.<a class='xref' href='{!!!}Core.FirstRefusal.Sec'>1</a>

Core.FirstRefusal.1.Xnum={Core.FirstRefusal.Xnum}<a class='xref' href='{!!!}Core.FirstRefusal.1.Sec'>(a)</a>
Core.FirstRefusal.1.=[G/Z/Base]

Core.FirstRefusal.2.Xnum={Core.FirstRefusal.Xnum}<a class='xref' href='{!!!}Core.FirstRefusal.2.Sec'>(b)</a>
Core.FirstRefusal.2.=[G/Z/Base]

Core.FirstRefusal.3.Xnum={Core.FirstRefusal.Xnum}<a class='xref' href='{!!!}Core.FirstRefusal.3.Sec'>(c)</a>
Core.FirstRefusal.3.=[G/Z/Base]

Core.FirstRefusal.4.Xnum={Core.FirstRefusal.Xnum}<a class='xref' href='{!!!}Core.FirstRefusal.4.Sec'>(d)</a>
Core.FirstRefusal.4.=[G/Z/Base]

Core.FirstRefusal.5.Xnum={Core.FirstRefusal.Xnum}<a class='xref' href='{!!!}Core.FirstRefusal.5.Sec'>(e)</a>
Core.FirstRefusal.5.=[G/Z/Base]

Core.FirstRefusal.6.Xnum={Core.FirstRefusal.Xnum}<a class='xref' href='{!!!}Core.FirstRefusal.6.Sec'>(f)</a>
Core.FirstRefusal.6.=[G/Z/Base]
Core.FirstRefusal.=[G/Z/ol-a/6]

Core.CoSale.Xnum={Core.Xnum}.<a class='xref' href='{!!!}Core.CoSale.Sec'>2</a>

Core.CoSale.1.Xnum={Core.CoSale.Xnum}<a class='xref' href='{!!!}Core.CoSale.1.Sec'>(a)</a>
Core.CoSale.1.=[G/Z/Base]

Core.CoSale.2.Xnum={Core.CoSale.Xnum}<a class='xref' href='{!!!}Core.CoSale.2.Sec'>(b)</a>
Core.CoSale.2.=[G/Z/Base]

Core.CoSale.3.Xnum={Core.CoSale.Xnum}<a class='xref' href='{!!!}Core.CoSale.3.Sec'>(c)</a>
Core.CoSale.3.=[G/Z/Base]

Core.CoSale.4.Xnum={Core.CoSale.Xnum}<a class='xref' href='{!!!}Core.CoSale.4.Sec'>(d)</a>

Core.CoSale.4.1.Xnum={Core.CoSale.4.Xnum}<a class='xref' href='{!!!}Core.CoSale.4.1.Sec'>(i)</a>
Core.CoSale.4.1.=[G/Z/Base]

Core.CoSale.4.2.Xnum={Core.CoSale.4.Xnum}<a class='xref' href='{!!!}Core.CoSale.4.2.Sec'>(ii)</a>
Core.CoSale.4.2.=[G/Z/Base]
Core.CoSale.4.=[G/Z/ol-i/s2]

Core.CoSale.5.Xnum={Core.CoSale.Xnum}<a class='xref' href='{!!!}Core.CoSale.5.Sec'>(e)</a>
Core.CoSale.5.=[G/Z/Base]

Core.CoSale.6.Xnum={Core.CoSale.Xnum}<a class='xref' href='{!!!}Core.CoSale.6.Sec'>(f)</a>
Core.CoSale.6.=[G/Z/Base]
Core.CoSale.=[G/Z/ol-a/6]

Core.FailureToComply.Xnum={Core.Xnum}.<a class='xref' href='{!!!}Core.FailureToComply.Sec'>3</a>

Core.FailureToComply.ImproperTransfer.Xnum={Core.FailureToComply.Xnum}<a class='xref' href='{!!!}Core.FailureToComply.ImproperTransfer.Sec'>(a)</a>
Core.FailureToComply.ImproperTransfer.=[G/Z/Base]

Core.FailureToComply.RefusalToTransfer.Xnum={Core.FailureToComply.Xnum}<a class='xref' href='{!!!}Core.FailureToComply.RefusalToTransfer.Sec'>(b)</a>
Core.FailureToComply.RefusalToTransfer.=[G/Z/Base]

Core.FailureToComply.CoSale.Xnum={Core.FailureToComply.Xnum}<a class='xref' href='{!!!}Core.FailureToComply.CoSale.Sec'>(c)</a>
Core.FailureToComply.CoSale.=[G/Z/Base]
Core.FailureToComply.=[G/Z/ol-a/3]

Core.ForeignPerson.Xnum={Core.Xnum}.<a class='xref' href='{!!!}Core.ForeignPerson.Sec'>4</a>
Core.ForeignPerson.=[G/Z/Base]

Core.EntityTransfer.Xnum={Core.Xnum}.<a class='xref' href='{!!!}Core.EntityTransfer.Sec'>5</a>
Core.EntityTransfer.=[G/Z/Base]
Core.=[G/Z/ol/5]

Exempt.Transfer.Xnum={Exempt.Xnum}.<a class='xref' href='{!!!}Exempt.Transfer.Sec'>1</a>
Exempt.Transfer.=[G/Z/Base]

Exempt.Offering.Xnum={Exempt.Xnum}.<a class='xref' href='{!!!}Exempt.Offering.Sec'>2</a>
Exempt.Offering.=[G/Z/Base]

Exempt.Transferee.Xnum={Exempt.Xnum}.<a class='xref' href='{!!!}Exempt.Transferee.Sec'>3</a>
Exempt.Transferee.=[G/Z/Base]
Exempt.=[G/Z/ol/3]

LockUp.Agreement.Xnum={LockUp.Xnum}.<a class='xref' href='{!!!}LockUp.Agreement.Sec'>1</a>
LockUp.Agreement.=[G/Z/Base]

LockUp.StopTransfer.Xnum={LockUp.Xnum}.<a class='xref' href='{!!!}LockUp.StopTransfer.Sec'>2</a>
LockUp.StopTransfer.=[G/Z/Base]

LockUp.Survival.Xnum={LockUp.Xnum}.<a class='xref' href='{!!!}LockUp.Survival.Sec'>3</a>
LockUp.Survival.=[G/Z/Base]
LockUp.=[G/Z/ol/3]

Misc.Life.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Life.Sec'>1</a>
Misc.Life.=[G/Z/Base]

Misc.StockSplit.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.StockSplit.Sec'>2</a>
Misc.StockSplit.=[G/Z/Base]

Misc.Ownership.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Ownership.Sec'>3</a>
Misc.Ownership.=[G/Z/Base]

Misc.DisputeResolution.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.DisputeResolution.Sec'>4</a>
Misc.DisputeResolution.=[G/Z/Base]

Misc.Notice.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Notice.Sec'>5</a>
Misc.Notice.=[G/Z/Base]

Misc.ElectronicNotice.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.ElectronicNotice.Sec'>6</a>
Misc.ElectronicNotice.=[G/Z/Base]

Misc.EntireAgreement.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.EntireAgreement.Sec'>7</a>
Misc.EntireAgreement.=[G/Z/Base]

Misc.Delay.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Delay.Sec'>8</a>
Misc.Delay.=[G/Z/Base]

Misc.AmendWaive.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.AmendWaive.Sec'>9</a>

Misc.AmendWaive.1.Xnum={Misc.AmendWaive.Xnum}<a class='xref' href='{!!!}Misc.AmendWaive.1.Sec'>(a)</a>
Misc.AmendWaive.1.=[G/Z/Base]
Misc.AmendWaive.=[G/Z/ol-a/5]

Misc.Assign.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Assign.Sec'>10</a>

Misc.Assign.1.Xnum={Misc.Assign.Xnum}<a class='xref' href='{!!!}Misc.Assign.1.Sec'>(a)</a>
Misc.Assign.1.=[G/Z/Base]

Misc.Assign.2.Xnum={Misc.Assign.Xnum}<a class='xref' href='{!!!}Misc.Assign.2.Sec'>(b)</a>
Misc.Assign.2.=[G/Z/Base]

Misc.Assign.3.Xnum={Misc.Assign.Xnum}<a class='xref' href='{!!!}Misc.Assign.3.Sec'>(c)</a>
Misc.Assign.3.=[G/Z/Base]

Misc.Assign.4.Xnum={Misc.Assign.Xnum}<a class='xref' href='{!!!}Misc.Assign.4.Sec'>(d)</a>
Misc.Assign.4.=[G/Z/Base]
Misc.Assign.=[G/Z/ol-a/4]

Misc.Sever.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Sever.Sec'>11</a>
Misc.Sever.=[G/Z/Base]

Misc.AdditionalInvestors.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.AdditionalInvestors.Sec'>12</a>
Misc.AdditionalInvestors.=[G/Z/Base]

Misc.GoverningLaw.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.GoverningLaw.Sec'>13</a>
Misc.GoverningLaw.=[G/Z/Base]

Misc.Titles.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Titles.Sec'>14</a>
Misc.Titles.=[G/Z/Base]

Misc.Counterpart.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Counterpart.Sec'>15</a>
Misc.Counterpart.=[G/Z/Base]

Misc.AggregationOfStock.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.AggregationOfStock.Sec'>16</a>
Misc.AggregationOfStock.=[G/Z/Base]

Misc.Injunction.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Injunction.Sec'>17</a>
Misc.Injunction.=[G/Z/Base]

Misc.AdditionalKeyHolders.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.AdditionalKeyHolders.Sec'>18</a>
Misc.AdditionalKeyHolders.=[G/Z/Base]

Misc.Sanctions.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.Sanctions.Sec'>19</a>
Misc.Sanctions.=[G/Z/Base]

Misc.CostsOfEnforcement.Xnum={Misc.Xnum}.<a class='xref' href='{!!!}Misc.CostsOfEnforcement.Sec'>20</a>
Misc.CostsOfEnforcement.=[G/Z/Alt/2]
Misc.=[G/Z/ol/20]

Schedule.A.Xnum=<a class='xref' href='{!!!}Schedule.A.Sec'>A</a>
Schedule.A.=[G/Z/Base]

Schedule.B.Xnum=<a class='xref' href='{!!!}Schedule.B.Sec'>B</a>
Schedule.B.=[G/Z/Base]

!!!=#

SecName=</>

_=[G/NVCA/2025/Agt/ROFRA/DefT-01.md]

DefT.=[G/NVCA/2025/Agt/ROFRA/DefT-01.md]
