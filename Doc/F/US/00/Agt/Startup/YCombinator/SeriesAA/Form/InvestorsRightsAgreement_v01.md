Doc.Ti={Co.Name.Full} Investors' Rights Agreement

0.Ti=</i>
0.0.sec=This Investors' Rights Agreement (this "<strong>Agreement</strong>") is made as of {AGT.Effective.YMD} by and among {Co.Name.Full}, a Delaware corporation (the "<strong>Company</strong>") and the persons and entities (each, an "<strong>Investor</strong>" and collectively, the "<strong>Investors</strong>") listed on <u>Exhibit A</u> hereto.  Unless otherwise defined herein, capitalized terms used in this Agreement have the meanings ascribed to them in <strong>Section 1</strong>.

0.1.sec=<strong>WHEREAS</strong>: The Investors are parties to the Series AA Preferred Stock Purchase Agreement of even date herewith, among the Company and the Investors listed on the Schedule of Investors thereto (the "<strong>Purchase Agreement</strong>"), and it is a condition to the closing of the sale of the Series AA Preferred Stock (the "<strong>Shares</strong>") that the Investors and the Company execute and deliver this Agreement.

0.00.sec=<strong>NOW, THEREFORE</strong>: In consideration of the mutual promises and covenants set forth herein, and other consideration, the receipt and adequacy of which is hereby acknowledged, the parties hereto agree as follows:

/Note=this is a bit fiddly.  Need to improve the Sec_0x approach.

0.=[Z/ol/1]

0.Sec={0.sec}

0.xlist={0.nlist}


1.Ti=Right of First Refusal

1.0.sec=The Company hereby grants to each Investor who owns at least {Cap.AA.Ro1R.Threshold.#} Shares or shares of the Company's Common Stock issued upon conversion of the Shares (the "<strong>Conversion Stock</strong>") (as presently constituted and subject to subsequent adjustments for stock splits, stock dividends, reverse stock splits and the like) (the "<strong>Significant</strong> <strong>Holders</strong>"), the right of first refusal to purchase its pro rata share of New Securities (as defined in this Section {1.1(a)}) which the Company may, from time to time, propose to sell and issue after the date of this Agreement.  A Significant Holder's pro rata share, for purposes of this right of first refusal, is equal to the ratio of (a) the number of shares of Common Stock owned by such Significant Holder immediately prior to the issuance of New Securities (assuming full conversion of the Shares and exercise of all outstanding convertible securities, rights, options and warrants, directly or indirectly, into Common Stock held by said Significant Holder) to (b) the total number of shares of Common Stock outstanding immediately prior to the issuance of New Securities (assuming full conversion of the Shares and exercise of all outstanding convertible securities, rights, options and warrants, directly or indirectly, held by all of the Significant Holders).


1.1.0.sec="<strong>New Securities</strong>" shall mean any capital stock (including Common Stock and/or Preferred Stock) of the Company whether now authorized or not, and rights, convertible securities, options or warrants to purchase such capital stock, and securities of any type whatsoever that are, or may become, exercisable or convertible into capital stock; <u>provided</u> that the term "<strong>New Securities</strong>" does not include:

1.1.1.sec=the Shares and the Conversion Stock

1.1.2.sec=up to {Cap.Common.Plan.Auth.#} (as adjusted for any stock dividends, combinations, stock splits, recapitalizations and the like) securities issued or issuable to officers, employees, directors, consultants, placement agents, and other service providers of the Company (or any subsidiary) pursuant to stock grants, option plans, purchase plans, agreements or other employee stock incentive programs or arrangements approved by the Board of Directors of the Company

1.1.3.sec=securities issued pursuant to the conversion or exercise of warrants or any outstanding convertible or exercisable securities as of this date of this Agreement

1.1.4.sec=securities issued or issuable as a dividend or distribution on Preferred Stock of the Company or pursuant to any event for which adjustment is made pursuant to paragraph {COI.3(d)}, {COI.3(e)} or {COI.3(f)} of the Certificate of Incorporation of the Company

1.1.5.sec=securities offered pursuant to a bona fide, firmly underwritten public offering pursuant to a registration statement filed under the Securities Act

1.1.6.sec=securities issued or issuable pursuant to the acquisition of another corporation by the Company by merger, purchase of substantially all of the assets or other reorganization or to a joint venture agreement, <u>provided</u>, that such issuances are approved by the Board of Directors of the Company

1.1.7.sec=securities issued or issuable to banks, equipment lessors or other financial institutions pursuant to a commercial leasing or debt financing transaction approved by the Board of Directors of the Company

1.1.8.sec=securities issued or issuable in connection with sponsored research, collaboration, technology license, development, OEM, marketing or other similar agreements or strategic partnerships approved by the Board of Directors of the Company

1.1.9.sec=securities issued to suppliers or third party service providers in connection with the provision of goods or services pursuant to transactions approved by the Board of Directors of the Company

1.1.10.sec=securities of the Company which are otherwise excluded by the affirmative unanimous vote of the Board of Directors of the Company

1.1.11.sec=any right, option or warrant to acquire any security convertible into the securities excluded from the definition of New Securities pursuant to subsections (i) through (x) above

1.1.=[Z/ol/s11]

1.1.xlist={1.1.alist}

1.1.secs={1.1.secs;and}

1.2.sec=In the event the Company proposes to undertake an issuance of New Securities, it shall give each Significant Holder written notice of its intention, describing the type of New Securities, and their price and the general terms upon which the Company proposes to issue the same.  Each Significant Holder shall have ten (10) calendar days after any such notice is mailed or delivered to agree to purchase such Holder's pro rata share of such New Securities for the price and upon the terms specified in the notice by giving written notice to the Company, in substantially the form attached hereto as <u>Schedule 1</u>, and stating therein the quantity of New Securities to be purchased.

1.3.sec=In the event the Significant Holders fail to exercise fully the right of first refusal within said ten (10) day period (the "<strong>Election</strong> <strong>Period</strong>"), the Company shall have ninety (90) days thereafter to sell or enter into an agreement (pursuant to which the sale of New Securities covered thereby shall be closed, if at all, within ninety (90) days from the date of said agreement) to sell that portion of the New Securities with respect to which the Significant Holders' right of first refusal option set forth in this Section {1.1} was not exercised, at a price and upon terms no more favorable to the purchasers thereof than specified in the Company's notice to Significant Holders delivered pursuant to {1.1(b).Xref}.  In the event the Company has not sold within such ninety (90) day period following the Election Period, or such ninety (90) day period following the date of said agreement, the Company shall not thereafter issue or sell any New Securities, without first again offering such securities to the Significant Holders in the manner provided in this {1.1.Xref}.

1.4.sec=The right of first refusal granted under this Agreement shall expire upon, and shall not be applicable to the first to occur of (x) the Company's Initial Public Offering or (y) five years after the date of this Agreement.

1.=[Z/ol/s4]

2.Ti=Covenants of the Company

2.0.sec=The Company hereby covenants and agrees, as follows:

2.1.Ti=Basic Financial Information

2.1.0.sec=Provided that the Company has prepared financial statements, the Company will furnish the following reports to each Investor{Threshold.Option.If}:

Threshold.Option.If=<strong><span style="background-color:#DDA0DD">Select Threshold.Option.If =  {InvRight.Info.Threshold.Shares } or remove Threshold.Option = { _empty } Threshold:</span></strong> {InvRight.Info.Threshold.Shares}

InvRight.Info.Threshold.Shares= who owns at least {InvRight.Info.Threshold.#} shares and/or Conversion Stock (as presently constituted and subject to subsequent adjustments for stock splits, stock dividends, reverse stock splits, and the like)

Note=missing capital letter in the original

2.1.1.sec=as soon as practicable after the end of each fiscal year of the Company, an unaudited balance sheet of the Company as at the end of such fiscal year, and unaudited statements of income and cash flows of the Company for such year, prepared in accordance with U.S. generally accepted accounting principles consistently applied.

2.1.2.sec=As soon as practicable after the end of the first, second and third quarterly accounting periods in each fiscal year of the Company, an unaudited balance sheet of the Company as of the end of each such quarterly period, and unaudited statements of income and cash flows of the Company for such period, prepared in accordance with U.S. generally accepted accounting principles consistently applied, subject to changes resulting from normal year-end audit adjustments.

2.1.=[Z/ol/s2]

2.1.xlist={2.1.alist}

2.2.Ti=Confidentiality

2.2.sec=Anything in this Agreement to the contrary notwithstanding, no Investor by reason of this Agreement shall have access to any trade secrets or classified information of the Company.  The Company shall not be required to comply with any information rights in respect of any Investor whom the Company reasonably determines to be a competitor or an officer, employee, director or holder of more than ten percent (10%) of a competitor.  Each Investor acknowledges that the information received by them pursuant to this Agreement may be confidential and for its use only, and it will not reproduce, disclose or disseminate such information to any other person (other than its employees or agents having a need to know the contents of such information, and its attorneys).

2.3.Ti=Termination of Covenants

2.3.sec=The covenants set forth in this Section 2 shall terminate and be of no further force and effect after the closing of the Company's Initial Public Offering.

2.=[Z/ol/s3]

3.Ti=Restrictions on Transfer

3.1.Ti=Restrictions on Transfer

3.1.1.sec=The holder of each certificate representing Securities (as defined below) (a "<strong>Holder</strong>") by acceptance thereof agrees to comply in all respects with the provisions of this Section {3.1}.  Each Holder agrees not to make any sale, assignment, transfer, pledge or other disposition of all or any portion of the Securities, or any beneficial interest therein, unless and until (i) the transferee thereof has agreed in writing for the benefit of the Company to take and hold such Securities subject to, and to be bound by, the terms and conditions set forth in this Agreement, including, without limitation, this Section {3.1} and Section {3.3}, except for transfers permitted under Section {3.1(b)}, and (ii) such Holder shall have given prior written notice to the Company of such Holder's intention to make such disposition and shall have furnished the Company with a detailed description of the manner and circumstances of the proposed disposition, and, if requested by the Company, such Holder shall have furnished the Company, at its expense, with an opinion of counsel, reasonably satisfactory to the Company.

3.1.2.sec=Permitted transfers include (i) a transfer not involving a change in beneficial ownership, or (ii) in transactions involving the distribution without consideration of Securities by any Holder to (x) a parent, subsidiary or other affiliate of Holder that is a corporation or (y) any of its partners, members or other equity owners, or retired partners, retired members or other equity owners, or to the estate of any of its partners, members or other equity owners or retired partners, retired members or other equity owners, or (iii) transfers in compliance with Rule 144(k), as long as the Company is furnished with satisfactory evidence of compliance with such Rule; <u>provided</u>, in each case, that the Holder thereof shall give written notice to the Company of such Holder's intention to effect such disposition and shall have furnished the Company with a detailed description of the manner and circumstances of the proposed disposition.

3.1.3.sec=Each certificate representing Securities shall (unless otherwise permitted by the provisions of this Agreement) be stamped or otherwise imprinted with a legend substantially similar to the following (in addition to any legend required under applicable state securities laws): {Legend.List}

Legend.List=<ul><li>{Securities.Legend}</li><li>{Transfer.Legend}</li></ul>

Securities.Legend=THE SECURITIES REPRESENTED HEREBY HAVE NOT BEEN REGISTERED UNDER THE SECURITIES ACT OF 1933, AS AMENDED (THE "<strong>ACT</strong>"), OR UNDER THE SECURITIES LAWS OF CERTAIN STATES. THESE SECURITIES MAY NOT BE OFFERED, SOLD OR OTHERWISE TRANSFERRED, PLEDGED OR HYPOTHECATED EXCEPT AS PERMITTED UNDER THE ACT AND APPLICABLE STATE SECURITIES LAWS PURSUANT TO REGISTRATION OR AN EXEMPTION THEREFROM. THE ISSUER OF THESE SECURITIES MAY REQUIRE AN OPINION OF COUNSEL REASONABLY SATISFACTORY TO THE ISSUER THAT SUCH OFFER, SALE OR TRANSFER, PLEDGE OR HYPOTHECATION OTHERWISE COMPLIES WITH THE ACT AND ANY APPLICABLE STATE SECURITIES LAWS.

Transfer.Legend=THE SHARES REPRESENTED BY THIS CERTIFICATE ARE SUBJECT TO RESTRICTIONS ON TRANSFERABILITY AND RESALE, INCLUDING A LOCK-UP PERIOD IN THE EVENT OF A PUBLIC OFFERING, AS SET FORTH IN AN INVESTORS' RIGHTS AGREEMENT, A COPY OF WHICH MAY BE OBTAINED AT THE PRINCIPAL OFFICE OF THE COMPANY.

3.1.4.sec=The first legend referring to federal and state securities laws identified in Section {3.1(c)} hereof stamped on a certificate evidencing the Securities and the stock transfer instructions and record notations with respect to such Securities shall be removed and the Company shall issue a certificate without such legend to the holder of such Securities if (i) such securities are registered under the Securities Act, or (ii) such holder provides the Company with an opinion of counsel reasonably acceptable to the Company to the effect that a public sale or transfer of such securities may be made without registration under the Securities Act, or (iii) such holder provides the Company with reasonable assurances, which may, at the option of the Company, include an opinion of counsel satisfactory to the Company, that such securities can be sold pursuant to Section (k) of Rule 144 under the Securities Act.

3.1.=[Z/ol/s4]

3.1.xlist={3.1.alist}


3.2.Ti=Rule 144 Reporting

3.2.0.sec=With a view to making available the benefits of certain rules and regulations of the Commission that may permit the sale of the Securities to the public without registration, the Company agrees to use its commercially reasonable efforts to:

3.2.1.sec=Make and keep public information regarding the Company available as those terms are understood and defined in Rule 144 under the Securities Act, at all times from and after ninety (90) days following the effective date of the first registration under the Securities Act filed by the Company for an offering of its securities to the general public

3.2.2.sec=File with the Commission in a timely manner all reports and other documents required of the Company under the Securities Act and the Exchange Act at any time after it has become subject to such reporting requirements

3.2.3.sec=So long as a Holder owns any Securities, furnish to the Holder forthwith upon written request a written statement by the Company as to its compliance with the reporting requirements of Rule 144 (at any time from and after ninety (90) days following the effective date of the first registration statement filed by the Company for an offering of its securities to the general public), and of the Securities Act and the Exchange Act (at any time after it has become subject to such reporting requirements), a copy of the most recent annual or quarterly report of the Company, and such other reports and documents so filed as a Holder may reasonably request in availing itself of any rule or regulation of the Commission allowing a Holder to sell any such securities without registration

3.2.=[Z/ol/s3]

3.2.secs={3.2.secs;and}

3.2.xlist={3.2.alist}

3.3.Ti=Market Stand-Off Agreement

3.3.sec=Each Holder hereby agrees that such Holder shall not sell or otherwise transfer, make any short sale of, grant any option for the purchase of, or enter into any hedging or similar transaction with the same economic effect as a sale, of any Common Stock (or other securities) of the Company held by such Holder (other than those included in the registration) during the one hundred eighty (180) day period following the effective date of a registration statement of the Company filed under the Securities Act (or such other period as may be requested by the Company or an underwriter to accommodate regulatory restrictions on (i) the publication or other distribution of research reports and (ii) analyst recommendations and opinions, including, but not limited to, the restrictions contained in NASD Rule 2711(f)(4) or NYSE Rule 472(f)(4), or any successor provisions or amendments thereto), provided that: all officers and directors of the Company and holders of at least one percent (1%) of the Company's voting securities are bound by and have entered into similar agreements. The obligations described in this Section {3.3} shall not apply to a registration relating solely to employee benefit plans on Form S-l or Form S-8 or similar forms that may be promulgated in the future, or a registration relating solely to a transaction on Form S-4 or similar forms that may be promulgated in the future.  The Company may impose stop-transfer instructions and may stamp each such certificate with the second legend set forth in Section {4.1(c)} hereof with respect to the shares of Common Stock (or other securities) subject to the foregoing restriction until the end of such one hundred eighty (180) day (or other) period.  Each Holder agrees to execute a market standoff agreement with said underwriters in customary form consistent with the provisions of this Section {3.3}.

3.=[Z/ol/3]

4.Ti=Definitions

4.0.sec=As used in this Agreement, the following terms shall have the meanings set forth below:

4.1.sec="<strong>Commission</strong>" shall mean the Securities and Exchange Commission or any other federal agency at the time administering the Securities Act.

4.2.sec="<strong>Exchange Act</strong>" shall mean the Securities Exchange Act of 1934, as amended, or any similar successor federal statute and the rules and regulations thereunder, all as the same shall be in effect from time to time. 

4.3.sec= "<strong>Initial Public Offering</strong>" shall mean the closing of the Company's first firm commitment underwritten public offering of the Company's Common Stock registered under the Securities Act.

4.4.sec="<strong>Rule 144</strong>" shall mean Rule 144 as promulgated by the Commission under the Securities Act, as such Rule may be amended from time to time, or any similar successor rule that may be promulgated by the Commission.

4.5.sec="<strong>Securities</strong>" shall mean (i) shares of Common Stock issued or issuable pursuant to the conversion of the Shares and (ii) any Common Stock issued as a dividend or other distribution with respect to or in exchange for or in replacement of the shares referenced in (i) above, required to bear the first legend set forth in Section {3.1(c)} hereof.

4.6.sec="<strong>Securities Act</strong>" shall mean the Securities Act of 1933, as amended, or any similar successor federal statute and the rules and regulations thereunder, all as the same shall be in effect from time to time.

4.=[Z/ol/s6]

5.Ti=Miscellaneous

5.1.Ti=Amendment

5.1.sec=Except as expressly provided herein, neither this Agreement nor any term hereof may be amended, waived, discharged or terminated other than by a written instrument referencing this Agreement and signed by the Company and the Holders holding a majority of the Common Stock issued or issuable upon conversion of the Shares issued pursuant to the Purchase Agreement (excluding any of such shares that have been sold to the public or pursuant to Rule 144); <u>provided</u>, <u>however</u>, that Investors purchasing shares of Series AA Preferred Stock in a Closing after the Initial Closing (each as defined in the Purchase Agreement) may become parties to this Agreement, by executing a counterpart of this Agreement without any amendment of this Agreement pursuant to this paragraph or any consent or approval of any other Holder.  Any such amendment, waiver, discharge or termination effected in accordance with this paragraph shall be binding upon each Holder and each future holder of all such securities of Holder.  Each Holder acknowledges that by the operation of this paragraph, the holders of a majority of the Common Stock issued or issuable upon conversion of the Shares issued pursuant to the Purchase Agreement (excluding any of such shares that have been sold to the public or pursuant to Rule 144) will have the right and power to diminish or eliminate all rights of such Holder under this Agreement.

5.2.Ti=Notices

5.2.0.sec=All notices and other communications required or permitted hereunder shall be in writing and shall be mailed by registered or certified mail, postage prepaid, sent by facsimile or electronic mail or otherwise delivered by hand or by messenger addressed:

5.2.1.sec=if to an Investor, at the Investor's address, facsimile number or electronic mail address as shown in the Company's records, as may be updated in accordance with the provisions hereof; or

5.2.2.sec=if to the Company, one copy should be sent to {Co.N,A}, {Co.Fax}, Attn: Chief Executive Officer, or at such other address as the Company shall have furnished to the Investors.

5.2.00.sec=Each such notice or other communication shall for all purposes of this Agreement be treated as effective or having been given when delivered if delivered personally, or, if sent by mail, at the earlier of its receipt or 72 hours after the same has been deposited in a regularly maintained receptacle for the deposit of the United States mail, addressed and mailed as aforesaid or, if sent by facsimile, upon confirmation of facsimile transfer or, if sent by electronic mail, upon confirmation of delivery when directed to the electronic mail address set forth on the Schedule of Investors.

5.2.=[Z/ol/s2]

5.2.xlist={5.2.alist}

5.3.Ti=Governing Law

5.3.sec=This Agreement shall be governed in all respects by the internal laws of {Dispute.Law.State.of}.

5.4.Ti=Successors and Assigns

5.4.sec=This Agreement, and any and all rights, duties and obligations hereunder, shall not be assigned, transferred, delegated or sublicensed by any Investor without the prior written consent of the Company.  Any attempt by an Investor without such permission to assign, transfer, delegate or sublicense any rights, duties or obligations that arise under this Agreement shall be void.  Subject to the foregoing and except as otherwise provided herein, the provisions of this Agreement shall inure to the benefit of, and be binding upon, the successors, assigns, heirs, executors and administrators of the parties hereto.

5.5.Ti=Entire Agreement

5.5.sec=This Agreement and the exhibits hereto constitute the full and entire understanding and agreement between the parties with regard to the subjects hereof.  No party hereto shall be liable or bound to any other party in any manner with regard to the subjects hereof or thereof by any warranties, representations or covenants except as specifically set forth herein.

5.6.Ti=Delays or Omissions

5.6.sec=Except as expressly provided herein, no delay or omission to exercise any right, power or remedy accruing to any party to this Agreement upon any breach or default of any other party under this Agreement shall impair any such right, power or remedy of such non-defaulting party, nor shall it be construed to be a waiver of any such breach or default, or an acquiescence therein, or of or in any similar breach or default thereafter occurring, nor shall any waiver of any single breach or default be deemed a waiver of any other breach or default theretofore or thereafter occurring.  Any waiver, permit, consent or approval of any kind or character on the part of any party of any breach or default under this Agreement, or any waiver on the part of any party of any provisions or conditions of this Agreement, must be in writing and shall be effective only to the extent specifically set forth in such writing.  All remedies, either under this Agreement or by law or otherwise afforded to any party to this Agreement, shall be cumulative and not alternative.

5.7.Ti=Severability

5.7.sec=If any provision of this Agreement becomes or is declared by a court of competent jurisdiction to be illegal, unenforceable or void, portions of such provision, or such provision in its entirety, to the extent necessary, shall be severed from this Agreement, and such court will replace such illegal, void or unenforceable provision of this Agreement with a valid and enforceable provision that will achieve, to the extent possible, the same economic, business and other purposes of the illegal, void or unenforceable provision.  The balance of this Agreement shall be enforceable in accordance with its terms.

5.8.Ti=Titles and Subtitles

5.8.sec=The titles and subtitles used in this Agreement are used for convenience only and are not to be considered in construing or interpreting this Agreement.  All references in this Agreement to sections, paragraphs and exhibits shall, unless otherwise provided, refer to sections and paragraphs hereof and exhibits attached hereto.

5.9.Ti=Counterparts

5.9.sec=This Agreement may be executed in any number of counterparts, each of which shall be enforceable against the parties that execute such counterparts, and all of which together shall constitute one instrument.

5.10.Ti=Telecopy Execution and Delivery

5.10.sec=A facsimile, telecopy or other reproduction of this Agreement may be executed by one or more parties hereto and delivered by such party by facsimile or any similar electronic transmission device pursuant to which the signature of or on behalf of such party can be seen.  Such execution and delivery shall be considered valid, binding and effective for all purposes.  At the request of any party hereto, all parties hereto agree to execute and deliver an original of this Agreement as well as any facsimile, telecopy or other reproduction hereof.

5.11.Ti=Termination Upon Change of Control

5.11.0.sec=Notwithstanding anything to the contrary herein, this Agreement (excluding any then-existing obligations) shall terminate upon:

5.11.1.sec=the acquisition of the Company by another entity by means of any transaction or series of related transactions to which the Company is party (including, without limitation, any stock acquisition, reorganization, merger or consolidation but excluding any sale of stock for capital raising purposes) other than a transaction or series of transactions in which the holders of the voting securities of the Company outstanding immediately prior to such transaction continue to retain (either by such voting securities remaining outstanding or by such voting securities being converted into voting securities of the surviving entity), as a result of shares in the Company held by such holders prior to such transaction, at least fifty percent (50%) of the total voting power represented by the voting securities of the Corporation or such surviving entity outstanding immediately after such transaction or series of transactions

5.11.2.sec=a sale, lease or other conveyance of all substantially all of the assets of the Company

5.11.=[Z/ol/s2]

5.11.xlist={5.11.alist}

5.11.secs={5.11.secs;or}


5.12.Ti=Conflict

5.12.sec=In the event of any conflict between the terms of this Agreement and the Company's Certificate of Incorporation or its Bylaws, the terms of the Company's Certificate of Incorporation or its Bylaws, as the case may be, will control.

5.=[Z/ol/12]

=[Z/ol/5]

Sec={Doc}

00.sec={Sign.Witness}<br><br>{US.Frame.Sign.Block}

Sign.Witness=IN WITNESS WHEREOF, the parties hereto have executed this Investors' Rights Agreement effective as of the day and year first above written.

US.Frame.Sign.Block={Co.US.Frame.Sign.Block} {Inv.1.US.Frame.Sign.Block}

Xnums=

1=1

1.1={1}.1

1.1(a)={1.1}(a)

1.1(b)={1.1}(b)

3=3

3.1=3.1

3.1(b)={3.3}(b)

3.1(c)={3.3}(c)

3.3={3}.3

4=4

4.1={4}.1

4.1(c)={4.1}(c)
