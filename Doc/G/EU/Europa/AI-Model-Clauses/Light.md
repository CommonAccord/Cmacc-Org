Note=Model contractual clauses for the public procurement of Non-High-Risk AI (MCC-AI-Light), Version February 2025, published 5 March 2025 by the European Commission's Community of Practice on the Procurement of AI on the Public Buyers Community platform: https://public-buyers-community.ec.europa.eu/communities/procurement-ai/resources/updated-eu-ai-model-contractual-clauses

Note=This form includes the High-Risk form (last line) and overrides only what differs. Every key not set here comes from High-Risk.

Note=Structure: Light drops High-Risk Sections C (as a section), E and F: quality management system, conformity assessment, AI register, compliance and audit, and costs. It keeps Compliance (merged with corrective actions and the first audit paragraph), the fundamental rights impact assessment and the explanation obligation, and moves them into Section B as Articles 9 to 11. High-Risk Section D therefore becomes Section C, Articles 12 to 15. The section letters re-letter automatically; article numbers are set by the list start values and the .Xnum helpers below.

ProofersNote=The Light title and its opening definition say "MCC-AI-High-Light", an apparent typo in the source. Kept.

ProofersNote=Light corrects High-Risk's "Publication Organisation Data Sets" to "Public Organisation Data Sets".

ProofersNote=Many of the overrides below differ from High-Risk only in a comma, a hyphen ("predetermined" for "pre-determined") or quotation marks. They are kept to reproduce the published Light text exactly.

Ti=Model contractual clauses for the public procurement of {RiskLevel.cl} (‘MCC-AI-High-Light’)

MCC.Name=MCC-AI-Light

RiskLevel.cl=Non-High-Risk AI

xlist=<ol type="A" class="secs"><li>{Def.Sec}</li><li>{Req.Sec}</li><li>{DataRights.Sec}</li></ol>


Def.Article.0.sec=Definitions: capitalised terms used in these MCC-AI-High-Light will have the meaning as defined in this article;

Def.AI_System.sec={DefT.AI_System}: the AI system(s) as referred to in Annex {Annex.System.Xnum}, including any new versions thereof;

Def.MCC.sec={DefT.MCC}: these standard contractual clauses for the procurement of non-high-risk artificial intelligence by public organisations;

Def.Intended_Purpose.sec={DefT.Intended_Purpose}: the use for which an {_AI_System} is intended by the Public Organisation, including the specific context and conditions of use, as specified in Annex {Annex.DataSets.Xnum}, the information supplied by the {_Supplier} in the instructions for use, promotional or sales materials and statements as well as in the technical documentation;

Def.Reasonably_Foreseeable_Misuse.sec={DefT.Reasonably_Foreseeable_Misuse}: the use of the {_AI_System} in a way that is not in accordance with its {_Intended_Purpose}, but which may result from reasonably foreseeable human behaviour or interaction with other systems; including other AI systems;

Def.Substantial_Modification.sec={DefT.Substantial_Modification}: a change to the {_AI_System} following the {_Delivery} which affects the compliance of the {_AI_System} with the requirements set out in these {_MCC} or results in a modification to the {_Intended_Purpose};


Req.xlist=<ol start="2" class="secs"><li>{Req.Risk.Sec}</li><li>{Req.Data.Sec}</li><li>{Req.Doc.Sec}</li><li>{Req.Records.Sec}</li><li>{Req.Transparency.Sec}</li><li>{Req.Oversight.Sec}</li><li>{Req.Accuracy.Sec}</li><li>{Oblig.Comply.Sec}</li><li>{Oblig.FRIA.Sec}</li><li>{Oblig.Explain.Sec}</li></ol>

Req.Risk.1.sec=The {_Supplier} ensures that, prior to the {_Delivery} of the {_AI_System}, a risk management system established, implemented, documented and maintained in relation to the {_AI_System}.

Req.Risk.2.2.sec=the estimation and evaluation of the risks that may emerge when the {_AI_System} is used in accordance with the {_Intended_Purpose} and under conditions of {_Reasonably_Foreseeable_Misuse};

Req.Risk.3.sec=The risks referred to in this Article shall concern only those which may be reasonably mitigated or eliminated through the development or design of the {_AI_System} or the provision of adequate technical information.

Req.Risk.7.sec=The {_Supplier} ensures that, prior to the {_Delivery} of the {_AI_System}, the {_AI_System} is tested to identify whether the {_AI_System} complies with the {_MCC} and whether the risk management measures referred to in paragraph {Req.Risk.2.Xnum}, point (d) are effective in light of the {_Intended_Purpose} and {_Reasonably_Foreseeable_Misuse}. If requested by the Public Organisation, the {_Supplier} is obliged to test the {_AI_System} in the environment of the Public Organisation.

Req.Data.1.4.sec=the formulation of assumptions, in particular with respect to the information that the data are supposed to measure and represent;

Req.Records.2.0.sec=The logging capabilities shall ensure a level of traceability of the {_AI_System} that is appropriate to the {_Intended_Purpose} of the system and {_Reasonably_Foreseeable_Misuse}. They shall enable the recording of events relevant for the identification of situations that may:


Note=Transparency: Light adds the content of the instructions for use to the article itself (paragraphs 6.2 and 6.3). High-Risk puts it in Annex D, which Light also keeps.

Req.Transparency.2.sec=The {_AI_System} shall be accompanied by instructions for use in an appropriate digital format or otherwise that include concise, complete, correct and clear information that is relevant, accessible and comprehensible to the Public Organisation.

Req.Transparency.3.0.sec=The instructions for use shall contain at least the following information:

Req.Transparency.3.1.sec=the identity and the contact details of the {_Supplier} and, where applicable, of its authorised representative;

Req.Transparency.3.2.0.sec=the characteristics, capabilities and limitations of performance of the AI system, including:

Req.Transparency.3.2.1.sec=its intended purpose;

Req.Transparency.3.2.2.sec=the level of accuracy, including its metrics, robustness and cybersecurity against which the AI system has been tested and validated, and which can be expected, and any known and foreseeable circumstances that may have an impact on that expected level of accuracy, robustness and cybersecurity;

Req.Transparency.3.2.3.sec=any known or foreseeable circumstance related to the use of the AI system in accordance with its intended purpose or under conditions of reasonably foreseeable misuse, which may lead to risks to the health and safety or fundamental rights;

Req.Transparency.3.2.4.sec=where applicable, the technical capabilities and characteristics of the AI system to provide information that is relevant to explain its output;

Req.Transparency.3.2.5.sec=when appropriate, its performance regarding specific persons or groups of persons on which the system is intended to be used;

Req.Transparency.3.2.6.sec=when appropriate, specifications for the input data or any other relevant information in terms of the training, validation and testing data sets used, taking into account the intended purpose of the AI system;

Req.Transparency.3.2.7.sec=where applicable, information to enable Public Organisation to interpret the output of the AI system and use it appropriately;

Req.Transparency.3.2.=[G/Z/ol-i/s7]

Req.Transparency.3.3.sec=the changes to the AI system and its performance which have been predetermined by the provider at the moment of the initial conformity assessment, if any;

Req.Transparency.3.4.sec=the human oversight measures, including the technical measures put in place to facilitate the interpretation of the outputs of the AI system by the deployers;

Req.Transparency.3.5.sec=the computational and hardware resources needed, the expected lifetime of the AI system and any necessary maintenance and care measures, including their frequency to ensure the proper functioning of that AI system, including as regards software updates;

Req.Transparency.3.6.sec=where relevant, a description of the mechanisms included within the AI system that allows deployers to properly collect, store and interpret the logs to ensure appropriate transparency before the {_Delivery} of the {_AI_System};

Req.Transparency.3.=[G/Z/ol-a/s6]

Req.Transparency.4.sec=To ensure appropriate transparency, before the {_Delivery} of the {_AI_System} at least the technical and organisational measures described in Annex {Annex.Transparency.Xnum} shall be implemented by the {_Supplier}

CodersNote=The list is spelled out instead of including G/Z/ol/s4 here, because a layout include in this file would also supply G/Z defaults for paragraph 1 ahead of the High-Risk text.

Req.Transparency.secs={Req.Transparency.1.sec}</li><li>{Req.Transparency.2.sec}</li><li>{Req.Transparency.3.sec}</li><li>{Req.Transparency.4.sec}


Req.Oversight.3.sec=The oversight measures shall be commensurate with the risks, level of autonomy and context of use of the AI system and shall be ensured through either one or both of the following types of measures.

Req.Oversight.4.2.sec=to remain aware of the possible tendency of automatically relying or over-relying on the output produced by the {_AI_System} (‘automation bias’), in particular, if the {_AI_System} is used to provide information or recommendations for decisions to be taken by natural persons;


Note=Accuracy: Light omits High-Risk 8.4, the proviso on Article 15 of the AI Act.

Req.Accuracy.secs={Req.Accuracy.1.sec}</li><li>{Req.Accuracy.2.sec}</li><li>{Req.Accuracy.3.sec}


Note=Compliance: Light combines High-Risk "Compliance with Section B" (9), the first paragraph of "Compliance and audit" (20.1) and "Corrective actions" (13).

Oblig.Comply.Ti=Compliance

Oblig.Comply.1.sec=The {_Supplier} must ensure that, from the {_Delivery} of the {_AI_System} until the end of the term of the {_Agreement}, the {_AI_System} complies with these {_MCC}.

Oblig.Comply.2.sec=At first request of Public Organisation, the {_Supplier}s must make available to Public Organisation all information necessary to demonstrate compliance with these {_MCC}.

Oblig.Comply.3.sec={Oblig.Corrective.sec}

Oblig.Comply.=[G/Z/ol/s3]


Note=The fundamental rights impact assessment and the explanation obligation are optional in High-Risk and mandatory in Light (only the source-code paragraph of the explanation obligation stays optional).

Oblig.FRIA.Optional.Yes/No={Oblig.FRIA.Optional.No}

Oblig.Explain.Optional.Yes/No={Oblig.Explain.Optional.No}

Oblig.Explain.Ti=Obligation to explain the functioning of the AI System on an individual level

Oblig.Explain.2.sec=The obligation as described in article {Oblig.Explain.1.Xnum} comprises the provision to the Public Organisation of all the technical and other information required to explain how the {_AI_System} produced a particular output and to offer the affected persons the opportunity to verify the way in which the {_AI_System} produced a particular output. The {_Supplier} hereby grants the Public Organisation the right to use, share and disclose this information, if and to the extent necessary, to inform the affected persons accordingly.


DataRights.xlist=<ol start="12" class="secs"><li>{DataRights.PublicOrg.Sec}</li><li>{DataRights.Supplier.Sec}</li><li>{DataRights.Handover.Sec}</li><li>{DataRights.Indemnify.Sec}</li></ol>

DataRights.PublicOrg.1.sec=All rights, including any intellectual property right, relating to {_Public_Organisation_Data_Sets} will accrue to the Public Organisation or a third party designated as such by the Public Organisation.

DataRights.PublicOrg.2.sec=The {_Supplier} is not entitled to use {_Public_Organisation_Data_Sets} for any purpose other than the performance of the {_Agreement}, except as otherwise provided in Annex {Annex.DataSets.Xnum}.

DataRights.PublicOrg.3.sec=On first request of the Public Organisation, the {_Supplier} must destroy {_Public_Organisation_Data_Sets}, except as otherwise provided in Annex {Annex.DataSets.Xnum}. If the Public Organisation so demands, the {_Supplier} must provide feasible evidence of the destruction of {_Public_Organisation_Data_Sets}.

DataRights.Handover.3.sec=The {_Data_Sets} must be handed over to the Public Organisation by the {_Supplier} in a common file format to be designated by the Public Organisation. {Optional.Mark}The {_Data_Sets} will be returned as follows: [file format]

DataRights.Indemnify.1.sec=The {_Supplier} shall indemnify the Public Organisation from all claims brought by third parties, including supervisors, arising out of any infringement of intellectual property rights, data protection rights or equivalent rights resulting from the use of the {_AI_System}, the {_Supplier_Data_Sets} and/or {_Third-Party_Data_Sets} by the Public Organisation.


Annex.TechDoc.1.1.sec=its intended purpose, the name of the {_Supplier} and the version of the system reflecting its relation to previous versions;

Annex.TechDoc.1.7.sec=instructions for use for the deployer and a basic description of the user-interface, where applicable.

Annex.TechDoc.2.5.sec=assessment of the human oversight measures needed in accordance with these {_MCC}, including an assessment of the technical measures needed to facilitate the interpretation of the outputs of AI systems by the Public Organisation in accordance with these {_MCC};

Annex.TechDoc.2.6.sec=where applicable, a detailed description of predetermined changes to the {_AI_System} and its performance, together with all the relevant information related to the technical solutions adopted to ensure continuous compliance of the {_AI_System} with the relevant requirements set out in these {_MCC};

Annex.TechDoc.2.7.sec=the validation and testing procedures used, including information about the validation and testing data used and their main characteristics; metrics used to measure accuracy, robustness and compliance with other relevant requirements set out in these {_MCC} as well as potentially discriminatory impacts; test logs and all test reports dated and signed by the responsible persons, including with regard to predetermined changes as referred to under point 2.5;

Annex.Instructions.2.3.sec=any known or foreseeable circumstance related to the use of the {_AI_System} in accordance with the {_Intended_Purpose} or under conditions of {_Reasonably_Foreseeable_Misuse}, which may lead to risks to the health and safety or fundamental rights;

Annex.Instructions.3.sec=the changes to the {_AI_System} and its performance which have been predetermined by the {_Supplier}, if any;

Annex.Instructions.5.sec=the computational and hardware resources needed, the expected lifetime of the {_AI_System} and any necessary maintenance and care measures, including their frequency to ensure the proper functioning of that {_AI_System}, including as regards software updates;

Annex.Robustness.1.sec=These measures must ensure that the {_AI_System} shall be as resilient as possible regarding errors, faults or inconsistencies that may occur within the system or the environment in which the system operates, in particular due to  interaction with natural persons or other systems.


=[G/EU/Europa/AI-Model-Clauses/High-Risk.md]

CodersNote=HELPERS (renumbered articles):

Oblig.Comply.Xnum=<a class='xref' href='{!!!}Oblig.Comply.Sec'>9</a>

Oblig.FRIA.Xnum=<a class='xref' href='{!!!}Oblig.FRIA.Sec'>10</a>

Oblig.Explain.Xnum=<a class='xref' href='{!!!}Oblig.Explain.Sec'>11</a>

Oblig.Explain.1.Xnum=<a class='xref' href='{!!!}Oblig.Explain.1.sec'>11.1</a>

Oblig.Explain.2.Xnum=<a class='xref' href='{!!!}Oblig.Explain.2.sec'>11.2</a>

DataRights.Supplier.2.Xnum=<a class='xref' href='{!!!}DataRights.Supplier.2.sec'>13.2</a>
