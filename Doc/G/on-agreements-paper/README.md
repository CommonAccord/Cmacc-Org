# Reimagining Agreements

Michael Zargham and James Hazard

## Motivation

Human coordination hinges on our ability to set and meet expectations; this is the act of making agreements. Agreements institute rules, norms, and shared strategies which lower the cognitive cost of coordination, allowing social species such as humans to thrive—and ultimately to create societies.

From a carpool schedule to the founding documents of a government, agreements allow us to align our actions, plan into the future, and build trust with one another. They are how we make the complex legible, and the uncertain manageable.

## Introduction

Agreements are everywhere, yet making them still feels surprisingly hard.

Whether you're starting a business, hiring a freelancer, or simply trying to share a driveway with a neighbor, formalizing expectations can introduce more friction (and risk) than it resolves. Legal documents are often written in dense, inaccessible language. Negotiating them is slow and expensive. Even once an agreement is signed, its interpretation can remain murky—open to debate, disagreement, or litigation.

These frictions are not just inconvenient; they’re exclusionary. Small businesses, grassroots organizations, and everyday people often find the process too burdensome to navigate. So instead, we rely on verbal agreements, social norms, or brittle assumptions—structures that work, until they don’t.

And yet, paradoxically, the purpose of agreements is to reduce friction. They exist to make it easier for people to cooperate—to coordinate plans, divide responsibilities, and manage resources. In theory, agreements should reduce cognitive load. They should give people confidence to act, not hesitation.

Instead, in our digital age, we often encounter the opposite. Take the ubiquitous clickwrap agreement—those dense terms and conditions we’re forced to accept in order to use a website or service. These documents are rarely read, not because users don’t care, but because parsing them imposes an unreasonable cognitive burden. Most users choose to “click through” for convenience—trading attention for risk, and often abrogating rights they didn’t even know they had.

Clickwrap agreements are a dark pattern, but they also reveal something deeper: the collapse of confidence. Users neither trust the counterparties, nor have confidence in the legal artifacts they’re signing. This situation highlights multiple systemic tensions:

- The asymmetry of power when one party controls both the legal text and the technical interface.
- The practical limits of trust in actors and confidence in documents.
- The challenge of navigating friction vs. risk—especially when the legal system remains opaque.

It’s tempting to say that the solution is to make agreements simpler. But legal agreements must function within the context of a complex, precedent-based legal system. True simplicity isn't always possible. What we can aim for instead is structured confidence—confidence rooted in reusable patterns, verifiable structure, and transparent authorship.

A legal agreement template becomes a source of confidence when:
- It has been reused widely and is recognized by name (ideally, also an unique identifier like a git hash).
- It is easy to verify that a given document conforms to that template (such as using checksums).
- Its parameters—or ProseObjects—are well-typed and clearly defined (e.g. enforcing a type system and typesafety requirements.)
- It is maintained by professionals whose roles and licenses carry accountability. (Yes, we still need lawyers.)

Meanwhile, trust enters the picture in our relationships with lawyers and counterparties. Was the agreement entered into in good faith? Were the parameters set with fair intent? Even if not, did the structure of the agreement provide mechanisms for recourse?

Today, we outsource much of this cognitive load to law firms. They control access to well-worn templates and operate under professional obligations that provide a level of assurance—at least for the parties they represent. We also rely on lawmakers to regulate practices like exploitative clickwrap agreements, which thrive in the absence of scrutiny and competition.

What we are proposing is not a fantasy of total transparency or universal legal literacy. Rather, it’s a shift in how we produce confidence—moving from proprietary silos to open, standardized, and verifiable legal infrastructure. Much like open source software, legal code can be developed collaboratively, audited openly, and reused with confidence—not because every user understands every clause, but because the pattern is known, the structure is clear, and the ecosystem surrounding it is accountable.

## An Ontology of Agreements

To better understand the nature of agreements—and how to improve them—we need a language that captures their different dimensions. Agreements aren’t just documents; they are social artifacts that sit at the intersection of **human relationships**, **technical processes**, and **legal systems**.

We propose a simple ontology for thinking about agreements, composed of three core domains:

| **Domain**       | **Native Form**           | **Primary Concern**                  | **Legibility**             |
|------------------|---------------------------|--------------------------------------|----------------------------|
| **Relationships**| Verbal/social agreements  | Intent, trust, good faith            | Legible to humans          |
| **Processes**    | Software, operational logic| Execution, automation, enforcement  | Legible to machines        |
| **Legal Glue**   | Contracts, regulations     | Interpretation, recourse, legitimacy | Legible to legal systems   |

---

### **Relationships**
At the heart of any agreement lies a relationship between people—partners, collaborators, service providers, users. These relationships are built on **shared expectations** and often governed by verbal commitments or social norms.

Relational agreements are:
- Flexible, informal, and adaptive.
- Often implicit, relying on trust and reputation.
- Essential for navigating ambiguity and change.

But they also have limitations. They are difficult to scale, hard to verify, and offer little recourse when things go wrong. This is where law and software enter.

### **Processes**
Software systems increasingly **implement** the terms of agreements: who gets access, when money moves, how data is shared. These are no longer merely after-the-fact operations—they are the agreement, enacted in real-time.

Process-based agreements are:
- Deterministic (when well designed).
- Scalable and fast.
- Good at enforcing rules, bad at handling edge cases.

However, software is brittle. It lacks the nuance to interpret intent. A bug in the code or an edge case outside the specification can produce outcomes nobody intended. Worse, these outcomes can still be “correct” from the system’s point of view—creating misalignments between what was meant and what was done.

### **Legal Glue**  
Legal systems provide the **interface between relationships and processes**. A contract attempts to translate human intent into formal language, and anticipates how disputes will be resolved. It is neither fully social nor fully technical—it’s a kind of institutional glue.

Legal glue provides:
- Legitimacy and enforceability.
- Mechanisms for dispute resolution and error handling.
- A framework for rights, responsibilities, and remedies.

But legal texts must operate within the rules of the broader legal system. They can't simply be made “simple” or “self-executing.” Instead, we must focus on **making them composable, standardized, and interoperable**—so that confidence can be built around known patterns, rather than bespoke complexity.

That’s a crucial refinement—thank you. You're absolutely right: the role of the legal layer isn't about obligation in isolation but about **institutionalization**—providing a public, third-party recognizable form that connects intent and execution to broader systems of legitimacy and recourse.

### **Correspondence is Key**

This three-part ontology also helps us pinpoint a core challenge in modern agreements: ensuring strong **correspondence** between their **intent**, **execution**, and **institutionalization**.

Each layer speaks a different language:
- **Relationships** express the **intent** of the parties involved—what they want to achieve, what they expect from each other, what they consider fair.
- **Processes** carry out the **execution** of that intent—automating decisions, enforcing permissions, moving money or data.
- **Legal texts** provide **institutionalization**—a formal articulation of the relationship and process that is legible to the legal system, creating a shared reference point for enforcement, accountability, and dispute resolution.

When these three layers are aligned, agreements are powerful. They are actionable, trustworthy, and enforceable. But when they fall out of alignment, problems emerge:
- A user agrees to something they don’t understand.
- A piece of software behaves in a technically correct but socially perverse way.
- A contract is interpreted in court in a way that ignores the lived reality of how it was used.

Without correspondence, an agreement may still be enforceable, but it loses its legitimacy in the eyes of its participants. It ceases to function as a **social contract**, and becomes merely a mechanism of control.

That’s why designing agreements for correspondence—not just compliance—is essential. We need tools and frameworks that ensure:
- The **legal text** matches the **intent** of the relationship.
- The **software** matches both the **legal text** and the **relational expectations**.
- And that all three can be interpreted coherently by the institutions we rely on to resolve disagreements.

This is not just a technical challenge—it’s a social and institutional one. And it’s precisely why we look to **open source methodologies** as a potential path forward.

## Why Open Source Law is a Good Fit

Modern software development has already solved many of the problems that plague legal agreements today: version control, modular reuse, collaborative authorship, and transparent review. These practices enable engineers to manage complexity, reduce duplication, and build trust in the artifacts they produce—even when the underlying systems are incredibly intricate.

Legal practice, by contrast, remains deeply siloed. Templates are often treated as proprietary assets. Collaboration across firms or jurisdictions is rare. And while legal interpretation must deal with ambiguity, legal drafting too often introduces ambiguity unintentionally—because there are no shared standards, no automated tests, and no review workflows like those common in open source software.

This is not because such tools or methods are unavailable. In fact, they’ve been possible—and even desirable—for some time. The real barrier has been structural: the incentives for open legal collaboration have not aligned with the interests of dominant legal institutions. We’ll return to this problem shortly. For now, it’s enough to say that if we could shift the way legal documents are authored and maintained—toward open templates, shared version control, and community review—we could significantly reduce the cognitive and financial burdens of agreement-making.

## Digital Infrastructure for Agreements

If we want to bring open source methods to the legal domain, we need more than just inspiration—we need infrastructure. One such effort is **Common Accord**, a project founded by James Hazard. It offers both a conceptual and technical framework for modular, open legal code.

At the heart of Common Accord is a construct called a **ProseObject**. Think of a ProseObject as both a legal clause and a software variable—a reusable piece of legal text with clearly defined parameters. Legal documents, in this system, are not static Word files but domain-specific **composable knowledge graphs**: each clause can be referenced, versioned, and instantiated with context-specific details.

Instead of writing bespoke agreements users can:
- Reference shared templates (which evolve like open source libraries).
- Parameterize those templates with structured data (e.g., names, dates, pricing rules).
- Assemble a final agreement that is **human-readable**, **machine-verifiable**, and **legally grounded**.

This is more than just a productivity boost. It is a **reconfiguration of how confidence is produced** in the legal system:
- Reuse across many instances provides familiarity and recognizability.
- Standardized identifiers (such as git hashes) can make documents traceable to known templates.
- Strong typing of parameters ensures that the legal text says what it’s supposed to say.
- Public maintenance of template libraries creates pathways for shared governance and peer review.

To understand the deeper potential of this model, it helps to situate Common Accord within the broader ecosystem of **git-based collaboration**.

### Git as Legal Infrastructure

**Git** is not just a tool—it’s a protocol. A protocol with specific properties that have transformed how technical communities collaborate on complex artifacts:
- Git allows multiple contributors to work across time and space, while preserving history, authorship, and traceability.
- It supports **distributed repositories**—each party can have a full copy of the history and logic of a project.
- Git workflows offer **standardization without centralization**—developers and teams can adopt shared norms while maintaining local autonomy.

Git's adoption, turbocharged by platforms like **GitHub, GitLab, and Bitbucket**, lowered the friction of transparent collaboration. It became the backbone of the open source software movement—creating software ecosystems where thousands of contributors, across dozens of organizations, could build high-confidence systems together.

This model has even bled back into legal practices. Open source communities have long maintained **contributor license agreements** and **software licenses** as markdown files in repositories—highlighting that agreements themselves can be part of the development stack. In many repositories, legally binding documents are managed alongside the code they govern. The use of git makes these documents traceable, forkable, reviewable, and legible—not just in court, but in context.

Importantly, git also aligns deeply with one of the most fundamental principles of legal systems: **the maintenance of canonical records**. Legal systems rely on structured information management—where provenance, authority, and correct citation are paramount. Git, though built for software, embodies many of the same commitments. It tracks every change, encodes authorship, and creates cryptographically verifiable histories. It is, in many ways, a modern technological echo of the same epistemic values that underpin legal precedent and archival integrity.

### Common Accord: A Git-Native Approach to Agreements

Common Accord extends this model directly. Its legal artifacts are git-native:
- Templates are maintained in **repositories**, with readable markdown and structured parameterization.
- Reuse and review follow the same workflows used in open source development—pull requests, forks, issues, releases.
- The legal domain inherits the **technical assurances** of software development—change tracking, version integrity, and attribution.

Crucially, this isn’t about making law "technical" for its own sake. It’s about giving legal authors and users the same collaborative powers that coders take for granted:
- Transparent authorship and review.
- Modular reuse and rapid iteration.
- Confidence in the structure and lineage of every agreement.

This brings us full circle: Common Accord isn’t just a project. It’s a glimpse of what **git-native legal infrastructure** could look like. A world where legal knowledge is **open**, **structured**, and **collaboratively governed**—not locked behind proprietary gates.

## **Barriers to Adoption**

If the ideas behind Common Accord—and open legal code more broadly—seem intuitive, well-aligned with existing legal norms, and technically feasible, it’s worth asking: **why hasn’t this model taken off?**

The answer is not about the idea. It’s about **infrastructure, incentives, and accessibility**.

### **Protocol, Not Platform**

Common Accord, in its current form, is not a platform. It is better understood as a **protocol extension** of git for legal code—a demonstration of how legal documents can be modularized, versioned, and collaboratively maintained using ProseObjects.

Technologically, it is somewhere around **Technology Readiness Level (TRL) 5 or 6**:
- The concept has been validated by its creator, James Hazard, who has manually structured **hundreds of legal templates** in this form.
- It has been tested by other legal professionals and scholars.
- But it remains a **tool for experts**—a kind of curiosity for those fluent in both law and code.
- Its network effect dependent -- the main benefits are unlocked by coordination, not through individual expert use.

What’s missing is what open source software had in its early days: **opinionated platforms** that made the underlying protocols accessible, legible, and easy to use. Git existed long before GitHub. It took a **combination of technical accessibility, UX design, and community scaffolding** to make collaborative software development the global norm.

The same is true here. For this ecosystem to scale, it must be:
- As easy to spin up an open source legal project as it is to fork a repo on GitHub.
- As simple to see how often a legal artifact has been cloned, starred, or reused.
- Possible to offer **custom views** for different audiences: end users, lawyers, adjudicators, machines.

These challenges are real, but they are no longer technological blockers. The hardest part—**the design of a workable, git-native legal representation format**—has already been done. What remains is a problem of **platform development, UX, and community building**.

### **Misaligned Incentives in the Legal Industry**

While platform gaps are surmountable, economic incentives remain a deep structural barrier.

Large law firms and corporate legal departments have **little reason to open up** their template libraries or contribute to a commons. Their value proposition lies in their proprietary expertise—much of which is embodied in well-worn contract templates, refined over years of practice. Sharing these openly would dilute a key source of competitive advantage.

Legal tech firms are similarly tethered to their most lucrative customers. These customers—big firms and corporate counsel—demand tools that reinforce existing practices, not disrupt them. As a result, the tools that are being built tend to optimize proprietary workflows, not democratize legal infrastructure.

This leaves out the most underserved (and most likely to benefit) groups:
- Startups and small businesses.
- Freelancers and independent contractors.
- Civil society organizations and cooperatives.
- Everyday individuals navigating increasingly complex agreements.

These stakeholders **don’t have the economic power** to shift the market—but they are the ones for whom lower cognitive load and reusable legal artifacts would make the biggest difference.

### **Cognitive and Cultural Barriers**

Finally, there’s the challenge of legibility. **ProseObject-based legal templates look and feel unfamiliar** to most lawyers and completely foreign to most users. The idea of forking a legal agreement, modifying parameters, or navigating a version history of contractual language is not (yet) part of legal or civic culture.

This means that even with working prototypes, adoption friction remains high. Breakthrough use cases are required to demonstrate value and begin the process of acclimating lawyers and end-users alike to git-based legal infrastructure.

## Leading Indicators: Signs of a Legal Shift**

While mainstream adoption of open legal infrastructure remains elusive, there are clear signs that the conditions for it are emerging. **Breakthrough use cases**—where simplicity, standardization, and structured reuse have already driven major gains—suggest that the shift is not only possible, but in some domains, already underway.

### **The SAFE: A Viral Template for Startup Finance**

Perhaps the most recognizable example is the **SAFE (Simple Agreement for Future Equity)**, introduced by Y Combinator. The SAFE isn’t open source in the strict software sense, but it embodies many of the same principles:
- A **reusable, standardized agreement**.
- Recognized and accepted across a wide range of counterparties.
- Designed for clarity and ease of execution.

Because of its clarity and widespread adoption, the SAFE reduces friction for both founders and investors. It’s not that everyone reads every clause—it’s that they trust the pattern. The document becomes a **legibility shortcut**—an interface for shared expectations.

This is precisely the kind of confidence-producing artifact we aim to make more general and more modular through projects like Common Accord.

### **Crypto Legal Patterns: Code-Law Correspondence**

In the blockchain space, a new kind of legal practitioner has emerged: the **crypto lawyer**. These professionals draft legal agreements that correspond tightly with smart contracts—software artifacts with known execution behaviors and technical guarantees.

Frameworks like **MetaLeX** offer formalized mappings between legal text and smart contract logic, creating a level of **code-law correspondence** that mirrors the intent–execution–institutionalization model described earlier. These agreements are not only reusable but computationally verifiable.

While niche today, these practices foreshadow a future in which legal and software artifacts are co-developed and co-validated—helping ensure that agreements function as intended in both technical and legal domains.

### **Formal Specifications for AI Accountability**

As AI systems grow more powerful—and more opaque—the need for formal accountability mechanisms becomes increasingly urgent. This is where **Atlas Computing** enters the picture, not as a legal firm, but as a kind of **civil engineering lab for AI**.

Atlas approaches AI governance from a systems engineering perspective. In traditional engineering disciplines, a specification defines what a component or system is supposed to do. Verification ensures the system meets these specs through objective, technical assurances. Validation ensures that the system, when deployed, **actually performs** in alignment with the specified intent.

Atlas applies this same rigor to AI:
- **Specifications** define the intended behaviors, safety boundaries, or fairness metrics of a model or system.
- **Verification** methods check those claims using formal guarantees or structural properties of the code.
- **Validation** involves empirical observation and auditing to confirm that behavior matches intent.

This isn’t legal in the conventional sense, but it is **legibility work** of the highest order. And historically, this kind of work has been deeply entangled with the legal system: civil engineering, public infrastructure, and regulated industries all sit at the intersection of technical implementation and institutional accountability.

Where this becomes especially relevant is in the compatibility between formal specifications and **git-native legal documents**. Both:
- Serve as **intent-capturing artifacts**.
- Can be versioned, reviewed, and audited.
- Operate as interfaces between systems (whether technical or human) and institutional frameworks of accountability.

Atlas’s work shows that even in complex, dynamic systems like AI, we can specify, verify, and validate behavior. This reinforces the idea that legal code, too, can be more **structured**, **standardized**, and **aligned** with real-world execution—especially when built on the same epistemic foundation.

## **Practical Next Steps: Building the Legal Commons**

We’ve outlined the why, the how, and the what of open legal infrastructure. The ideas are sound. The protocol exists. The need is clear. What remains is the **work of building**—platforms, communities, and habits that can turn this model from a promising prototype into a living ecosystem.

Here are some practical next steps for different actors in this space:

### **Build Platforms That Lower Friction**

The most immediate need is **platforms that make git-native legal collaboration accessible**. This means:
- Interfaces that make it easy to **browse, customize, and instantiate agreements**.
- Views tailored to different users: **end users, lawyers, developers, adjudicators**.
- Support for **search, citation, and reuse tracking**—the legal equivalent of stars, forks, and pull requests.

We don’t need to reinvent GitHub—but we do need a GitHub for law.

### **Pilot Use Cases That Matter**

We need to seed **visible, valuable, and replicable** examples. These might include:
- Standardized agreements for freelancers and small businesses.
- Legal structures for DAOs, cooperatives, or mutual aid networks.
- Infrastructure templates for AI audits, software licenses, or open data use.

A few widely adopted templates could shift norms—just as the SAFE did in startup finance.

### **Bridge Legal and Technical Communities**

This movement will succeed when lawyers, developers, designers, and civic technologists can **collaborate as peers**. We need:
- Shared vocabularies (e.g. ProseObjects, types, templates).
- Co-authoring environments for legal/technical work.
- Joint working groups to map standard legal processes into structured formats.

This isn’t just cross-disciplinary—it’s a new discipline in the making.

### **Develop Validation Layers and Governance Models**

Trust in legal artifacts requires **process, not just access**. We need:
- Systems for legal **review, endorsement, and version control**.
- Models for **community governance**, including stewardship and dispute resolution.
- Ways to balance **openness with accountability**—especially where legal consequences are real.

This is the next evolution of peer production: legal artifacts maintained with the same care and community integrity as critical software libraries.

### **Fund the Commons**

Lastly, this work needs **investment**. Just as open source software has been supported by philanthropic funders, forward-thinking companies, and infrastructure grants, the legal commons needs:
- Funding for platform development.
- Support for documentation, training, and legal fellowships.
- Advocacy to make open legal code part of public infrastructure strategies.

## Conclusion

Agreements are the infrastructure of cooperation. They allow humans to align expectations, reduce uncertainty, and coordinate action—across relationships, systems, and institutions. And yet, the current experience of making agreements is marked by opacity, friction, and exclusion. The very artifacts that are meant to empower us—contracts, terms, policies—too often serve as barriers rather than bridges.

But we’re starting to see a way forward. By applying open source principles to legal infrastructure, we can make agreements modular, composable, and verifiable. We can lower the cognitive cost of forming shared expectations, while maintaining the legal rigor needed for real-world enforceability.

Common Accord offers a glimpse of what this future might look like: git-native legal code, structured and parameterized like software, backed by a protocol aligned with the epistemic commitments of law itself. The model works. What we need now are the platforms, the practices, and the communities to scale it.

This is not just a project. It’s a paradigm shift—from proprietary law to a shared infrastructure for agreements. From clickwrap to collaboration. From friction to flow.
The future of law can be modular, legible, and inclusive. We’re not waiting for permission. We’re writing it into the contract.