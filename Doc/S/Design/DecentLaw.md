# DecentLaw.org: problem breakdown and libraries

- Goal: a foundation and steering group for global legal interoperability based on open standards and shared libraries. 
- Principle: libraries wherever possible; custom code only where no library fits
- Only open-source libraries that are currently active and widely adopted
- Status: in planning and early development

## The problem

- Context: the existing legal corpus consists of multitudes of documents in various formats - from Word and PDF for most one-off documents to inconsistent web-based documents for "primary" law - legislation, regulations, and case law. These are both highly repetitive and highly heterogeneous, making consistent representation, resolution, and analysis impossible.


- Thesis: Legal documents should be treated as interconnected text objects in a graph with structured key/value content, facilitating consistent resolution and rendering across different views.

- Thesis: The "ProseObject" format of CommonAccord.org suggests a pathway for structuring and linking these text objects consistently.  The proto-type inheritance model allows extensive reuse of text, while also enabling modifications and extensions without altering the original content.

- Thesis: The methods and tools of open source software development should be leveraged for building, publishing, maintaining, and evolving the system, ensuring transparency, collaboration, and community-driven improvements.

- Thesis: The system should be designed to accommodate future extensions and evolving requirements without breaking existing functionality. The system should provide robust error handling and reporting to facilitate debugging and ensure reliability. The system should provide mechanisms for versioning and tracking changes to text objects to support auditability and historical analysis. The system should provide mechanisms for access control and permissions to ensure secure handling of text objects. The system should provide mechanisms for caching and performance optimization to ensure efficient handling of large numbers of text objects. The system should provide mechanisms for logging and monitoring to facilitate operational oversight and performance analysis. The system should provide mechanisms for testing and validation to ensure correctness and maintain confidence in its behavior. The system should provide mechanisms for configuration and customization to allow adaptation to different environments and user requirements. The system should provide mechanisms for security and privacy to protect sensitive information and ensure compliance with relevant regulations. The system should provide mechanisms for scalability to handle increasing volumes of text objects and user requests efficiently - this might include conversion of text objects into more efficient representations or distribution across multiple processing nodes. The system should provide mechanisms for interoperability to enable integration with other systems and tools.

- Thesis: The platform of GitHub can serve as a collaboration and publication environment for managing and versioning text objects, facilitating distributed development and review processes.

- Thesis:  Perhaps the system should be extended to allow directly referencing materials in repos hosted on GitHub.

- Thesis:  The format of plain lists of parameters and references is useful as the canonical version of materials because it can be used in exchanges among parties, for instance even in email, as well as being compatible with git. 


## Functional parts

- Paradigm:  A canonical statement of the rendering process for text objects, capturing the essential steps from request handling to final HTML response.

- Software:  A canonical implementation of the rendering process for text objects, following the paradigm and supporting the functional parts outlined above. With modularity enabling independent development, testing, and replacement of components.

- Legal Content Onboarding:  The process of ingesting and structuring legal content into the system, ensuring that text objects are correctly parsed, resolved, and made available for rendering and analysis.  Notably, software to convert Word documents and other formats into the system's canonical text object format, using naming conventions compatible with important parts of the existing corpus. There should be a particular focus on "model documents" prepared by legal experts to serve as templates for consistent and accurate content representation.  Where model documents are offered as a set, the onboarding process should handle them collectively, ensuring that relationships and dependencies between documents are correctly maintained.  (See, notably the https://nvca.org/model-legal-documents/ and https://github.com/CommonAccord/Cmacc-Org/tree/master/Doc/G/NVCA/2020.) The system should also accommodate updates and revisions to legal content, maintaining version control and ensuring that changes propagate correctly through dependent text objects.  The onboarding process should include validation steps to ensure the integrity and completeness of the ingested content, as well as mechanisms for handling errors and inconsistencies gracefully. The resulting ProseObjects should be traceable to the Word/PDF original sources.  The conversion process should default to creating a separate repo on GitHub for each ingested document set, with the possibility for the originating organization to "own" and manage the repository.

- Legal Content Cross-Usage:  The system should facilitate the reuse and referencing of legal content across different documents and contexts. This includes mechanisms for linking text objects, managing dependencies, and ensuring consistency when content is shared or updated. Cross-usage capabilities should support both intra-repository and inter-repository references, enabling efficient content management and reducing duplication of effort. The system should also provide tools for tracking and resolving conflicts that may arise from concurrent modifications to shared content.  For instance, the dispute resolutions provisions of the NVCA materials should instead draw from materials proposed by model terms proposed by groups like the arbitration associations and other specialized organizations. Existing model document projects provde vast opportunities for refactoring/cross-usage. 

- Legal Content Inventory:  It would be useful to create an inventory of model document and model ontology projects.  The collection of ProseObjects at /Doc/G/ provide examples of relevant content.

- Interfaces: The system should provide: 1) an interface that is closely aligned with the workflow of software coders because this is well-tested, powerful, and familiar to coders; 2) an API to make the corpus easily used as a legal text source by transactiong systems and legal tech solutions; and 3) a user-friendly interface for creating and managing common legal documents.

- Document Conventions:  The system should encourage consistent conventions for structuring and naming text objects, ensuring clarity, uniformity, and ease of navigation. This includes guidelines for file organization, section naming patterns, {_Defined_Term}s, {CrossReference.Xnum}s, section and subsection formatting of the type in /Doc/G/Z/ and metadata usage, facilitating efficient content management, cross-usage and retrieval.

- Legal Ontology:  Tools in the system should support the creation, management, and utilization of common legal ontologies. The structured representation of legal concepts, relationships, and rules within the system, enabling consistent interpretation, reasoning, and analysis of legal content. The ontology should support the mapping of text objects to legal concepts, facilitate automated reasoning over legal content, and provide a foundation for advanced features such as compliance checking, contract analysis, and knowledge extraction.

- 