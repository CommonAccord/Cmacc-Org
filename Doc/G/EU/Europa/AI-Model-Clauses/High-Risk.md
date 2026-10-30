
r00t={Model.Root}

Claude=Did this work:

Model.Root=<div class="community">{Community}</div><h1>{Ti}</h1><p>{Version}</p>{Disclaimer.Sec}{Sec.A}{Sec.B}{Sec.C}{Sec.D}{Sec.E}{Sec.F}{Annex.A}{Annex.B}{Annex.C}{Annex.D}{Annex.E}{Annex.F}{Annex.G}{Annex.H}

Source=European Commission, Community of Practice on the Procurement of AI, "Model contractual clauses for the public procurement of High-Risk AI (MCC-AI-High-Risk)", Version February 2025, published 5 March 2025 on the Public Buyers Community platform.
Source.URL=https://public-buyers-community.ec.europa.eu/communities/procurement-ai/resources/updated-eu-ai-model-contractual-clauses

Community=Procurement of AI Community
MCC=MCC-AI-High-Risk
MCC.Ti={MCC}
Risk.Level=High-Risk AI
Ti=Model contractual clauses for the public procurement of {Risk.Level} (‘{MCC.Ti}’)
Version=Version February 2025 – Procurement of {Risk.Level}
Opt=&lt;Optional&gt;

Disclaimer.Sec=<div class="disclaimer"><h2>DISCLAIMER</h2><p>{Disclaimer.1}</p><p>{Disclaimer.2}</p><p>{Disclaimer.3}</p></div>
Disclaimer.1=This working document is created by the European Commission to support the Community of Practice on the Procurement of AI to guide public administrations in procuring AI solutions. It is a working document in progress and does not reflect an official position of the European Commission.
Disclaimer.2=Actors that decide to make use of this working document carry full responsibility for its use in public procurement.
Disclaimer.3=These Model Clauses for {Risk.Level} are without the prejudice to the requirements stemming from the AI Act.

Def.N=1
Risk.N=2
Data.N=3
Doc.N=4
Rec.N=5
Transp.N=6
HO.N=7
Acc.N=8
Comply.N=9
QMS.N=10
Conf.N=11
FRIA.N=12
Corr.N=13
Explain.N=14
RightsPO.N=15
RightsSup.N=16
Handover.N=17
Indem.N=18
Register.N=19
Audit.N=20
Costs.N=21

Sec.A=<h2>Section A – {Sec.A.Ti}</h2>{Sec.A.List}
Sec.A.Ti=Definitions
Sec.A.List={Def.Sec}

Sec.B=<h2>Section B – {Sec.B.Ti}</h2>{Sec.B.List}
Sec.B.Ti=Essential requirements in relation to the AI-system
Sec.B.List={Risk.Sec}{Data.Sec}{Doc.Sec}{Rec.Sec}{Transp.Sec}{HO.Sec}{Acc.Sec}

Sec.C=<h2>Section C – {Sec.C.Ti}</h2>{Sec.C.List}
Sec.C.Ti=Obligations of the Supplier in relation to the AI System
Sec.C.List={Comply.Sec}{QMS.Sec}{Conf.Sec}{FRIA.Sec}{Corr.Sec}{Explain.Sec}

Sec.D=<h2>Section {Sec.D.Letter} – {Sec.D.Ti}</h2>{Sec.D.List}
Sec.D.Letter=D
Sec.D.Ti=Rights to use the Data Sets
Sec.D.List={RightsPO.Sec}{RightsSup.Sec}{Handover.Sec}{Indem.Sec}

Sec.E=<h2>Section E – {Sec.E.Ti}</h2>{Sec.E.List}
Sec.E.Ti=AI register and audit
Sec.E.List={Register.Sec}{Audit.Sec}

Sec.F=<h2>Section F – {Sec.F.Ti}</h2>{Sec.F.List}
Sec.F.Ti=Costs
Sec.F.List={Costs.Sec}

Def.Sec=<p>{Def.N}. {Def.Intro}</p><ul><li>{Def.Agreement}</li><li>{Def.AISystem}</li><li>{Def.MCC}</li><li>{Def.PODS}</li><li>{Def.DS}</li><li>{Def.Delivery}</li><li>{Def.IntendedPurpose}</li><li>{Def.RFM}</li><li>{Def.SubMod}</li><li>{Def.Supplier}</li><li>{Def.SupDS}</li></ul>
Def.Intro=Definitions: capitalised terms used in these {MCC} will have the meaning as defined in this article;
Def.Agreement=Agreement: the entire agreement of which the {MCC}, as a schedule, are an integral part;
Def.AISystem=AI System: the machine-based system(s) that is/are designed to operate with varying levels of autonomy and that may exhibit adaptiveness after deployment, and that, for explicit or implicit objectives, infers/infer, from the input received, how to generate outputs such as predictions, content, recommendations or decisions that can influence physical or virtual environments, further specified and described in Annex A, including any new versions thereof;
Def.MCC={MCC}: these contractual clauses for the public procurement of High-Risk AI by public organisations;
Def.PODS=Public Organisation Data Sets: the Data Sets (or parts of) (i) provided by the Public Organisation to the Supplier under the Agreement or (ii) to be created or collected as part of the Agreement, including any modified or extended versions of the Data Sets referred to under (i) and (ii) (for example due to annotation, labelling, cleaning, enrichment or aggregation);
Def.DS=Data Sets: all data sets used in the development of the AI System, including the data set or data sets as described in Annex B;
Def.Delivery=Delivery: the time at which the Supplier informs the Public Organisation that the AI System satisfies all agreed conditions and is ready for use;
Def.IntendedPurpose=Intended Purpose: the use for which an AI System is intended by the Public Organisation, including the specific context and conditions of use, as specified in Annex B, the information supplied by the Supplier in the instructions for use, promotional or sales materials and statements, as well as in the technical documentation;
Def.RFM=Reasonably Foreseeable Misuse: the use of the AI System in a way that is not in accordance with its Intended Purpose, but which may result from reasonably foreseeable human behaviour or interaction with other systems, including other AI systems;
Def.SubMod=Substantial Modification: a change to the AI System after the Delivery which is not foreseen or planned in the initial conformity assessment carried out by the Supplier and as a result of which the compliance of the AI System with the requirements set out in these {MCC} is affected (without the prejudice to Chapter III Section 2 of the AI Act) or results in a modification to the Intended Purpose for which the AI system has been assessed;
Def.Supplier=Supplier: the natural or legal person, public authority, agency or other body that supplies the AI System to the Public Organisation pursuant to the Agreement;
Def.SupDS=Supplier Data Sets and Third-Party Data Sets: the Data Sets (or parts of) that do not qualify as Public Organisation Data Sets.

Risk.Ti=Risk management system
Risk.Sec=<h3>{Risk.N}. {Risk.Ti}</h3><p>{Risk.N}.1 {Risk.1}</p><p>{Risk.N}.2 {Risk.2}</p><p class="sub">(a) {Risk.2.a}</p><p class="sub">(b) {Risk.2.b}</p><p class="sub">(c) {Risk.2.c}</p><p class="sub">(d) {Risk.2.d}</p><p>{Risk.N}.3 {Risk.3}</p><p>{Risk.N}.4 {Risk.4}</p><p>{Risk.N}.5 {Risk.5}</p><p>{Risk.N}.6 {Risk.6}</p><p class="sub">(a) {Risk.6.a}</p><p class="sub">(b) {Risk.6.b}</p><p class="sub">(c) {Risk.6.c}</p><p>{Risk.N}.7 {Risk.7}</p><p>{Risk.N}.8 {Risk.8}</p><p>{Risk.N}.9 {Risk.9}</p><p>{Risk.N}.10 {Risk.10}</p><p class="sub">(a) {Risk.10.a}</p><p class="sub">(b) {Risk.10.b}</p><p class="sub">(c) {Risk.10.c}</p><p>{Risk.N}.11 {Risk.11}</p><p>{Risk.N}.12 {Risk.12}</p>
Risk.1=The Supplier ensures that, prior to the Delivery of the AI System, a risk management system shall be established, implemented, documented and maintained in relation to the AI System.
Risk.2=The risk management system shall at least comprise the following steps:
Risk.2.a=identification, estimation and evaluation of the known and reasonably foreseeable risks that the AI System can pose to health, safety or fundamental rights when the AI System is used in accordance with the Intended Purpose;
Risk.2.b=the estimation and evaluation of the risks that may emerge when the AI System is used in accordance with the Intended Purpose, and under conditions of Reasonably Foreseeable Misuse;
Risk.2.c=evaluation of other possibly arising risks, based on the analysis of data gathered from the post-market monitoring system;
Risk.2.d=adoption of appropriate and targeted risk management measures designed to address the risks identified pursuant to point (a) of this paragraph in accordance with the provisions of the following paragraphs.
Risk.3=The risks referred to in this article shall concern only those which may be reasonably mitigated or eliminated through the development or design of the AI System or the provision of adequate technical information.
Risk.4=The risks referred to in this article shall give due consideration to the effects and possible interaction resulting from the combined application of the requirements set out in Section B, with a view to minimising risks more effectively while achieving an appropriate balance in implementing the measures to fulfil those requirements.
Risk.5=The risk management measures referred to in paragraph {Risk.N}.2, point (d) shall be such that relevant residual risks associated with each hazard as well as the overall residual risk of the AI system is judged to be acceptable by the Supplier, provided that the AI System is used in accordance with the Intended Purpose or under conditions of Reasonably Foreseeable Misuse.
Risk.6=In identifying the most appropriate risk management measures referred to in paragraph {Risk.N}.2, point (d), the following shall be ensured:
Risk.6.a=elimination or reduction of risks identified and evaluated pursuant to paragraph {Risk.N}.2 in as far as technically feasible through adequate design and development of the AI System;
Risk.6.b=where appropriate, implementation of adequate mitigation and control measures addressing risks that cannot be eliminated;
Risk.6.c=provision of adequate information to the Public Organisation and if applicable, training to deployers.
Risk.7=The Supplier ensures that, prior to the Delivery of the AI System, the AI System is tested in order to identify whether the AI System complies with the {MCC} and whether the risk management measures referred to in paragraph {Risk.N}.2, point (d) are effective in light of the Intended Purpose and Reasonably Foreseeable Misuse. If requested by the Public Organisation, the Supplier is obliged to test the AI System in the environment of the Public Organisation.
Risk.8=The testing of the AI System shall be performed, as appropriate, at any time throughout the development process, and, in any event, prior to the Delivery. Testing shall be carried out against prior defined metrics and probabilistic thresholds that are appropriate to the Intended Purpose of the AI System.
Risk.9=All risks identified, measures taken and tests performed in the context of compliance with this article must be documented by the Supplier. The Supplier must make this documentation available to the Public Organisation at least at the time of the Delivery of the AI System. This documentation can be part of the technical documentation and/or instructions for use.
Risk.10=The risk management system shall be understood as a continuous and iterative process planned and run throughout the entire duration of the Agreement. After the Delivery of the AI System the Supplier must therefore:
Risk.10.a=regularly review and update the risk management process to ensure its continuing effectiveness;
Risk.10.b=keep the documentation described in article {Risk.N}.7 up to date; and
Risk.10.c=make every new version of the documentation described in article {Risk.N}.7 available to the Public Organisation without delay.
Risk.11=If reasonably required for the proper execution of the risk management system by the Supplier, the Public Organisation will provide the Supplier, on request, with information insofar as this is not of a confidential nature.
Risk.12={Opt} If the Public Organisation’s use of the AI System continues beyond the term of the Agreement, at the end of the term of the Agreement, the Supplier shall provide the Public Organisation with the information necessary to maintain the risk management system by itself.

Data.Ti=Data and data governance
Data.Note=&lt;Article {Data.N} is only relevant for AI Systems which make use of techniques involving the training of models with data. Article {Data.N} presupposes the Supplier (or its subcontractors) has (have) full access to the Data Sets. If the Data Sets are exclusively held by the Public Organisation, it is necessary to make other arrangements.&gt;
Data.Sec=<h3>{Data.N}. {Data.Ti}</h3><p class="note">{Data.Note}</p><p>{Data.N}.1 {Data.1}</p><p class="sub">(a) {Data.1.a}</p><p class="sub">(b) {Data.1.b}</p><p class="sub">(c) {Data.1.c}</p><p class="sub">(d) {Data.1.d}</p><p class="sub">(e) {Data.1.e}</p><p class="sub">(f) {Data.1.f}</p><p class="sub">(g) {Data.1.g}</p><p class="sub">(h) {Data.1.h}</p><p>{Data.N}.2 {Data.2}</p><p>{Data.N}.3 {Data.3}</p><p>{Data.N}.4 {Data.4}</p>
Data.1=The Supplier ensures that the Data Sets used in the development of the AI System, including training, validation and testing, have been and shall be subject to data governance and management practices appropriate for the Intended Purpose of the AI System. Those measures shall concern in particular:
Data.1.a=the relevant design choices;
Data.1.b=data collection processes and the origin of data, and in the case of personal data, the original purpose of the data collection;
Data.1.c=relevant data preparation for processing operations, such as annotation, labelling, cleaning, updating, enrichment and aggregation;
Data.1.d=the formulation of assumptions, with respect to the information that the data are supposed to measure and represent;
Data.1.e=an assessment of the availability, quantity and suitability of the data sets that are needed;
Data.1.f=examination in view of possible biases that are likely to affect the health and safety of persons, have a negative impact on fundamental rights or lead to discrimination prohibited under Union law, especially where data outputs influence inputs for future operations;
Data.1.g=appropriate measures to detect, prevent and mitigate possible biases identified according to point (f);
Data.1.h=the identification of relevant data gaps or shortcomings that prevent compliance with these {MCC}, and how those gaps and shortcomings can be addressed.
Data.2=The Supplier ensures that the Data Sets used in the development of the AI System are relevant, sufficiently representative and, to the best extent possible, free of errors and complete in view of the Intended Purpose. The Supplier ensures that Data Sets have the appropriate statistical properties, including, where applicable, as regards the persons or groups of persons in relation to whom the AI System is intended to be used. These characteristics of the Data Sets shall be met at the level of individual data sets or a combination thereof.
Data.3=The Supplier ensures that the Data Sets used in the development of the AI System considered, to the extent required by the Intended Purpose or Reasonably Foreseeable Misuse, the characteristics or elements that are particular to the specific geographical, contextual, behavioural or functional setting within which the AI System is intended to be used.
Data.4=The obligations under this article apply not only to the development of the AI System prior to Delivery, but also to any use of Data Sets by the Supplier that may affect the functioning of the AI System at any other time during the term of the Agreement.

Doc.Ti=Technical documentation and instructions for use
Doc.Sec=<h3>{Doc.N}. {Doc.Ti}</h3><p>{Doc.N}.1 {Doc.1}</p><p>{Doc.N}.2 {Doc.2}</p><p>{Doc.N}.3 {Doc.3}</p><p>{Doc.N}.4 {Doc.4}</p><p>{Doc.N}.5 {Doc.5}</p><p>{Doc.N}.6 {Doc.6}</p>
Doc.1=The Delivery of the AI System by the Supplier includes the handover of the technical documentation and instructions for use.
Doc.2=The technical documentation must enable the Public Organisation or a third party to assess the compliance of the AI System with the provisions of the requirements set in these {MCC} and at least satisfy the conditions described in Annex C.
Doc.3=The instructions for use shall include concise, complete, correct and clear information that is relevant, accessible and comprehensible to the Public Organisation. The instructions for use must at least satisfy the conditions described in Annex D.
Doc.4=The Supplier must update this documentation at least with every Substantial Modification during the term of the Agreement and subsequently make it available to the Public Organisation.
Doc.5={Opt} The technical documentation and instructions for use must be drawn up in English.
Doc.6={Opt} The Public Organisation has the right to make copies of the technical documentation and instructions for use to the extent necessary for internal use within the organisation of the Public Organisation, without prejudice to the provisions of article {Transp.N} and article {Explain.N}.

Rec.Ti=Record-keeping
Rec.Sec=<h3>{Rec.N}. {Rec.Ti}</h3><p>{Rec.N}.1 {Rec.1}</p><p>{Rec.N}.2 {Rec.2}</p><p class="sub">(a) {Rec.2.a}</p><p class="sub">(b) {Rec.2.b}</p><p>{Rec.N}.3 {Rec.3}</p><p>{Rec.N}.4 {Rec.4}</p>
Rec.1=The Supplier ensures that the AI System shall technically allow for the automatic recording of events ('logs') over the lifetime of the AI System.
Rec.2=The logging capabilities shall ensure a level of traceability of the AI System that is appropriate to the Intended Purpose of the system and Reasonably Foreseeable Misuse. In particular, they shall enable the recording of events relevant for the identification of situations that may:
Rec.2.a=result in the AI System presenting a risk to the health or safety or to the protection of fundamental rights of persons; or
Rec.2.b=lead to a Substantial Modification.
Rec.3={Opt} The Supplier will allow the Public Organisation to access the logs automatically generated by the AI System on a real time basis.
Rec.4=The Supplier shall keep the logs automatically generated by the AI System, to the extent such logs are under its control based on the Agreement, for the duration of the Agreement. At the end of the term of the Agreement, the Supplier will provide these logs to the Public Organisation without delay.

Transp.Ti=Transparency of the AI System
Transp.Sec=<h3>{Transp.N}. {Transp.Ti}</h3><p>{Transp.N}.1 {Transp.1}</p><p>{Transp.N}.2 {Transp.Annex}</p>
Transp.1=The Supplier ensures that the AI System has been and shall be designed and developed in such a way that the operation of the AI System is sufficiently transparent to enable the Public Organisation to interpret the system’s output and use it appropriately.
Transp.Annex=To ensure appropriate transparency, before the Delivery of the AI System, at least the technical and organisational measures described in Annex E shall be implemented by the Supplier.

HO.Ti=Human oversight
HO.Sec=<h3>{HO.N}. {HO.Ti}</h3><p>{HO.N}.1 {HO.1}</p><p>{HO.N}.2 {HO.2}</p><p>{HO.N}.3 {HO.3}</p><p>{HO.N}.4 {HO.4}</p><p class="sub">(a) {HO.4.a}</p><p class="sub">(b) {HO.4.b}</p><p class="sub">(c) {HO.4.c}</p><p class="sub">(d) {HO.4.d}</p><p class="sub">(e) {HO.4.e}</p><p>{HO.N}.5 {HO.5}</p>
HO.1=The Supplier ensures that the AI System has been and shall be designed and developed in such a way, including with appropriate human-machine interface tools, that it can be effectively overseen by natural persons during the period in which it is in use.
HO.2=Human oversight shall aim to prevent or minimise the risks to health, safety or fundamental rights that may emerge when an AI system is used in accordance with its intended purpose or under conditions of reasonably foreseeable misuse, where such risks persist despite the application of other requirements set out in this Section.
HO.3=The oversight measures shall be commensurate with the risks, level of autonomy and context of use of the AI system, and shall be ensured through either one or both of the following types of measures.
HO.4=The Supplier ensures that, prior to the Delivery, appropriate measures shall be embedded in the AI System and taken to ensure human oversight. These measures shall ensure that the natural persons, to whom human oversight is assigned, are enabled as appropriate and proportionate:
HO.4.a=to properly understand the relevant capacities and limitations of the AI System and to be able to duly monitor its operation, including in view of detecting and addressing anomalies, dysfunctions and unexpected performance;
HO.4.b=to remain aware of the possible tendency of automatically relying or over-relying on the output produced by the AI System ('automation bias'), in particular, if the AI System is used to provide information or recommendations for decisions to be taken by natural persons;
HO.4.c=to correctly interpret the AI System's output, taking into account, for example, in particular the characteristics of the system and the interpretation tools and methods available;
HO.4.d=to decide, in any particular situation, not to use the AI System or otherwise disregard, override or reverse the output of the AI System;
HO.4.e=to intervene on the operation of the AI System or interrupt the system through a ‘stop’ button or a similar procedure that allows the system to come to a halt in a safe state.
HO.5={Opt} To ensure appropriate human oversight, the Supplier shall at least implement the technical and organisational measures described in Annex F before the Delivery of the AI System.

Acc.Ti=Accuracy, robustness and cybersecurity
Acc.Sec=<h3>{Acc.N}. {Acc.Ti}</h3><p>{Acc.N}.1 {Acc.1}</p><p>{Acc.N}.2 {Acc.2}</p><p>{Acc.N}.3 {Acc.3}</p><p>{Acc.N}.4 {Acc.4}</p>
Acc.1=The Supplier ensures that the AI System has been and shall be designed and developed in such a way that it achieves an appropriate level of accuracy, robustness, safety and cybersecurity, and perform consistently in those respects.
Acc.2=The levels of accuracy and the relevant accuracy metrics of the AI System are described in Annex G.
Acc.3=To ensure an appropriate level of robustness, safety and cybersecurity, the Supplier shall at least implement the technical and organisational measures described in Annex H before the Delivery of the AI System.
Acc.4=This requirement is without the prejudice to the requirements stemming from Article 15 of the AI Act.

Comply.Ti=Compliance with Section B
Comply.Sec=<h3>{Comply.N}. {Comply.Ti}</h3><p>{Comply.Text}</p>
Comply.Text=The Supplier must ensure that, from the Delivery of the AI System until the end of the term of the Agreement, the AI System complies with the requirements established in Section B of these {MCC}.

QMS.Ti=Quality management system
QMS.Sec=<h3>{QMS.N}. {QMS.Ti}</h3><p>{QMS.N}.1 {QMS.1}</p><p>{QMS.N}.2 {QMS.2}</p><p class="sub">(a) {QMS.2.a}</p><p class="sub">(b) {QMS.2.b}</p><p class="sub">(c) {QMS.2.c}</p><p class="sub">(d) {QMS.2.d}</p><p class="sub">(e) {QMS.2.e}</p><p class="sub">(f) {QMS.2.f}</p><p class="sub">(g) {QMS.2.g}</p><p class="sub">(h) {QMS.2.h}</p><p class="sub">(i) {QMS.2.i}</p><p class="sub">(j) {QMS.2.j}</p><p class="sub">(k) {QMS.2.k}</p><p class="sub">(l) {QMS.2.l}</p><p>{QMS.N}.3 {QMS.3}</p>
QMS.1=Before the Delivery of the AI System, the Supplier shall put a quality management system in place that ensures compliance with these {MCC}.
QMS.2=The quality management system shall be documented in a systematic and orderly manner in the form of written policies, procedures and instructions, and shall include at least the following aspects:
QMS.2.a=a strategy for regulatory compliance;
QMS.2.b=techniques, procedures and systematic actions to be used for the design, design control and design verification of the AI System;
QMS.2.c=techniques, procedures and systematic actions to be used for the development, quality control and quality assurance of the AI System;
QMS.2.d=examination, test and validation procedures to be carried out before, during and after the development of the AI System, and the frequency with which they have to be carried out;
QMS.2.e=technical specifications, including standards, to be applied and, where the relevant harmonised standards are not applied in full or do not cover all of the relevant requirements, the means to be used to ensure that the AI System complies with the requirements set out in Section B of these {MCC};
QMS.2.f=systems and procedures for data management, including data collection, data acquisition, data analysis, data labelling, data storage, data filtration, data mining, data aggregation, data retention and any other operation regarding the data that is performed before the Delivery of the AI System;
QMS.2.g=the risk management system referred to in article {Risk.N};
QMS.2.h=procedures related to the reporting of serious incidents;
QMS.2.i=the handling of communication with national competent authorities, other relevant authorities, including those providing or supporting the access to data, notified bodies, other operators, customers or other interested parties;
QMS.2.j=systems and procedures for record keeping of all relevant documentation and information;
QMS.2.k=resource management, including security of supply related measures;
QMS.2.l=an accountability framework setting out the responsibilities of the management and other staff regarding all aspects listed in this paragraph.
QMS.3=During the term of the Agreement, the Supplier must keep the documentation concerning the quality management system available. On first request of the Public Organisation, the Supplier will hand over the most recent version of the documentation concerning the quality management system to the Public Organisation.

Conf.Ti=Conformity assessment
Conf.Sec=<h3>{Conf.N}. {Conf.Ti}</h3><p>{Conf.N}.1 {Conf.1}</p><p class="sub">(a) {Conf.1.a}</p><p class="sub">(b) {Conf.1.b}</p><p class="sub">(c) {Conf.1.c}</p><p>{Conf.N}.2 {Conf.2}</p>
Conf.1=The Supplier shall ensure that the AI System undergoes the following conformity assessment procedure prior to the Delivery of the AI System:
Conf.1.a=The Supplier verifies that the established quality management system is following the requirements of article {QMS.N}.
Conf.1.b=The Supplier examines the information contained in the technical documentation to assess the compliance of the AI System with the relevant essential requirements set out in Section B of these {MCC}.
Conf.1.c=The Supplier also verifies that the design and development process of the AI System is consistent with the technical documentation.
Conf.2=The Supplier ensures that the AI System shall undergo a new conformity assessment procedure whenever the AI System is Substantially Modified by the Supplier during the term of the Agreement.

FRIA.Ti=Fundamental rights impact assessment
FRIA.Head={Opt} {FRIA.Ti}
FRIA.Para={Opt} {FRIA.Text}
FRIA.Sec=<h3>{FRIA.N}. {FRIA.Head}</h3><p>{FRIA.Para}</p>
FRIA.Text=On first request of the Public Organisation, the Supplier shall cooperate in the Public Organisation’s performance of an assessment of the impact on fundamental rights that the use of the AI System may produce.

Corr.Ti=Corrective actions
Corr.Sec=<h3>{Corr.N}. {Corr.Ti}</h3><p>{Corr.Text}</p>
Corr.Text=If during the term of the agreement the Supplier considers or has reason to consider that the AI System is not in conformity with these {MCC}, whether in response to a comment by the Public Organisation or not, it shall immediately take the necessary corrective actions to bring the system into conformity. The Supplier shall inform the Public Organisation accordingly.

Explain.Ti=Obligation to an explanation of individual decision-making
Explain.Head={Opt} {Explain.Ti}
Explain.1.Para={Opt} {Explain.1}
Explain.2.Para={Opt} {Explain.2}
Explain.Sec=<h3>{Explain.N}. {Explain.Head}</h3><p>{Explain.N}.1 {Explain.1.Para}</p><p>{Explain.N}.2 {Explain.2.Para}</p><p>{Explain.N}.3 {Opt} {Explain.3}</p>
Explain.1=In addition to the obligations described in Article {Transp.N}, the Supplier is obliged to assist the Public Organisation at the Public Organisation's first request in providing a clear and meaningful explanation of the role of the AI system in the decision-making procedure. This meaningful explanation should particularly (but not exclusively) provide insight in the main elements of the decision(s) taken to any affected person who is subject to Public Organisation decision(s) based on the output of the AI System.
Explain.2=The obligation as described in article {Explain.N}.1 comprises the provision to the Public Organisation of all the technical and other information required in order to explain how the AI System produced a particular output and to offer the affected persons the opportunity to verify the way in which the AI System produced a particular output. The Supplier hereby grants the Public Organisation the right to use, share and disclose this information, if and to the extent necessary, to inform the affected persons accordingly.
Explain.3=The obligations referred to in article {Explain.N}.1 and article {Explain.N}.2 include the source code of the AI System, the technical specifications used in developing the AI System, the Data Sets, technical information on how the Data Sets used in developing the AI System were obtained and edited, information on the method of development used and the development process undertaken, substantiation of the choice for a particular model and its parameters, and information on the performance of the AI System.

RightsPO.Ti=Rights to Public Organisation Data Sets
RightsPO.Sec=<h3>{RightsPO.N}. {RightsPO.Ti}</h3><p>{RightsPO.N}.1 {RightsPO.1}</p><p>{RightsPO.N}.2 {RightsPO.2}</p><p>{RightsPO.N}.3 {RightsPO.3}</p>
RightsPO.1=All rights, including any intellectual property right, relating to Publication Organisation Data Sets will accrue to the Public Organisation or a third party designated as such by the Public Organisation.
RightsPO.2=The Supplier is not entitled to use Publication Organisation Data Sets for any purpose other than the performance of the Agreement, except as otherwise provided in Annex B.
RightsPO.3=On first request of the Public Organisation, the Supplier must destroy Publication Organisation Data Sets, except as otherwise provided in Annex B. If the Public Organisation so demands, the Supplier must provide feasible evidence of the destruction of Publication Organisation Data Sets.

RightsSup.Ti=Rights to Supplier Data Sets and Third-Party Data Sets
RightsSup.Sec=<h3>{RightsSup.N}. {RightsSup.Ti}</h3><p>{RightsSup.N}.1 {RightsSup.1}</p><p>{RightsSup.N}.2 {RightsSup.2}</p><p>{RightsSup.N}.3 {RightsSup.3}</p>
RightsSup.1=All rights, including any intellectual property right, relating to Supplier Data Sets and Third-Party Data sets will accrue to the Supplier or a third party.
RightsSup.2=The Supplier grants the Public Organisation a non-exclusive right to use Supplier Data Sets and Third-Party Data Sets that is in any event sufficient for performance of the provisions of the Agreement, including the {MCC}, except as otherwise provided in Annex B.
RightsSup.3={Opt} The right of use described in article {RightsSup.N}.2 includes the right to use Supplier Data Sets and Third-Party Sets for the further development of the AI System, including any new versions thereof, by the Public Organisation or a third party.

Handover.Ti=Handover of the Data Sets
Handover.Sec=<h3>{Handover.N}. {Handover.Ti}</h3><p>{Handover.N}.1 {Handover.1}</p><p>{Handover.N}.2 {Handover.2}</p><p>{Handover.N}.3 {Handover.3}</p>
Handover.1=On first request of the Public Organisation, the Supplier will hand over the most recent version of Public Organisation Data Sets to the Public Organisation.
Handover.2=On first request of the Public Organisation, the Supplier will hand over the most recent version of the Supplier Data Sets and Third-Party Data Sets to the Public Organisation, except as otherwise provided in Annex B.
Handover.3=The Data Sets must be handed over to the Public Organisation by the Supplier in a common file format to be designated by the Public Organisation. {Opt} The Data Sets will be returned as follows: [file format].

Indem.Ti=Indemnifications
Indem.Sec=<h3>{Indem.N}. {Indem.Ti}</h3><p>{Indem.N}.1 {Indem.1}</p><p>{Indem.N}.2 {Indem.2}</p>
Indem.1=The Supplier shall indemnify the Public Organisation from all claims brought by third parties, including supervisors, arising out of any infringement of intellectual property rights, data protection rights or equivalent rights resulting from the use of the AI System, the Supplier Data Sets and/or Third Party Data Sets by the Public Organisation.
Indem.2=The Public Organisation shall indemnify the Supplier from all claims brought by third parties, including supervisors, arising out of any infringement of their intellectual property rights, privacy rights or equivalent rights resulting from the use of the Public Organisation Data Sets.

Register.Ti=AI register
Register.Sec=<h3>{Register.N}. {Opt} {Register.Ti}</h3><p>{Register.N}.1 {Register.1}</p><p>{Register.N}.2 {Register.2}</p><p>{Register.N}.3 {Register.3}</p>
Register.1=At the Public Organisation's first request, the Supplier will provide the Public Organisation with the most recent version of the information described in Annex C and Annex D.
Register.2=The Public Organisation will be entitled to share the information described in article {Register.N}.1 with third parties and to disclose it, for example in a register for AI Systems.
Register.3=If the Public Organisation so demands, the Supplier will assist in registering the AI Systems in any relevant register.

Audit.Ti=Compliance and audit
Audit.Sec=<h3>{Audit.N}. {Audit.Ti}</h3><p>{Audit.N}.1 {Audit.1}</p><p>{Audit.N}.2 {Audit.2}</p><p>{Audit.N}.3 {Audit.3}</p><p>{Audit.N}.4 {Audit.4}</p><p>{Audit.N}.5 {Audit.5}</p><p>{Audit.N}.6 {Audit.6}</p><p>{Audit.N}.7 {Audit.7}</p>
Audit.1=At first request of the Public Organisation, the Suppliers must make available to the Public Organisation all information necessary to demonstrate compliance with these {MCC}.
Audit.2=The Supplier is obliged to cooperate in an audit or other type of inspection to be carried out by or on behalf of the Public Organisation to assess whether the Supplier complies with its obligations laid down in these {MCC} at all times. Such cooperation will include providing all information required by the Public Organisation, providing an insight into the risk management system implemented, making Supplier staff available for interviews and providing access to the locations of the Supplier.
Audit.3=The Public Organisation will prepare, or cause the preparation of, a report in which the conclusions of the audit are recorded. In the report, the Public Organisation will record the extent to which the Supplier complies with the obligations under the Agreement. If the Public Organisation establishes that the Supplier does not comply with the obligations under this article, the Supplier will be obliged to remedy the defects identified by the Public Organisation within the reasonable term set by the Public Organisation in the report. If the Supplier fails to remedy the defects identified by the Public Organisation within the term set in the report for remedying such defects, the Supplier will be in default by operation of law.
Audit.4=The Public Organisation will be entitled to publish the conclusions of the report referred to in article {Audit.N}.3.
Audit.5=The Public Organisation will be entitled to perform, or cause the performance of, an audit once per calendar year or in relation to any Substantial Modification.
Audit.6=The Public Organisation may decide to have all or part of the audit performed by an independent auditor.
Audit.7=The costs of the auditor to be engaged by the Public Organisation, if any, will be paid by the Public Organisation. The Public Organisation will pay the Supplier a reasonable fee for any costs to be incurred by the Supplier in the context of the audit. In no event will a dispute about the amount of such fee give the Supplier the right to suspend its obligations under these {MCC}. No such fee will be owed by the Public Organisation if the audit reveals that the Supplier has failed to perform its obligations under these {MCC}.

Costs.Ti=Costs
Costs.Sec=<h3>{Costs.N}. {Costs.Ti}</h3><p>{Costs.Text}</p>
Costs.Text=Unless agreed otherwise between the parties or expressly provided otherwise in these {MCC}, no additional fee will be owed to the Supplier by the Public Organisation in consideration of the work ensuing from these {MCC}.

Annex.A=<h2>Annex A – The AI System and the Intended Purpose</h2><h3>Description of the AI System</h3><p>{Annex.A.1}</p><p class="note">{Annex.A.2}</p><h3>Intended Purpose</h3><p class="note">{Annex.A.3}</p>
Annex.A.1=Within the scope of these {MCC} are the following systems or components of systems:
Annex.A.2=Please provide a description of the AI System(s). This can also be an algorithmic system that does not qualify as an AI System under the AI Act.
Annex.A.3=Please provide a description of the use for which the AI System is intended.

Annex.B=<h2>Annex B – The Data Sets</h2><p class="note">{Annex.B.Note}</p><h3>The Public Organisation Data Sets</h3><p>{Annex.B.PO}</p>{Annex.B.PO.Table}<h3>Supplier Data Sets and Third-Party Data Sets</h3><p>{Annex.B.Sup}</p>{Annex.B.Sup.Table}
Annex.B.Note=Please provide a description of the Data Sets used for the training (if applicable), validation and testing of the AI System. Distinguish between Public Organisation Data Sets and Supplier Data Sets and Third-Party Data Sets. In the case of Public Organisation Data Sets, describe the purposes for which the Supplier may use the Data Sets (other than the performance of the Agreement) and whether the Supplier is required to destroy the Data Set at the end of the term of the Agreement. In the case of Supplier Data Sets and Third-Party Data Sets describe the purposes for which the Public Organisation may use the Data Sets and whether the Supplier is obliged to hand over the Data Sets.
Annex.B.PO=The following Data Sets are provided by the Public Organisation to the Supplier under the Agreement or to be created or collected as part of the Agreement:
Annex.B.PO.Table=<table><tr><th>Description of the Data Set</th><th>Rights of use of the Supplier</th><th>Obligation to destroy the Data Set at the end of the term of the Agreement</th></tr>{Annex.B.Row}{Annex.B.Row}{Annex.B.Row}{Annex.B.Row}</table>
Annex.B.Sup=The following Supplier Data Sets and Third-Party Data Sets will be or were used for the training (if applicable), validation and testing of the AI System:
Annex.B.Sup.Table=<table><tr><th>Description of the Data Set</th><th>Rights of use of the Public Organisation</th><th>Obligation to hand over</th></tr>{Annex.B.Row}{Annex.B.Row}{Annex.B.Row}{Annex.B.Row}</table>
Annex.B.Row=<tr><td></td><td></td><td>Yes/No</td></tr>

Annex.C=<h2>Annex C – Technical documentation</h2><p>{Annex.C.0}</p><p>1. {Annex.C.1}</p><p class="sub">1.1 {Annex.C.1.1}</p><p class="sub">1.2 {Annex.C.1.2}</p><p class="sub">1.3 {Annex.C.1.3}</p><p class="sub">1.4 {Annex.C.1.4}</p><p class="sub">1.5 {Annex.C.1.5}</p><p class="sub">1.6 {Annex.C.1.6}</p><p class="sub">1.7 {Annex.C.1.7}</p><p>2. {Annex.C.2}</p><p class="sub">2.1 {Annex.C.2.1}</p><p class="sub">2.2 {Annex.C.2.2}</p><p class="sub">2.3 {Annex.C.2.3}</p><p class="sub">2.4 {Annex.C.2.4}</p><p class="sub">2.5 {Annex.C.2.5}</p><p class="sub">2.6 {Annex.C.2.6}</p><p class="sub">2.7 {Annex.C.2.7}</p><p class="sub">2.8 {Annex.C.2.8}</p><p>3. {Annex.C.3}</p><p>4. {Annex.C.4}</p><p>5. {Annex.C.5}</p><p>6. {Annex.C.6}</p>
Annex.C.0=The technical documentation shall contain at least the following information, as applicable to the AI System:
Annex.C.1=a general description of the AI System including:
Annex.C.1.1=its intended purpose, the name of the Supplier, and the version of the system reflecting its relation to previous versions;
Annex.C.1.2=how the AI System can interact or can be used to interact with hardware or software, including other AI systems, that is not part of the AI System itself, where applicable;
Annex.C.1.3=the versions of relevant software or firmware and any requirement related to version update;
Annex.C.1.4=the description of hardware on which the AI System is intended to run;
Annex.C.1.5=where the AI System is a component of products, photographs or illustrations showing external features, marking and internal layout of those products;
Annex.C.1.6=a basic description of the user-interface provided to the Public Organisation;
Annex.C.1.7=instructions for use for the deployer, and a basic description of the user-interface, where applicable.
Annex.C.2=a detailed description of the elements of the AI System and of the process for its development, including:
Annex.C.2.1=the methods and steps performed for the development of the AI System, including, where relevant, recourse to pre-trained systems or tools provided by third parties and how these have been used, integrated or modified by the Supplier including a description of any licencing or other contractual arrangements related to such third-party inputs;
Annex.C.2.2=the design specifications of the system, namely the general logic of the AI System and of the algorithms; the key design choices including the rationale and assumptions made, also with regard to persons or groups of persons on which the system is intended to be used; the main classification choices; what the system is designed to optimise for and the relevance of the different parameters; the description of the expected output and output quality of the system; the decisions about any possible trade-off made regarding the technical solutions adopted to comply with the requirements set out in these {MCC};
Annex.C.2.3=the description of the system architecture explaining how software components build on or feed into each other and integrate into the overall processing; the computational resources used to develop, train, test and validate the AI System;
Annex.C.2.4=where relevant, the data requirements in terms of data sheets describing the training methodologies and techniques and the training data sets used, including a general description of these data sets, information about their provenance, scope and main characteristics; how the data was obtained and selected; labelling procedures (e.g. for supervised learning), data cleaning methodologies (e.g. outliers detection);
Annex.C.2.5=assessment of the human oversight measures needed in accordance with these {MCC}, including an assessment of the technical measures needed to facilitate the interpretation of the outputs of AI systems by the Public Organisation, in accordance with these {MCC};
Annex.C.2.6=where applicable, a detailed description of pre-determined changes to the AI System and its performance, together with all the relevant information related to the technical solutions adopted to ensure continuous compliance of the AI System with the relevant requirements set out in these {MCC};
Annex.C.2.7=the validation and testing procedures used, including information about the validation and testing data used and their main characteristics; metrics used to measure accuracy, robustness and compliance with other relevant requirements set out in these {MCC} as well as potentially discriminatory impacts; test logs and all test reports dated and signed by the responsible persons, including with regard to pre-determined changes as referred to under point 2.5;
Annex.C.2.8=cybersecurity measures put in place.
Annex.C.3=detailed information about the monitoring, functioning and control of the AI System, in particular with regard to: its capabilities and limitations in performance, including the degrees of accuracy for specific persons or groups of persons on which the system is intended to be used and the overall expected level of accuracy in relation to its intended purpose; the foreseeable unintended outcomes and sources of risks to health and safety, fundamental rights and discrimination in view of the intended purpose of the AI System.
Annex.C.4=a description of the appropriateness of the performance metrics for the AI System;
Annex.C.5=a detailed description of the risk management system in accordance with article {Risk.N};
Annex.C.6=a description of any relevant change made by the Supplier to the system through its lifecycle.

Annex.D=<h2>Annex D – Instructions for use</h2><p>{Annex.D.0}</p><p>1. {Annex.D.1}</p><p>2. {Annex.D.2}</p><p class="sub">(a) {Annex.D.2.a}</p><p class="sub">(b) {Annex.D.2.b}</p><p class="sub">(c) {Annex.D.2.c}</p><p class="sub">(d) {Annex.D.2.d}</p><p class="sub">(e) {Annex.D.2.e}</p><p class="sub">(f) {Annex.D.2.f}</p><p class="sub">(g) {Annex.D.2.g}</p><p>3. {Annex.D.3}</p><p>4. {Annex.D.4}</p><p>5. {Annex.D.5}</p><p>6. {Annex.D.6}</p>
Annex.D.0=The instructions for use shall contain at least the following information, as applicable to the AI System:
Annex.D.1=the identity and the contact details of the Supplier and, where applicable, of its authorised representatives;
Annex.D.2=the characteristics, capabilities and limitations of performance of the AI System, including where appropriate:
Annex.D.2.a=the Intended Purpose;
Annex.D.2.b=the level of accuracy, including its metrics, robustness and cybersecurity referred to in article {Acc.N} against which the AI System has been tested and validated and which can be expected, and any clearly known and foreseeable circumstances that may have an impact on that expected level of accuracy, robustness and cybersecurity;
Annex.D.2.c=any known or foreseeable circumstance, related to the use of the AI System in accordance with the Intended Purpose or under conditions of Reasonably Foreseeable Misuse, which may lead to risks to the health and safety or fundamental rights;
Annex.D.2.d=where applicable, the technical capabilities and characteristics of the AI System to provide information that is relevant to explain its output;
Annex.D.2.e=when appropriate, its performance regarding specific persons or groups of persons on which the AI System is intended to be used;
Annex.D.2.f=when appropriate, specifications for the input data or any other relevant information in terms of the training, validation and testing data sets used, taking into account the intended purpose of the AI System;
Annex.D.2.g=where applicable, information to enable the Public Organisation to interpret the output of the AI System and use it appropriately;
Annex.D.3=the changes to the AI System and its performance which have been pre-determined by the Supplier, if any;
Annex.D.4=the human oversight measures referred to in article {HO.N}, including the technical measures put in place to facilitate the interpretation of the outputs of the AI System by the Public Organisation;
Annex.D.5=the computational and hardware resources needed, the expected lifetime of the AI System and any necessary maintenance and care measures, including their frequency, to ensure the proper functioning of that AI System, including as regards software updates;
Annex.D.6=where relevant, a description of the mechanisms included within the AI System that allows the Public Organisation to properly collect, store and interpret the logs in accordance with article {Rec.N} of these {MCC}.

Annex.E=<h2>Annex E – Measures to ensure transparency</h2><p class="note">{Annex.E.1}</p>
Annex.E.1=Please provide here a description of the technical and organisational measures to be taken by the Supplier to ensure transparency in accordance with article {Transp.N} of the {MCC}.

Annex.F=<h2>Annex F – Measures to ensure human oversight</h2><p class="note">{Annex.F.1}</p>
Annex.F.1=Please provide here a description of the technical and organisational measures to be taken by the Supplier to ensure human oversight in accordance with article {HO.N} of the {MCC}.

Annex.G=<h2>Annex G – Levels of accuracy</h2><p class="note">{Annex.G.1}</p>
Annex.G.1=Describe here the required levels of accuracy.

Annex.H=<h2>Annex H – Measures to ensure an appropriate level of robustness, safety and cybersecurity</h2><p class="note">{Annex.H.1}</p><p>{Annex.H.2}</p><p>{Annex.H.3}</p>
Annex.H.1=Please provide here a description of the technical and organisational measures to be taken by the Supplier to ensure an appropriate level of robustness, safety and cybersecurity in accordance with article {Acc.N} of the {MCC}.
Annex.H.2=These measures must ensure that the AI System shall be as resilient as possible regarding errors, faults or inconsistencies that may occur within the system or the environment in which the system operates, in particular due to their interaction with natural persons or other systems.
Annex.H.3=The AI System shall be resilient as regards to attempts by unauthorised third parties to alter their use, behaviour, outputs or performance by exploiting the system’s vulnerabilities. The technical solutions to address AI specific vulnerabilities may include, where appropriate, measures to prevent, detect, respond to, resolve and control for attacks trying to manipulate the training data set (‘data poisoning’) or pre-trained components used in training (‘model poisoning’), inputs designed to cause the model to make a mistake (‘adversarial examples’ or ‘model evasion’), confidentiality attacks or model flaws, which could lead to harmful decision-making.
