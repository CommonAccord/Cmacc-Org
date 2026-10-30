Note=Model contractual clauses for the public procurement of High-Risk AI (MCC-AI-High-Risk), Version February 2025, published 5 March 2025 by the European Commission's Community of Practice on the Procurement of AI on the Public Buyers Community platform: https://public-buyers-community.ec.europa.eu/communities/procurement-ai/resources/updated-eu-ai-model-contractual-clauses

Note=This is the base form. The light version (G/EU-MCC-AI/2025/Light/Form/0.md) includes this file and overrides only what differs.

ProofersNote=Article and paragraph numbers are rendered by the lists. Cross-references use the .Xnum helpers at the bottom, so a form that renumbers (the Light version does) only changes the helpers.

ProofersNote=Kept as in the source: "Publication Organisation Data Sets" in Article 15 (the Light version corrects it), "article 2.7" in Article 2.10 (the documentation duty is in 2.9) and "point 2.5" in Annex C, 2.7 (pre-determined changes are in 2.6).

Ti=Model contractual clauses for the public procurement of {RiskLevel.cl} (‘{MCC.Name}’)

MCC.Name=MCC-AI-High-Risk

RiskLevel.cl=High-Risk AI

Optional.Mark=&lt;Optional&gt;&#32;

Document={Doc}

0.sec={Community.sec}{Version.sec}{Disclaimer.Sec}

Community.sec=<p>Procurement of AI Community</p>

Version.sec=<p>Version February 2025 – Procurement of {RiskLevel.cl}</p>

Disclaimer.Ti=DISCLAIMER

Disclaimer.1.sec=This working document is created by the European Commission to support the Community of Practice on the Procurement of AI to guide public administrations in procuring AI solutions. It is a working document in progress and does not reflect an official position of the European Commission.

Disclaimer.2.sec=Actors that decide to make use of this working document carry full responsibility for its use in public procurement.

Disclaimer.3.sec=These Model Clauses for {RiskLevel.cl} are without the prejudice to the requirements stemming from the AI Act.

Disclaimer.=[G/Z/paras/s3]

xlist=<ol type="A" class="secs"><li>{Def.Sec}</li><li>{Req.Sec}</li><li>{Oblig.Sec}</li><li>{DataRights.Sec}</li><li>{Register.Sec}</li><li>{Cost.Sec}</li></ol>

00.sec={Annex.Sec}


Def.Ti=Definitions

Def.xlist=<ol class="secs"><li>{Def.Article.sec}</li></ol>

Def.Article.0.sec=Definitions: capitalised terms used in these {_MCC} will have the meaning as defined in this article;

Def.Article.xlist=<ul class="secs"><li>{Def.Agreement.sec}</li><li>{Def.AI_System.sec}</li><li>{Def.MCC.sec}</li><li>{Def.Public_Organisation_Data_Sets.sec}</li><li>{Def.Data_Sets.sec}</li><li>{Def.Delivery.sec}</li><li>{Def.Intended_Purpose.sec}</li><li>{Def.Reasonably_Foreseeable_Misuse.sec}</li><li>{Def.Substantial_Modification.sec}</li><li>{Def.Supplier.sec}</li><li>{Def.Supplier_Data_Sets_and_Third-Party_Data_Sets.sec}</li></ul>

Def.Agreement.sec={DefT.Agreement}: the entire agreement of which the {_MCC}, as a schedule, are an integral part;

Def.AI_System.sec={DefT.AI_System}: the machine-based system(s) that is/are designed to operate with varying levels of autonomy and that may exhibit adaptiveness after deployment, and that, for explicit or implicit objectives, infers/infer, from the input received, how to generate outputs such as predictions, content, recommendations or decisions that can influence physical or virtual environments, further specified and described in Annex {Annex.System.Xnum}, including any new versions thereof;

Def.MCC.sec={DefT.MCC}: these contractual clauses for the public procurement of High-Risk AI by public organisations;

Def.Public_Organisation_Data_Sets.sec={DefT.Public_Organisation_Data_Sets}: the {_Data_Sets} (or parts of) (i) provided by the Public Organisation to the {_Supplier} under the {_Agreement} or (ii) to be created or collected as part of the {_Agreement}, including any modified or extended versions of the {_Data_Sets} referred to under (i) and (ii) (for example due to annotation, labelling, cleaning, enrichment or aggregation);

Def.Data_Sets.sec={DefT.Data_Sets}: all data sets used in the development of the {_AI_System}, including the data set or data sets as described in Annex {Annex.DataSets.Xnum};

Def.Delivery.sec={DefT.Delivery}: the time at which the {_Supplier} informs the Public Organisation that the {_AI_System} satisfies all agreed conditions and is ready for use;

Def.Intended_Purpose.sec={DefT.Intended_Purpose}: the use for which an {_AI_System} is intended by the Public Organisation, including the specific context and conditions of use, as specified in Annex {Annex.DataSets.Xnum}, the information supplied by the {_Supplier} in the instructions for use, promotional or sales materials and statements, as well as in the technical documentation;

Def.Reasonably_Foreseeable_Misuse.sec={DefT.Reasonably_Foreseeable_Misuse}: the use of the {_AI_System} in a way that is not in accordance with its {_Intended_Purpose}, but which may result from reasonably foreseeable human behaviour or interaction with other systems, including other AI systems;

Def.Substantial_Modification.sec={DefT.Substantial_Modification}: a change to the {_AI_System} after the {_Delivery} which is not foreseen or planned in the initial conformity assessment carried out by the {_Supplier} and as a result of which the compliance of the {_AI_System} with the requirements set out in these {_MCC} is affected (without the prejudice to Chapter III Section 2 of the AI Act) or results in a modification to the {_Intended_Purpose} for which the AI system has been assessed;

Def.Supplier.sec={DefT.Supplier}: the natural or legal person, public authority, agency or other body that supplies the {_AI_System} to the Public Organisation pursuant to the {_Agreement};

Def.Supplier_Data_Sets_and_Third-Party_Data_Sets.sec={DefT.Supplier_Data_Sets} and {DefT.Third-Party_Data_Sets}: the {_Data_Sets} (or parts of) that do not qualify as {_Public_Organisation_Data_Sets}.

Def.Article.=[G/Z/Base]

Def.=[G/Z/Base]


Req.Ti=Essential requirements in relation to the AI-system

Req.xlist=<ol start="2" class="secs"><li>{Req.Risk.Sec}</li><li>{Req.Data.Sec}</li><li>{Req.Doc.Sec}</li><li>{Req.Records.Sec}</li><li>{Req.Transparency.Sec}</li><li>{Req.Oversight.Sec}</li><li>{Req.Accuracy.Sec}</li></ol>


Req.Risk.Ti=Risk management system

Req.Risk.1.sec=The {_Supplier} ensures that, prior to the {_Delivery} of the {_AI_System}, a risk management system shall be established, implemented, documented and maintained in relation to the {_AI_System}.

Req.Risk.2.0.sec=The risk management system shall at least comprise the following steps:

Req.Risk.2.1.sec=identification, estimation and evaluation of the known and reasonably foreseeable risks that the {_AI_System} can pose to health, safety or fundamental rights when the {_AI_System} is used in accordance with the {_Intended_Purpose};

Req.Risk.2.2.sec=the estimation and evaluation of the risks that may emerge when the {_AI_System} is used in accordance with the {_Intended_Purpose}, and under conditions of {_Reasonably_Foreseeable_Misuse};

Req.Risk.2.3.sec=evaluation of other possibly arising risks, based on the analysis of data gathered from the post-market monitoring system;

Req.Risk.2.4.sec=adoption of appropriate and targeted risk management measures designed to address the risks identified pursuant to point (a) of this paragraph in accordance with the provisions of the following paragraphs.

Req.Risk.2.=[G/Z/ol-a/s4]

Req.Risk.3.sec=The risks referred to in this article shall concern only those which may be reasonably mitigated or eliminated through the development or design of the {_AI_System} or the provision of adequate technical information.

Req.Risk.4.sec=The risks referred to in this article shall give due consideration to the effects and possible interaction resulting from the combined application of the requirements set out in Section {Req.Xnum}, with a view to minimising risks more effectively while achieving an appropriate balance in implementing the measures to fulfil those requirements.

Req.Risk.5.sec=The risk management measures referred to in paragraph {Req.Risk.2.Xnum}, point (d) shall be such that relevant residual risks associated with each hazard as well as the overall residual risk of the AI system is judged to be acceptable by the {_Supplier}, provided that the {_AI_System} is used in accordance with the {_Intended_Purpose} or under conditions of {_Reasonably_Foreseeable_Misuse}.

Req.Risk.6.0.sec=In identifying the most appropriate risk management measures referred to in paragraph {Req.Risk.2.Xnum}, point (d), the following shall be ensured:

Req.Risk.6.1.sec=elimination or reduction of risks identified and evaluated pursuant to paragraph {Req.Risk.2.Xnum} in as far as technically feasible through adequate design and development of the {_AI_System};

Req.Risk.6.2.sec=where appropriate, implementation of adequate mitigation and control measures addressing risks that cannot be eliminated;

Req.Risk.6.3.sec=provision of adequate information to the Public Organisation and if applicable, training to deployers.

Req.Risk.6.=[G/Z/ol-a/s3]

Req.Risk.7.sec=The {_Supplier} ensures that, prior to the {_Delivery} of the {_AI_System}, the {_AI_System} is tested in order to identify whether the {_AI_System} complies with the {_MCC} and whether the risk management measures referred to in paragraph {Req.Risk.2.Xnum}, point (d) are effective in light of the {_Intended_Purpose} and {_Reasonably_Foreseeable_Misuse}. If requested by the Public Organisation, the {_Supplier} is obliged to test the {_AI_System} in the environment of the Public Organisation.

Req.Risk.8.sec=The testing of the {_AI_System} shall be performed, as appropriate, at any time throughout the development process, and, in any event, prior to the {_Delivery}. Testing shall be carried out against prior defined metrics and probabilistic thresholds that are appropriate to the {_Intended_Purpose} of the {_AI_System}.

Req.Risk.9.sec=All risks identified, measures taken and tests performed in the context of compliance with this article must be documented by the {_Supplier}. The {_Supplier} must make this documentation available to the Public Organisation at least at the time of the {_Delivery} of the {_AI_System}. This documentation can be part of the technical documentation and/or instructions for use.

Req.Risk.10.0.sec=The risk management system shall be understood as a continuous and iterative process planned and run throughout the entire duration of the {_Agreement}. After the {_Delivery} of the {_AI_System} the {_Supplier} must therefore:

Req.Risk.10.1.sec=regularly review and update the risk management process to ensure its continuing effectiveness;

Req.Risk.10.2.sec=keep the documentation described in article {Req.Risk.7.Xnum} up to date; and

Req.Risk.10.3.sec=make every new version of the documentation described in article {Req.Risk.7.Xnum} available to the Public Organisation without delay.

Req.Risk.10.=[G/Z/ol-a/s3]

Req.Risk.11.sec=If reasonably required for the proper execution of the risk management system by the {_Supplier}, the Public Organisation will provide the {_Supplier}, on request, with information insofar as this is not of a confidential nature.

Optional:

Req.Risk.12.sec={Optional.Mark}If the Public Organisation’s use of the {_AI_System} continues beyond the term of the {_Agreement}, at the end of the term of the {_Agreement}, the {_Supplier} shall provide the Public Organisation with the information necessary to maintain the risk management system by itself.

Req.Risk.=[G/Z/ol/s12]


Req.Data.Ti=Data and data governance

Req.Data.0.sec=<p>&lt;Article {Req.Data.Xnum} is only relevant for {_AI_System}s which make use of techniques involving the training of models with data. Article {Req.Data.Xnum} presupposes the {_Supplier} (or its subcontractors) has (have) full access to the {_Data_Sets}. If the {_Data_Sets} are exclusively held by the Public Organisation, it is necessary to make other arrangements.&gt;</p>

Req.Data.1.0.sec=The {_Supplier} ensures that the {_Data_Sets} used in the development of the {_AI_System}, including training, validation and testing, have been and shall be subject to data governance and management practices appropriate for the {_Intended_Purpose} of the {_AI_System}. Those measures shall concern in particular:

Req.Data.1.1.sec=the relevant design choices;

Req.Data.1.2.sec=data collection processes and the origin of data, and in the case of personal data, the original purpose of the data collection;

Req.Data.1.3.sec=relevant data preparation for processing operations, such as annotation, labelling, cleaning, updating, enrichment and aggregation;

Req.Data.1.4.sec=the formulation of assumptions, with respect to the information that the data are supposed to measure and represent;

Req.Data.1.5.sec=an assessment of the availability, quantity and suitability of the data sets that are needed;

Req.Data.1.6.sec=examination in view of possible biases that are likely to affect the health and safety of persons, have a negative impact on fundamental rights or lead to discrimination prohibited under Union law, especially where data outputs influence inputs for future operations;

Req.Data.1.7.sec=appropriate measures to detect, prevent and mitigate possible biases identified according to point (f);

Req.Data.1.8.sec=the identification of relevant data gaps or shortcomings that prevent compliance with these {_MCC}, and how those gaps and shortcomings can be addressed.

Req.Data.1.=[G/Z/ol-a/s8]

Req.Data.2.sec=The {_Supplier} ensures that the {_Data_Sets} used in the development of the {_AI_System} are relevant, sufficiently representative and, to the best extent possible, free of errors and complete in view of the {_Intended_Purpose}. The {_Supplier} ensures that {_Data_Sets} have the appropriate statistical properties, including, where applicable, as regards the persons or groups of persons in relation to whom the {_AI_System} is intended to be used. These characteristics of the {_Data_Sets} shall be met at the level of individual data sets or a combination thereof.

Req.Data.3.sec=The {_Supplier} ensures that the {_Data_Sets} used in the development of the {_AI_System} considered, to the extent required by the {_Intended_Purpose} or {_Reasonably_Foreseeable_Misuse}, the characteristics or elements that are particular to the specific geographical, contextual, behavioural or functional setting within which the {_AI_System} is intended to be used.

Req.Data.4.sec=The obligations under this article apply not only to the development of the {_AI_System} prior to {_Delivery}, but also to any use of {_Data_Sets} by the {_Supplier} that may affect the functioning of the {_AI_System} at any other time during the term of the {_Agreement}.

Req.Data.=[G/Z/ol/s4]


Req.Doc.Ti=Technical documentation and instructions for use

Req.Doc.1.sec=The {_Delivery} of the {_AI_System} by the {_Supplier} includes the handover of the technical documentation and instructions for use.

Req.Doc.2.sec=The technical documentation must enable the Public Organisation or a third party to assess the compliance of the {_AI_System} with the provisions of the requirements set in these {_MCC} and at least satisfy the conditions described in Annex {Annex.TechDoc.Xnum}.

Req.Doc.3.sec=The instructions for use shall include concise, complete, correct and clear information that is relevant, accessible and comprehensible to the Public Organisation. The instructions for use must at least satisfy the conditions described in Annex {Annex.Instructions.Xnum}.

Req.Doc.4.sec=The {_Supplier} must update this documentation at least with every {_Substantial_Modification} during the term of the {_Agreement} and subsequently make it available to the Public Organisation.

Optional:

Req.Doc.5.sec={Optional.Mark}The technical documentation and instructions for use must be drawn up in English.

Optional:

Req.Doc.6.sec={Optional.Mark}The Public Organisation has the right to make copies of the technical documentation and instructions for use to the extent necessary for internal use within the organisation of the Public Organisation, without prejudice to the provisions of article {Req.Transparency.Xnum} and article {Oblig.Explain.Xnum}.

Req.Doc.=[G/Z/ol/s6]


Req.Records.Ti=Record-keeping

Req.Records.1.sec=The {_Supplier} ensures that the {_AI_System} shall technically allow for the automatic recording of events ('logs') over the lifetime of the {_AI_System}.

Req.Records.2.0.sec=The logging capabilities shall ensure a level of traceability of the {_AI_System} that is appropriate to the {_Intended_Purpose} of the system and {_Reasonably_Foreseeable_Misuse}. In particular, they shall enable the recording of events relevant for the identification of situations that may:

Req.Records.2.1.sec=result in the {_AI_System} presenting a risk to the health or safety or to the protection of fundamental rights of persons; or

Req.Records.2.2.sec=lead to a {_Substantial_Modification}.

Req.Records.2.=[G/Z/ol-a/s2]

Optional:

Req.Records.3.sec={Optional.Mark}The {_Supplier} will allow the Public Organisation to access the logs automatically generated by the {_AI_System} on a real time basis.

Req.Records.4.sec=The {_Supplier} shall keep the logs automatically generated by the {_AI_System}, to the extent such logs are under its control based on the {_Agreement}, for the duration of the {_Agreement}. At the end of the term of the {_Agreement}, the {_Supplier} will provide these logs to the Public Organisation without delay.

Req.Records.=[G/Z/ol/s4]


Req.Transparency.Ti=Transparency of the AI System

Req.Transparency.1.sec=The {_Supplier} ensures that the {_AI_System} has been and shall be designed and developed in such a way that the operation of the {_AI_System} is sufficiently transparent to enable the Public Organisation to interpret the system’s output and use it appropriately.

Req.Transparency.2.sec=To ensure appropriate transparency, before the {_Delivery} of the {_AI_System}, at least the technical and organisational measures described in Annex {Annex.Transparency.Xnum} shall be implemented by the {_Supplier}.

Req.Transparency.=[G/Z/ol/s2]


Req.Oversight.Ti=Human oversight

Req.Oversight.1.sec=The {_Supplier} ensures that the {_AI_System} has been and shall be designed and developed in such a way, including with appropriate human-machine interface tools, that it can be effectively overseen by natural persons during the period in which it is in use.

Req.Oversight.2.sec=Human oversight shall aim to prevent or minimise the risks to health, safety or fundamental rights that may emerge when an AI system is used in accordance with its intended purpose or under conditions of reasonably foreseeable misuse, where such risks persist despite the application of other requirements set out in this Section.

Req.Oversight.3.sec=The oversight measures shall be commensurate with the risks, level of autonomy and context of use of the AI system, and shall be ensured through either one or both of the following types of measures.

Req.Oversight.4.0.sec=The {_Supplier} ensures that, prior to the {_Delivery}, appropriate measures shall be embedded in the {_AI_System} and taken to ensure human oversight. These measures shall ensure that the natural persons, to whom human oversight is assigned, are enabled as appropriate and proportionate:

Req.Oversight.4.1.sec=to properly understand the relevant capacities and limitations of the {_AI_System} and to be able to duly monitor its operation, including in view of detecting and addressing anomalies, dysfunctions and unexpected performance;

Req.Oversight.4.2.sec=to remain aware of the possible tendency of automatically relying or over-relying on the output produced by the {_AI_System} ('automation bias'), in particular, if the {_AI_System} is used to provide information or recommendations for decisions to be taken by natural persons;

Req.Oversight.4.3.sec=to correctly interpret the {_AI_System}'s output, taking into account, for example, in particular the characteristics of the system and the interpretation tools and methods available;

Req.Oversight.4.4.sec=to decide, in any particular situation, not to use the {_AI_System} or otherwise disregard, override or reverse the output of the {_AI_System};

Req.Oversight.4.5.sec=to intervene on the operation of the {_AI_System} or interrupt the system through a ‘stop’ button or a similar procedure that allows the system to come to a halt in a safe state.

Req.Oversight.4.=[G/Z/ol-a/s5]

Optional:

Req.Oversight.5.sec={Optional.Mark}To ensure appropriate human oversight, the {_Supplier} shall at least implement the technical and organisational measures described in Annex {Annex.Oversight.Xnum} before the {_Delivery} of the {_AI_System}.

Req.Oversight.=[G/Z/ol/s5]


Req.Accuracy.Ti=Accuracy, robustness and cybersecurity

Req.Accuracy.1.sec=The {_Supplier} ensures that the {_AI_System} has been and shall be designed and developed in such a way that it achieves an appropriate level of accuracy, robustness, safety and cybersecurity, and perform consistently in those respects.

Req.Accuracy.2.sec=The levels of accuracy and the relevant accuracy metrics of the {_AI_System} are described in Annex {Annex.Accuracy.Xnum}.

Req.Accuracy.3.sec=To ensure an appropriate level of robustness, safety and cybersecurity, the {_Supplier} shall at least implement the technical and organisational measures described in Annex {Annex.Robustness.Xnum} before the {_Delivery} of the {_AI_System}.

Req.Accuracy.4.sec=This requirement is without the prejudice to the requirements stemming from Article 15 of the AI Act.

Req.Accuracy.=[G/Z/ol/s4]

Req.=[G/Z/Base]


Oblig.Ti=Obligations of the Supplier in relation to the AI System

Oblig.xlist=<ol start="9" class="secs"><li>{Oblig.Comply.Sec}</li><li>{Oblig.Quality.Sec}</li><li>{Oblig.Conformity.Sec}</li><li>{Oblig.FRIA.Sec}</li><li>{Oblig.Corrective.Sec}</li><li>{Oblig.Explain.Sec}</li></ol>


Oblig.Comply.Ti=Compliance with Section {Req.Xnum}

Oblig.Comply.sec=The {_Supplier} must ensure that, from the {_Delivery} of the {_AI_System} until the end of the term of the {_Agreement}, the {_AI_System} complies with the requirements established in Section {Req.Xnum} of these {_MCC}.

Oblig.Comply.=[G/Z/Base]


Oblig.Quality.Ti=Quality management system

Oblig.Quality.1.sec=Before the {_Delivery} of the {_AI_System}, the {_Supplier} shall put a quality management system in place that ensures compliance with these {_MCC}.

Oblig.Quality.2.0.sec=The quality management system shall be documented in a systematic and orderly manner in the form of written policies, procedures and instructions, and shall include at least the following aspects:

Oblig.Quality.2.1.sec=a strategy for regulatory compliance;

Oblig.Quality.2.2.sec=techniques, procedures and systematic actions to be used for the design, design control and design verification of the {_AI_System};

Oblig.Quality.2.3.sec=techniques, procedures and systematic actions to be used for the development, quality control and quality assurance of the {_AI_System};

Oblig.Quality.2.4.sec=examination, test and validation procedures to be carried out before, during and after the development of the {_AI_System}, and the frequency with which they have to be carried out;

Oblig.Quality.2.5.sec=technical specifications, including standards, to be applied and, where the relevant harmonised standards are not applied in full or do not cover all of the relevant requirements, the means to be used to ensure that the {_AI_System} complies with the requirements set out in Section {Req.Xnum} of these {_MCC};

Oblig.Quality.2.6.sec=systems and procedures for data management, including data collection, data acquisition, data analysis, data labelling, data storage, data filtration, data mining, data aggregation, data retention and any other operation regarding the data that is performed before the {_Delivery} of the {_AI_System};

Oblig.Quality.2.7.sec=the risk management system referred to in article {Req.Risk.Xnum};

Oblig.Quality.2.8.sec=procedures related to the reporting of serious incidents;

Oblig.Quality.2.9.sec=the handling of communication with national competent authorities, other relevant authorities, including those providing or supporting the access to data, notified bodies, other operators, customers or other interested parties;

Oblig.Quality.2.10.sec=systems and procedures for record keeping of all relevant documentation and information;

Oblig.Quality.2.11.sec=resource management, including security of supply related measures;

Oblig.Quality.2.12.sec=an accountability framework setting out the responsibilities of the management and other staff regarding all aspects listed in this paragraph.

Oblig.Quality.2.=[G/Z/ol-a/s12]

Oblig.Quality.3.sec=During the term of the {_Agreement}, the {_Supplier} must keep the documentation concerning the quality management system available. On first request of the Public Organisation, the {_Supplier} will hand over the most recent version of the documentation concerning the quality management system to the Public Organisation.

Oblig.Quality.=[G/Z/ol/s3]


Oblig.Conformity.Ti=Conformity assessment

Oblig.Conformity.1.0.sec=The {_Supplier} shall ensure that the {_AI_System} undergoes the following conformity assessment procedure prior to the {_Delivery} of the {_AI_System}:

Oblig.Conformity.1.1.sec=The {_Supplier} verifies that the established quality management system is following the requirements of article {Oblig.Quality.Xnum}.

Oblig.Conformity.1.2.sec=The {_Supplier} examines the information contained in the technical documentation to assess the compliance of the {_AI_System} with the relevant essential requirements set out in Section {Req.Xnum} of these {_MCC}.

Oblig.Conformity.1.3.sec=The {_Supplier} also verifies that the design and development process of the {_AI_System} is consistent with the technical documentation.

Oblig.Conformity.1.=[G/Z/ol-a/s3]

Oblig.Conformity.2.sec=The {_Supplier} ensures that the {_AI_System} shall undergo a new conformity assessment procedure whenever the {_AI_System} is {_Substantially_Modified} by the {_Supplier} during the term of the {_Agreement}.

Oblig.Conformity.=[G/Z/ol/s2]


Optional:

Oblig.FRIA.Ti={Oblig.FRIA.Optional.Yes/No}Fundamental rights impact assessment

Oblig.FRIA.sec={Oblig.FRIA.Optional.Yes/No}On first request of the Public Organisation, the {_Supplier} shall cooperate in the Public Organisation’s performance of an assessment of the impact on fundamental rights that the use of the {_AI_System} may produce.

Oblig.FRIA.Optional.Yes/No={Oblig.FRIA.Optional.Yes}

Oblig.FRIA.Optional.Yes={Optional.Mark}

Oblig.FRIA.Optional.No=</>

Oblig.FRIA.=[G/Z/Base]


Oblig.Corrective.Ti=Corrective actions

Oblig.Corrective.sec=If during the term of the agreement the {_Supplier} considers or has reason to consider that the {_AI_System} is not in conformity with these {_MCC}, whether in response to a comment by the Public Organisation or not, it shall immediately take the necessary corrective actions to bring the system into conformity. The {_Supplier} shall inform the Public Organisation accordingly.

Oblig.Corrective.=[G/Z/Base]


Optional:

Oblig.Explain.Ti={Oblig.Explain.Optional.Yes/No}Obligation to an explanation of individual decision-making

Oblig.Explain.1.sec={Oblig.Explain.Optional.Yes/No}In addition to the obligations described in Article {Req.Transparency.Xnum}, the {_Supplier} is obliged to assist the Public Organisation at the Public Organisation's first request in providing a clear and meaningful explanation of the role of the AI system in the decision-making procedure. This meaningful explanation should particularly (but not exclusively) provide insight in the main elements of the decision(s) taken to any affected person who is subject to Public Organisation decision(s) based on the output of the {_AI_System}.

Oblig.Explain.2.sec={Oblig.Explain.Optional.Yes/No}The obligation as described in article {Oblig.Explain.1.Xnum} comprises the provision to the Public Organisation of all the technical and other information required in order to explain how the {_AI_System} produced a particular output and to offer the affected persons the opportunity to verify the way in which the {_AI_System} produced a particular output. The {_Supplier} hereby grants the Public Organisation the right to use, share and disclose this information, if and to the extent necessary, to inform the affected persons accordingly.

Oblig.Explain.3.sec={Optional.Mark}The obligations referred to in article {Oblig.Explain.1.Xnum} and article {Oblig.Explain.2.Xnum} include the source code of the {_AI_System}, the technical specifications used in developing the {_AI_System}, the {_Data_Sets}, technical information on how the {_Data_Sets} used in developing the {_AI_System} were obtained and edited, information on the method of development used and the development process undertaken, substantiation of the choice for a particular model and its parameters, and information on the performance of the {_AI_System}.

Oblig.Explain.Optional.Yes/No={Oblig.Explain.Optional.Yes}

Oblig.Explain.Optional.Yes={Optional.Mark}

Oblig.Explain.Optional.No=</>

Oblig.Explain.=[G/Z/ol/s3]

Oblig.=[G/Z/Base]


DataRights.Ti=Rights to use the Data Sets

DataRights.xlist=<ol start="15" class="secs"><li>{DataRights.PublicOrg.Sec}</li><li>{DataRights.Supplier.Sec}</li><li>{DataRights.Handover.Sec}</li><li>{DataRights.Indemnify.Sec}</li></ol>


DataRights.PublicOrg.Ti=Rights to Public Organisation Data Sets

DataRights.PublicOrg.1.sec=All rights, including any intellectual property right, relating to Publication Organisation Data Sets will accrue to the Public Organisation or a third party designated as such by the Public Organisation.

DataRights.PublicOrg.2.sec=The {_Supplier} is not entitled to use Publication Organisation Data Sets for any purpose other than the performance of the {_Agreement}, except as otherwise provided in Annex {Annex.DataSets.Xnum}.

DataRights.PublicOrg.3.sec=On first request of the Public Organisation, the {_Supplier} must destroy Publication Organisation Data Sets, except as otherwise provided in Annex {Annex.DataSets.Xnum}. If the Public Organisation so demands, the {_Supplier} must provide feasible evidence of the destruction of Publication Organisation Data Sets.

DataRights.PublicOrg.=[G/Z/ol/s3]


DataRights.Supplier.Ti=Rights to Supplier Data Sets and Third-Party Data Sets

DataRights.Supplier.1.sec=All rights, including any intellectual property right, relating to {_Supplier_Data_Sets} and Third-Party Data sets will accrue to the {_Supplier} or a third party.

DataRights.Supplier.2.sec=The {_Supplier} grants the Public Organisation a non-exclusive right to use {_Supplier_Data_Sets} and {_Third-Party_Data_Sets} that is in any event sufficient for performance of the provisions of the {_Agreement}, including the {_MCC}, except as otherwise provided in Annex {Annex.DataSets.Xnum}.

Optional:

DataRights.Supplier.3.sec={Optional.Mark}The right of use described in article {DataRights.Supplier.2.Xnum} includes the right to use {_Supplier_Data_Sets} and Third-Party Sets for the further development of the {_AI_System}, including any new versions thereof, by the Public Organisation or a third party.

DataRights.Supplier.=[G/Z/ol/s3]


DataRights.Handover.Ti=Handover of the Data Sets

DataRights.Handover.1.sec=On first request of the Public Organisation, the {_Supplier} will hand over the most recent version of {_Public_Organisation_Data_Sets} to the Public Organisation.

DataRights.Handover.2.sec=On first request of the Public Organisation, the {_Supplier} will hand over the most recent version of the {_Supplier_Data_Sets} and {_Third-Party_Data_Sets} to the Public Organisation, except as otherwise provided in Annex {Annex.DataSets.Xnum}.

DataRights.Handover.3.sec=The {_Data_Sets} must be handed over to the Public Organisation by the {_Supplier} in a common file format to be designated by the Public Organisation. {Optional.Mark}The {_Data_Sets} will be returned as follows: [file format].

DataRights.Handover.=[G/Z/ol/s3]


DataRights.Indemnify.Ti=Indemnifications

DataRights.Indemnify.1.sec=The {_Supplier} shall indemnify the Public Organisation from all claims brought by third parties, including supervisors, arising out of any infringement of intellectual property rights, data protection rights or equivalent rights resulting from the use of the {_AI_System}, the {_Supplier_Data_Sets} and/or {_Third_Party_Data_Sets} by the Public Organisation.

DataRights.Indemnify.2.sec=The Public Organisation shall indemnify the {_Supplier} from all claims brought by third parties, including supervisors, arising out of any infringement of their intellectual property rights, privacy rights or equivalent rights resulting from the use of the {_Public_Organisation_Data_Sets}.

DataRights.Indemnify.=[G/Z/ol/s2]

DataRights.=[G/Z/Base]


Register.Ti=AI register and audit

Register.xlist=<ol start="19" class="secs"><li>{Register.Register.Sec}</li><li>{Register.Audit.Sec}</li></ol>


Optional:

Register.Register.Ti={Optional.Mark}AI register

Register.Register.1.sec=At the Public Organisation's first request, the {_Supplier} will provide the Public Organisation with the most recent version of the information described in Annex {Annex.TechDoc.Xnum} and Annex {Annex.Instructions.Xnum}.

Register.Register.2.sec=The Public Organisation will be entitled to share the information described in article {Register.Register.1.Xnum} with third parties and to disclose it, for example in a register for {_AI_System}s.

Register.Register.3.sec=If the Public Organisation so demands, the {_Supplier} will assist in registering the {_AI_System}s in any relevant register.

Register.Register.=[G/Z/ol/s3]


Register.Audit.Ti=Compliance and audit

Register.Audit.1.sec=At first request of the Public Organisation, the {_Supplier}s must make available to the Public Organisation all information necessary to demonstrate compliance with these {_MCC}.

Register.Audit.2.sec=The {_Supplier} is obliged to cooperate in an audit or other type of inspection to be carried out by or on behalf of the Public Organisation to assess whether the {_Supplier} complies with its obligations laid down in these {_MCC} at all times. Such cooperation will include providing all information required by the Public Organisation, providing an insight into the risk management system implemented, making {_Supplier} staff available for interviews and providing access to the locations of the {_Supplier}.

Register.Audit.3.sec=The Public Organisation will prepare, or cause the preparation of, a report in which the conclusions of the audit are recorded. In the report, the Public Organisation will record the extent to which the {_Supplier} complies with the obligations under the {_Agreement}. If the Public Organisation establishes that the {_Supplier} does not comply with the obligations under this article, the {_Supplier} will be obliged to remedy the defects identified by the Public Organisation within the reasonable term set by the Public Organisation in the report. If the {_Supplier} fails to remedy the defects identified by the Public Organisation within the term set in the report for remedying such defects, the {_Supplier} will be in default by operation of law.

Register.Audit.4.sec=The Public Organisation will be entitled to publish the conclusions of the report referred to in article {Register.Audit.3.Xnum}.

Register.Audit.5.sec=The Public Organisation will be entitled to perform, or cause the performance of, an audit once per calendar year or in relation to any {_Substantial_Modification}.

Register.Audit.6.sec=The Public Organisation may decide to have all or part of the audit performed by an independent auditor.

Register.Audit.7.sec=The costs of the auditor to be engaged by the Public Organisation, if any, will be paid by the Public Organisation. The Public Organisation will pay the {_Supplier} a reasonable fee for any costs to be incurred by the {_Supplier} in the context of the audit. In no event will a dispute about the amount of such fee give the {_Supplier} the right to suspend its obligations under these {_MCC}. No such fee will be owed by the Public Organisation if the audit reveals that the {_Supplier} has failed to perform its obligations under these {_MCC}.

Register.Audit.=[G/Z/ol/s7]

Register.=[G/Z/Base]


Cost.Ti=Costs

Cost.xlist=<ol start="21" class="secs"><li>{Cost.Fee.Sec}</li></ol>

Cost.Fee.Ti=Costs

Cost.Fee.sec=Unless agreed otherwise between the parties or expressly provided otherwise in these {_MCC}, no additional fee will be owed to the {_Supplier} by the Public Organisation in consideration of the work ensuing from these {_MCC}.

Cost.Fee.=[G/Z/Base]

Cost.=[G/Z/Base]


Annex.Ti=</>

Annex.xlist=<ul type="none" class="secs"><li>{Annex.System.Sec}</li><li>{Annex.DataSets.Sec}</li><li>{Annex.TechDoc.Sec}</li><li>{Annex.Instructions.Sec}</li><li>{Annex.Transparency.Sec}</li><li>{Annex.Oversight.Sec}</li><li>{Annex.Accuracy.Sec}</li><li>{Annex.Robustness.Sec}</li></ul>


Annex.System.Ti=Annex {Annex.System.Xnum} – The AI System and the Intended Purpose

Annex.System.1.Ti=Description of the AI System

Annex.System.1.sec=Within the scope of these {_MCC} are the following systems or components of systems:<br><i>Please provide a description of the {_AI_System}(s). This can also be an algorithmic system that does not qualify as an {_AI_System} under the AI Act.</i>

Annex.System.2.Ti=Intended Purpose

Annex.System.2.sec=<i>Please provide a description of the use for which the {_AI_System} is intended.</i>

Annex.System.xlist=<ul type="none" class="secs"><li>{Annex.System.1.Sec}</li><li>{Annex.System.2.Sec}</li></ul>

Annex.System.=[G/Z/Base]


Annex.DataSets.Ti=Annex {Annex.DataSets.Xnum} – The Data Sets

Annex.DataSets.0.sec=<i>Please provide a description of the {_Data_Sets} used for the training (if applicable), validation and testing of the {_AI_System}. Distinguish between {_Public_Organisation_Data_Sets} and {_Supplier_Data_Sets} and {_Third-Party_Data_Sets}. In the case of {_Public_Organisation_Data_Sets}, describe the purposes for which the {_Supplier} may use the {_Data_Sets} (other than the performance of the {_Agreement}) and whether the {_Supplier} is required to destroy the Data Set at the end of the term of the {_Agreement}. In the case of {_Supplier_Data_Sets} and {_Third-Party_Data_Sets} describe the purposes for which the Public Organisation may use the {_Data_Sets} and whether the {_Supplier} is obliged to hand over the {_Data_Sets}.</i>

Annex.DataSets.1.Ti=The Public Organisation Data Sets

Annex.DataSets.1.sec=The following {_Data_Sets} are provided by the Public Organisation to the {_Supplier} under the {_Agreement} or to be created or collected as part of the {_Agreement}:<table><tr><th>Description of the Data Set</th><th>Rights of use of the {_Supplier}</th><th>Obligation to destroy the Data Set at the end of the term of the {_Agreement}</th></tr>{Annex.DataSets.Row.sec}{Annex.DataSets.Row.sec}{Annex.DataSets.Row.sec}{Annex.DataSets.Row.sec}</table>

Annex.DataSets.2.Ti=Supplier Data Sets and Third-Party Data Sets

Annex.DataSets.2.sec=The following {_Supplier_Data_Sets} and {_Third-Party_Data_Sets} will be or were used for the training (if applicable), validation and testing of the {_AI_System}:<table><tr><th>Description of the Data Set</th><th>Rights of use of the Public Organisation</th><th>Obligation to hand over</th></tr>{Annex.DataSets.Row.sec}{Annex.DataSets.Row.sec}{Annex.DataSets.Row.sec}{Annex.DataSets.Row.sec}</table>

Annex.DataSets.Row.sec=<tr><td></td><td></td><td>Yes/No</td></tr>

Annex.DataSets.xlist=<ul type="none" class="secs"><li>{Annex.DataSets.1.Sec}</li><li>{Annex.DataSets.2.Sec}</li></ul>

Annex.DataSets.=[G/Z/Base]


Annex.TechDoc.Ti=Annex {Annex.TechDoc.Xnum} – Technical documentation

Annex.TechDoc.0.sec=The technical documentation shall contain at least the following information, as applicable to the {_AI_System}:

Annex.TechDoc.1.0.sec=a general description of the {_AI_System} including:

Annex.TechDoc.1.1.sec=its intended purpose, the name of the {_Supplier}, and the version of the system reflecting its relation to previous versions;

Annex.TechDoc.1.2.sec=how the {_AI_System} can interact or can be used to interact with hardware or software, including other AI systems, that is not part of the {_AI_System} itself, where applicable;

Annex.TechDoc.1.3.sec=the versions of relevant software or firmware and any requirement related to version update;

Annex.TechDoc.1.4.sec=the description of hardware on which the {_AI_System} is intended to run;

Annex.TechDoc.1.5.sec=where the {_AI_System} is a component of products, photographs or illustrations showing external features, marking and internal layout of those products;

Annex.TechDoc.1.6.sec=a basic description of the user-interface provided to the Public Organisation;

Annex.TechDoc.1.7.sec=instructions for use for the deployer, and a basic description of the user-interface, where applicable.

Annex.TechDoc.1.=[G/Z/ol/s7]

Annex.TechDoc.2.0.sec=a detailed description of the elements of the {_AI_System} and of the process for its development, including:

Annex.TechDoc.2.1.sec=the methods and steps performed for the development of the {_AI_System}, including, where relevant, recourse to pre-trained systems or tools provided by third parties and how these have been used, integrated or modified by the {_Supplier} including a description of any licencing or other contractual arrangements related to such third-party inputs;

Annex.TechDoc.2.2.sec=the design specifications of the system, namely the general logic of the {_AI_System} and of the algorithms; the key design choices including the rationale and assumptions made, also with regard to persons or groups of persons on which the system is intended to be used; the main classification choices; what the system is designed to optimise for and the relevance of the different parameters; the description of the expected output and output quality of the system; the decisions about any possible trade-off made regarding the technical solutions adopted to comply with the requirements set out in these {_MCC};

Annex.TechDoc.2.3.sec=the description of the system architecture explaining how software components build on or feed into each other and integrate into the overall processing; the computational resources used to develop, train, test and validate the {_AI_System};

Annex.TechDoc.2.4.sec=where relevant, the data requirements in terms of data sheets describing the training methodologies and techniques and the training data sets used, including a general description of these data sets, information about their provenance, scope and main characteristics; how the data was obtained and selected; labelling procedures (e.g. for supervised learning), data cleaning methodologies (e.g. outliers detection);

Annex.TechDoc.2.5.sec=assessment of the human oversight measures needed in accordance with these {_MCC}, including an assessment of the technical measures needed to facilitate the interpretation of the outputs of AI systems by the Public Organisation, in accordance with these {_MCC};

Annex.TechDoc.2.6.sec=where applicable, a detailed description of pre-determined changes to the {_AI_System} and its performance, together with all the relevant information related to the technical solutions adopted to ensure continuous compliance of the {_AI_System} with the relevant requirements set out in these {_MCC};

Annex.TechDoc.2.7.sec=the validation and testing procedures used, including information about the validation and testing data used and their main characteristics; metrics used to measure accuracy, robustness and compliance with other relevant requirements set out in these {_MCC} as well as potentially discriminatory impacts; test logs and all test reports dated and signed by the responsible persons, including with regard to pre-determined changes as referred to under point 2.5;

Annex.TechDoc.2.8.sec=cybersecurity measures put in place.

Annex.TechDoc.2.=[G/Z/ol/s8]

Annex.TechDoc.3.sec=detailed information about the monitoring, functioning and control of the {_AI_System}, in particular with regard to: its capabilities and limitations in performance, including the degrees of accuracy for specific persons or groups of persons on which the system is intended to be used and the overall expected level of accuracy in relation to its intended purpose; the foreseeable unintended outcomes and sources of risks to health and safety, fundamental rights and discrimination in view of the intended purpose of the {_AI_System}.

Annex.TechDoc.4.sec=a description of the appropriateness of the performance metrics for the {_AI_System};

Annex.TechDoc.5.sec=a detailed description of the risk management system in accordance with article {Req.Risk.Xnum};

Annex.TechDoc.6.sec=a description of any relevant change made by the {_Supplier} to the system through its lifecycle.

Annex.TechDoc.=[G/Z/ol/s6]


Annex.Instructions.Ti=Annex {Annex.Instructions.Xnum} – Instructions for use

Annex.Instructions.0.sec=The instructions for use shall contain at least the following information, as applicable to the {_AI_System}:

Annex.Instructions.1.sec=the identity and the contact details of the {_Supplier} and, where applicable, of its authorised representatives;

Annex.Instructions.2.0.sec=the characteristics, capabilities and limitations of performance of the {_AI_System}, including where appropriate:

Annex.Instructions.2.1.sec=the {_Intended_Purpose};

Annex.Instructions.2.2.sec=the level of accuracy, including its metrics, robustness and cybersecurity referred to in article {Req.Accuracy.Xnum} against which the {_AI_System} has been tested and validated and which can be expected, and any clearly known and foreseeable circumstances that may have an impact on that expected level of accuracy, robustness and cybersecurity;

Annex.Instructions.2.3.sec=any known or foreseeable circumstance, related to the use of the {_AI_System} in accordance with the {_Intended_Purpose} or under conditions of {_Reasonably_Foreseeable_Misuse}, which may lead to risks to the health and safety or fundamental rights;

Annex.Instructions.2.4.sec=where applicable, the technical capabilities and characteristics of the {_AI_System} to provide information that is relevant to explain its output;

Annex.Instructions.2.5.sec=when appropriate, its performance regarding specific persons or groups of persons on which the {_AI_System} is intended to be used;

Annex.Instructions.2.6.sec=when appropriate, specifications for the input data or any other relevant information in terms of the training, validation and testing data sets used, taking into account the intended purpose of the {_AI_System};

Annex.Instructions.2.7.sec=where applicable, information to enable the Public Organisation to interpret the output of the {_AI_System} and use it appropriately;

Annex.Instructions.2.=[G/Z/ol-a/s7]

Annex.Instructions.3.sec=the changes to the {_AI_System} and its performance which have been pre-determined by the {_Supplier}, if any;

Annex.Instructions.4.sec=the human oversight measures referred to in article {Req.Oversight.Xnum}, including the technical measures put in place to facilitate the interpretation of the outputs of the {_AI_System} by the Public Organisation;

Annex.Instructions.5.sec=the computational and hardware resources needed, the expected lifetime of the {_AI_System} and any necessary maintenance and care measures, including their frequency, to ensure the proper functioning of that {_AI_System}, including as regards software updates;

Annex.Instructions.6.sec=where relevant, a description of the mechanisms included within the {_AI_System} that allows the Public Organisation to properly collect, store and interpret the logs in accordance with article {Req.Records.Xnum} of these {_MCC}.

Annex.Instructions.=[G/Z/ol/s6]


Annex.Transparency.Ti=Annex {Annex.Transparency.Xnum} – Measures to ensure transparency

Annex.Transparency.sec=<i>Please provide here a description of the technical and organisational measures to be taken by the {_Supplier} to ensure transparency in accordance with article {Req.Transparency.Xnum} of the {_MCC}.</i>

Annex.Transparency.=[G/Z/Base]


Annex.Oversight.Ti=Annex {Annex.Oversight.Xnum} – Measures to ensure human oversight

Annex.Oversight.sec=<i>Please provide here a description of the technical and organisational measures to be taken by the {_Supplier} to ensure human oversight in accordance with article {Req.Oversight.Xnum} of the {_MCC}.</i>

Annex.Oversight.=[G/Z/Base]


Annex.Accuracy.Ti=Annex {Annex.Accuracy.Xnum} – Levels of accuracy

Annex.Accuracy.sec=<i>Describe here the required levels of accuracy.</i>

Annex.Accuracy.=[G/Z/Base]


Annex.Robustness.Ti=Annex {Annex.Robustness.Xnum} – Measures to ensure an appropriate level of robustness, safety and cybersecurity

Annex.Robustness.0.sec=<i>Please provide here a description of the technical and organisational measures to be taken by the {_Supplier} to ensure an appropriate level of robustness, safety and cybersecurity in accordance with article {Req.Accuracy.Xnum} of the {_MCC}.</i>

Annex.Robustness.1.sec=These measures must ensure that the {_AI_System} shall be as resilient as possible regarding errors, faults or inconsistencies that may occur within the system or the environment in which the system operates, in particular due to their interaction with natural persons or other systems.

Annex.Robustness.2.sec=The {_AI_System} shall be resilient as regards to attempts by unauthorised third parties to alter their use, behaviour, outputs or performance by exploiting the system’s vulnerabilities. The technical solutions to address AI specific vulnerabilities may include, where appropriate, measures to prevent, detect, respond to, resolve and control for attacks trying to manipulate the training data set (‘data poisoning’) or pre-trained components used in training (‘model poisoning’), inputs designed to cause the model to make a mistake (‘adversarial examples’ or ‘model evasion’), confidentiality attacks or model flaws, which could lead to harmful decision-making.

Annex.Robustness.=[G/Z/paras/s2]

Annex.=[G/Z/Base]


=[G/Z/Base]


CodersNote=HELPERS:

Req.Xnum=<a class='xref' href='{!!!}Req.Sec'>B</a>

Req.Risk.Xnum=<a class='xref' href='{!!!}Req.Risk.Sec'>2</a>

Req.Risk.2.Xnum=<a class='xref' href='{!!!}Req.Risk.2.sec'>2.2</a>

Req.Risk.7.Xnum=<a class='xref' href='{!!!}Req.Risk.7.sec'>2.7</a>

Req.Data.Xnum=<a class='xref' href='{!!!}Req.Data.Sec'>3</a>

Req.Records.Xnum=<a class='xref' href='{!!!}Req.Records.Sec'>5</a>

Req.Transparency.Xnum=<a class='xref' href='{!!!}Req.Transparency.Sec'>6</a>

Req.Oversight.Xnum=<a class='xref' href='{!!!}Req.Oversight.Sec'>7</a>

Req.Accuracy.Xnum=<a class='xref' href='{!!!}Req.Accuracy.Sec'>8</a>

Oblig.Quality.Xnum=<a class='xref' href='{!!!}Oblig.Quality.Sec'>10</a>

Oblig.Explain.Xnum=<a class='xref' href='{!!!}Oblig.Explain.Sec'>14</a>

Oblig.Explain.1.Xnum=<a class='xref' href='{!!!}Oblig.Explain.1.sec'>14.1</a>

Oblig.Explain.2.Xnum=<a class='xref' href='{!!!}Oblig.Explain.2.sec'>14.2</a>

DataRights.Supplier.2.Xnum=<a class='xref' href='{!!!}DataRights.Supplier.2.sec'>16.2</a>

Register.Register.1.Xnum=<a class='xref' href='{!!!}Register.Register.1.sec'>19.1</a>

Register.Audit.3.Xnum=<a class='xref' href='{!!!}Register.Audit.3.sec'>20.3</a>

Annex.System.Xnum=<a class='xref' href='{!!!}Annex.System.Sec'>A</a>

Annex.DataSets.Xnum=<a class='xref' href='{!!!}Annex.DataSets.Sec'>B</a>

Annex.TechDoc.Xnum=<a class='xref' href='{!!!}Annex.TechDoc.Sec'>C</a>

Annex.Instructions.Xnum=<a class='xref' href='{!!!}Annex.Instructions.Sec'>D</a>

Annex.Transparency.Xnum=<a class='xref' href='{!!!}Annex.Transparency.Sec'>E</a>

Annex.Oversight.Xnum=<a class='xref' href='{!!!}Annex.Oversight.Sec'>F</a>

Annex.Accuracy.Xnum=<a class='xref' href='{!!!}Annex.Accuracy.Sec'>G</a>

Annex.Robustness.Xnum=<a class='xref' href='{!!!}Annex.Robustness.Sec'>H</a>

!!!=#


CodersNote=DEFINED TERMS: {DefT.…} marks where a term is defined and {_…} links each use to that definition. The display text of each link is the term exactly as it appears in the source.

DefT.Agreement={_Agreement}

DefT.AI_System={_AI_System}

DefT.Data_Sets={_Data_Sets}

DefT.Delivery={_Delivery}

DefT.Intended_Purpose={_Intended_Purpose}

DefT.MCC={_MCC}

DefT.Public_Organisation_Data_Sets={_Public_Organisation_Data_Sets}

DefT.Reasonably_Foreseeable_Misuse={_Reasonably_Foreseeable_Misuse}

DefT.Substantial_Modification={_Substantial_Modification}

DefT.Supplier={_Supplier}

DefT.Supplier_Data_Sets={_Supplier_Data_Sets}

DefT.Third-Party_Data_Sets={_Third-Party_Data_Sets}

_MCC=<a href='{!!!}DefT.MCC' class='definedterm'>{MCC.Name}</a>

_Agreement=<a href='{!!!}DefT.Agreement' class='definedterm'>Agreement</a>

_AI_System=<a href='{!!!}DefT.AI_System' class='definedterm'>AI System</a>

_Data_Sets=<a href='{!!!}DefT.Data_Sets' class='definedterm'>Data Sets</a>

_Delivery=<a href='{!!!}DefT.Delivery' class='definedterm'>Delivery</a>

_Intended_Purpose=<a href='{!!!}DefT.Intended_Purpose' class='definedterm'>Intended Purpose</a>

_Public_Organisation_Data_Sets=<a href='{!!!}DefT.Public_Organisation_Data_Sets' class='definedterm'>Public Organisation Data Sets</a>

_Reasonably_Foreseeable_Misuse=<a href='{!!!}DefT.Reasonably_Foreseeable_Misuse' class='definedterm'>Reasonably Foreseeable Misuse</a>

_Substantial_Modification=<a href='{!!!}DefT.Substantial_Modification' class='definedterm'>Substantial Modification</a>

_Substantially_Modified=<a href='{!!!}DefT.Substantial_Modification' class='definedterm'>Substantially Modified</a>

_Supplier=<a href='{!!!}DefT.Supplier' class='definedterm'>Supplier</a>

_Supplier_Data_Sets=<a href='{!!!}DefT.Supplier_Data_Sets' class='definedterm'>Supplier Data Sets</a>

_Third-Party_Data_Sets=<a href='{!!!}DefT.Third-Party_Data_Sets' class='definedterm'>Third-Party Data Sets</a>

_Third_Party_Data_Sets=<a href='{!!!}DefT.Third-Party_Data_Sets' class='definedterm'>Third Party Data Sets</a>
