
Note=Modified the last line in this file to point to the High-Risk.md as mounted in the file system. 

Claude=Did this work:

Source=European Commission, Community of Practice on the Procurement of AI, "Model contractual clauses for the public procurement of Non-High-Risk AI (MCC-AI-Light)", Version February 2025, published 5 March 2025 on the Public Buyers Community platform.

Note.01=Document-level differences
MCC=MCC-AI-Light
Note.02=The published Light title page and opening definition say "MCC-AI-High-Light" (an apparent typo in the source); kept for fidelity.
MCC.Ti=MCC-AI-High-Light
Risk.Level=Non-High-Risk AI
Model.Root=<div class="community">{Community}</div><h1>{Ti}</h1><p>{Version}</p>{Disclaimer.Sec}{Sec.A}{Sec.B}{Sec.D}{Annex.A}{Annex.B}{Annex.C}{Annex.D}{Annex.E}{Annex.F}{Annex.G}{Annex.H}

Note.03=Structure: Light drops High-Risk Sections C, E and F (quality management, conformity assessment, corrective actions as a separate article, AI register, audit, costs), folds compliance, FRIA and explanation into Section B, and re-letters D as C
Sec.B.List={Risk.Sec}{Data.Sec}{Doc.Sec}{Rec.Sec}{Transp.Sec}{HO.Sec}{Acc.Sec}{Comply.Sec}{FRIA.Sec}{Explain.Sec}
Sec.D.Letter=C
FRIA.N=10
Explain.N=11
RightsPO.N=12
RightsSup.N=13
Handover.N=14
Indem.N=15

Note.04=Section A – Definitions
Def.Intro=Definitions: capitalised terms used in these {MCC.Ti} will have the meaning as defined in this article;
Def.AISystem=AI System: the AI system(s) as referred to in Annex A, including any new versions thereof;
Def.MCC={MCC}: these standard contractual clauses for the procurement of non-high-risk artificial intelligence by public organisations;
Def.IntendedPurpose=Intended Purpose: the use for which an AI System is intended by the Public Organisation, including the specific context and conditions of use, as specified in Annex B, the information supplied by the Supplier in the instructions for use, promotional or sales materials and statements as well as in the technical documentation;
Def.RFM=Reasonably Foreseeable Misuse: the use of the AI System in a way that is not in accordance with its Intended Purpose, but which may result from reasonably foreseeable human behaviour or interaction with other systems; including other AI systems;
Def.SubMod=Substantial Modification: a change to the AI System following the Delivery which affects the compliance of the AI System with the requirements set out in these {MCC} or results in a modification to the Intended Purpose;

Note.05=Section B – wording differences in shared articles
Risk.1=The Supplier ensures that, prior to the Delivery of the AI System, a risk management system established, implemented, documented and maintained in relation to the AI System.
Risk.2.b=the estimation and evaluation of the risks that may emerge when the AI System is used in accordance with the Intended Purpose and under conditions of Reasonably Foreseeable Misuse;
Risk.3=The risks referred to in this Article shall concern only those which may be reasonably mitigated or eliminated through the development or design of the AI System or the provision of adequate technical information.
Risk.7=The Supplier ensures that, prior to the Delivery of the AI System, the AI System is tested to identify whether the AI System complies with the {MCC} and whether the risk management measures referred to in paragraph {Risk.N}.2, point (d) are effective in light of the Intended Purpose and Reasonably Foreseeable Misuse. If requested by the Public Organisation, the Supplier is obliged to test the AI System in the environment of the Public Organisation.

Data.1.d=the formulation of assumptions, in particular with respect to the information that the data are supposed to measure and represent;

Rec.2=The logging capabilities shall ensure a level of traceability of the AI System that is appropriate to the Intended Purpose of the system and Reasonably Foreseeable Misuse. They shall enable the recording of events relevant for the identification of situations that may:

Note.06=Transparency: Light adds the instructions-for-use content directly into the article (6.2–6.3)
Transp.Sec=<h3>{Transp.N}. {Transp.Ti}</h3><p>{Transp.N}.1 {Transp.1}</p><p>{Transp.N}.2 {Transp.2}</p><p>{Transp.N}.3 {Transp.3}</p><p class="sub">(a) {Transp.3.a}</p><p class="sub">(b) {Transp.3.b}</p><p class="subsub">(i) {Transp.3.b.i}</p><p class="subsub">(ii) {Transp.3.b.ii}</p><p class="subsub">(iii) {Transp.3.b.iii}</p><p class="subsub">(iv) {Transp.3.b.iv}</p><p class="subsub">(v) {Transp.3.b.v}</p><p class="subsub">(vi) {Transp.3.b.vi}</p><p class="subsub">(vii) {Transp.3.b.vii}</p><p class="sub">(c) {Transp.3.c}</p><p class="sub">(d) {Transp.3.d}</p><p class="sub">(e) {Transp.3.e}</p><p class="sub">(f) {Transp.3.f}</p><p>{Transp.N}.4 {Transp.Annex}</p>
Transp.2=The AI System shall be accompanied by instructions for use in an appropriate digital format or otherwise that include concise, complete, correct and clear information that is relevant, accessible and comprehensible to the Public Organisation.
Transp.3=The instructions for use shall contain at least the following information:
Transp.3.a=the identity and the contact details of the Supplier and, where applicable, of its authorised representative;
Transp.3.b=the characteristics, capabilities and limitations of performance of the AI system, including:
Transp.3.b.i=its intended purpose;
Transp.3.b.ii=the level of accuracy, including its metrics, robustness and cybersecurity against which the AI system has been tested and validated, and which can be expected, and any known and foreseeable circumstances that may have an impact on that expected level of accuracy, robustness and cybersecurity;
Transp.3.b.iii=any known or foreseeable circumstance related to the use of the AI system in accordance with its intended purpose or under conditions of reasonably foreseeable misuse, which may lead to risks to the health and safety or fundamental rights;
Transp.3.b.iv=where applicable, the technical capabilities and characteristics of the AI system to provide information that is relevant to explain its output;
Transp.3.b.v=when appropriate, its performance regarding specific persons or groups of persons on which the system is intended to be used;
Transp.3.b.vi=when appropriate, specifications for the input data or any other relevant information in terms of the training, validation and testing data sets used, taking into account the intended purpose of the AI system;
Transp.3.b.vii=where applicable, information to enable Public Organisation to interpret the output of the AI system and use it appropriately;
Transp.3.c=the changes to the AI system and its performance which have been predetermined by the provider at the moment of the initial conformity assessment, if any;
Transp.3.d=the human oversight measures, including the technical measures put in place to facilitate the interpretation of the outputs of the AI system by the deployers;
Transp.3.e=the computational and hardware resources needed, the expected lifetime of the AI system and any necessary maintenance and care measures, including their frequency to ensure the proper functioning of that AI system, including as regards software updates;
Transp.3.f=where relevant, a description of the mechanisms included within the AI system that allows deployers to properly collect, store and interpret the logs to ensure appropriate transparency before the Delivery of the AI System;
Transp.Annex=To ensure appropriate transparency, before the Delivery of the AI System at least the technical and organisational measures described in Annex E shall be implemented by the Supplier

HO.3=The oversight measures shall be commensurate with the risks, level of autonomy and context of use of the AI system and shall be ensured through either one or both of the following types of measures.
HO.4.b=to remain aware of the possible tendency of automatically relying or over-relying on the output produced by the AI System (‘automation bias’), in particular, if the AI System is used to provide information or recommendations for decisions to be taken by natural persons;

Note.07=Accuracy: Light omits the Article 15 AI Act proviso (High-Risk {Acc.N}.4)
Acc.Sec=<h3>{Acc.N}. {Acc.Ti}</h3><p>{Acc.N}.1 {Acc.1}</p><p>{Acc.N}.2 {Acc.2}</p><p>{Acc.N}.3 {Acc.3}</p>

Note.08=Compliance: Light combines High-Risk "Compliance with Section B", the information duty from "Compliance and audit", and "Corrective actions"
Comply.Ti=Compliance
Comply.Sec=<h3>{Comply.N}. {Comply.Ti}</h3><p>{Comply.N}.1 {Comply.1}</p><p>{Comply.N}.2 {Comply.2}</p><p>{Comply.N}.3 {Corr.Text}</p>
Comply.1=The Supplier must ensure that, from the Delivery of the AI System until the end of the term of the Agreement, the AI System complies with these {MCC}.
Comply.2=At first request of Public Organisation, the Suppliers must make available to Public Organisation all information necessary to demonstrate compliance with these {MCC}.

Note.09=FRIA and explanation: mandatory in Light (only {Explain.N}.3 stays optional)
FRIA.Head={FRIA.Ti}
FRIA.Para={FRIA.Text}
Explain.Ti=Obligation to explain the functioning of the AI System on an individual level
Explain.Head={Explain.Ti}
Explain.1.Para={Explain.1}
Explain.2.Para={Explain.2}
Explain.2=The obligation as described in article {Explain.N}.1 comprises the provision to the Public Organisation of all the technical and other information required to explain how the AI System produced a particular output and to offer the affected persons the opportunity to verify the way in which the AI System produced a particular output. The Supplier hereby grants the Public Organisation the right to use, share and disclose this information, if and to the extent necessary, to inform the affected persons accordingly.

Note.10=Section C (High-Risk Section D) – Rights to use the Data Sets
Note.11=Light corrects High-Risk's "Publication Organisation" typo
RightsPO.1=All rights, including any intellectual property right, relating to Public Organisation Data Sets will accrue to the Public Organisation or a third party designated as such by the Public Organisation.
RightsPO.2=The Supplier is not entitled to use Public Organisation Data Sets for any purpose other than the performance of the Agreement, except as otherwise provided in Annex B.
RightsPO.3=On first request of the Public Organisation, the Supplier must destroy Public Organisation Data Sets, except as otherwise provided in Annex B. If the Public Organisation so demands, the Supplier must provide feasible evidence of the destruction of Public Organisation Data Sets.
Handover.3=The Data Sets must be handed over to the Public Organisation by the Supplier in a common file format to be designated by the Public Organisation. {Opt} The Data Sets will be returned as follows: [file format]
Indem.1=The Supplier shall indemnify the Public Organisation from all claims brought by third parties, including supervisors, arising out of any infringement of intellectual property rights, data protection rights or equivalent rights resulting from the use of the AI System, the Supplier Data Sets and/or Third-Party Data Sets by the Public Organisation.

Note.12=Annexes
Annex.C.1.1=its intended purpose, the name of the Supplier and the version of the system reflecting its relation to previous versions;
Annex.C.1.7=instructions for use for the deployer and a basic description of the user-interface, where applicable.
Annex.C.2.5=assessment of the human oversight measures needed in accordance with these {MCC}, including an assessment of the technical measures needed to facilitate the interpretation of the outputs of AI systems by the Public Organisation in accordance with these {MCC};
Annex.C.2.6=where applicable, a detailed description of predetermined changes to the AI System and its performance, together with all the relevant information related to the technical solutions adopted to ensure continuous compliance of the AI System with the relevant requirements set out in these {MCC};
Annex.C.2.7=the validation and testing procedures used, including information about the validation and testing data used and their main characteristics; metrics used to measure accuracy, robustness and compliance with other relevant requirements set out in these {MCC} as well as potentially discriminatory impacts; test logs and all test reports dated and signed by the responsible persons, including with regard to predetermined changes as referred to under point 2.5;
Annex.D.2.c=any known or foreseeable circumstance related to the use of the AI System in accordance with the Intended Purpose or under conditions of Reasonably Foreseeable Misuse, which may lead to risks to the health and safety or fundamental rights;
Annex.D.3=the changes to the AI System and its performance which have been predetermined by the Supplier, if any;
Annex.D.5=the computational and hardware resources needed, the expected lifetime of the AI System and any necessary maintenance and care measures, including their frequency to ensure the proper functioning of that AI System, including as regards software updates;
Annex.H.2=These measures must ensure that the AI System shall be as resilient as possible regarding errors, faults or inconsistencies that may occur within the system or the environment in which the system operates, in particular due to  interaction with natural persons or other systems.

Note.13=Everything else comes from High-Risk
=[G/EU/Europa/AI-Model-Clauses/High-Risk.md]
