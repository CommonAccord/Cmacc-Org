On Contract Drafting:

This site is dedicated to improving contracting.  We do that by improving contract drafting and collaboration.  We use a structured approach to document drafting and the sharing methods of software coders.

Everything here is open source.  You are free to copy and use.  We aim to be open in spirit as well - open to new ideas, differences of practice and opinion, language, languages, context.  We will however also seek to advance agreement by making specific suggestions.  These specific suggestions should be understood as "questions posed in the form of answers," or "tools, not rules."

In this introduction, we will touch very quickly on some basic problems of contract texts, then leap directly into an explanation of what we mean by a "structured" approach to legal documents.  We'll make specific recommendations.  Please take the recommendations and examples in the spirit in which they are offered -  as minimum viable solutions seeking to inspire improvement, contradiction, broadening, generalization.


Background:

Contract agreements are important.  They are a kind of "law of the parties" - expressing the expectations and providing for contingencies, most of which are unexpected and undesired by the parties.  Properly done, contracts clarify expectations, invite investigation, facilitate monitoring, and provide for effective resolution of disputes.

Making and managing contract agreements is a major concern of businesses and government agencies.  Drafting them is a core activity of lawyers. 


On Structure - Contract Agreements as Layers:

Contract agreementss are not literature - they are functional.  The purpose is to align expectations among the parties.  Most contracts relate to common transactions and the agreements can resemble one another.  For reasons that can be developed elsewhere, there is great advantage to consistency in organization, format and phrasing.

Drafting can be understood as layers.  At each layer, there is a list of issues to be addressed, and a variety of answers.

The most fundamental layer is the notion of a contract agreement document.  There are a few fundamentals.  An agreement document must contain:

i) a heading with title,

ii) identification of the parties,

iii) optionally a statement of background and objectives (why),

iv) a declaration of engagement,

v) the engagements,

vi) a declaration of signature,

vii) signatures, and

viii) attachments, if any.

In a structured system, this is expressed as an object - with a single link.  Drafting an agreement consists of completing this information.

=[G/Agt-Form-CmA/00/0.md]


The Outline of Engagements

We'll skip the parties information and whereas sections for the moment and go right to the main body of the agreement - the engagements.  The engagements are expressed as an outline, with sections and subsections.  It is very useful to have headings on the sections and on the subsections that are more than a line or two.

There is great variation in the organization of the outline of engagements.  Some prefer many sections - numbering up to 30 or even more.  Others prefer a few main headings with more extensive subsections.  A radical approach advocated by some is to organize all the content under just a few main headings based on the principal audience - the parties or their lawyers - in order to focus attention.  An extreme version of this is to have a short business agreement with a short but comprehensive statement of the transaction and a long annex of details and legal issues.  Inversely, in some circumstances, parties will sign a master agreement of general terms and then do actual business under purchase orders or statements of work.  At the extreme, this is how most of e-commerce is done - the customers accept terms of use and then do transactions.

All of these can different forms can be expressed as objects and the sections can be reused whatever the organization.  For purposes of this discussion we will assume a short top level of the outline, where the terms are organized into a few major topics based on the audience.  Basically, i) the business terms, ii) the business mechanics, iii) the legal mechanics and iv) the terms often called "Miscellaneous" that relate to the mechanics of the agreement itself.

=[G/Agt-License/Outline/0.md]

In addition, in longer, more formal agreements there is a section on "definitions."   Definitions play multiple roles in legal agreements.  Some provide a background and precision for terms used in the agreement.  An "Affiliate" of a party can for instance be defined with some precision to include or exclude small ownership interests in another company.  Some provide a shorthand for ideas developed in the agreement.  In some cases, defined terms act as what coders would call "parameters."  For instance, "Price" could be defined to be "$15,000" and "Delivery Date" could be defined as October 15, 2019.

There are also variations in where terms are defined.  In more formal agreements, there is often a section entitled "Definitions."  This is often the first section of an agreement because it establishes the vocabulary.  This has the inconvenience of making the reader wade through a list of definitions before getting to any actual engagement.  So sometimes the definitions are at the end of the agremeent or even as an attachment. But there is also a practice of defining terms in the course of the agreement and then dropping a parenthesis with the defined term (hereinafter "in-line").  Some agreements mix these approaches, with a tendency to define in-line terms that are used in particular sections of the agreement.  This occasionally raises the issue of "scope" - if a term is defined in-line in one section, does that meaning carry over to other sections?  It also can create inconvenience for the reader in finding the defined term, so sometimes the section of defined terms includes references to the sections in which in-line terms are defined.

We suggest that the definition section be at the beginning.

When using a defined term, it is common but not universal practice to use Initial Capitals for the Defined Term.  There is a hesitation to capitalize verbs as oppose to Nouns.  Of course, ambiguities can arise when the defined term is at the beginning of a sentence or when one defined term is immediately followed by another.

We propose a convention for defined terms.  All defined terms must be "parameterized", using Initial Caps.  The parameter is expressed as the defined term with a leading underscore and spaces replaced with underscores.  Hence {_Authorized_Representative}, anywhere that the defined term is used.

We also suggest a format for the definition.  A defined term should lead with the defined term in quotes, follow by "means".  For example:

Def.Authorized_Representative.sec="{_Authorized_Representative}" means ....


The third piece is the defined term parameter. It should be a link to the definitions.  Hence:

_Authorized_Representative=&lt; a  href="Def.Authorized_Representative.sec">Authorized Representative&lt;a>

Each defined term will appear as a link to the definition, wherever it is in the agreement.


Collaboration:

Git and GitHub enable a much more structured approach to contract drafting and to collaboration - both within a transaction and across the ecosystem of contract drafters.
