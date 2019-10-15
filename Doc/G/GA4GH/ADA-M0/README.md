# ADA-M [![](https://travis-ci.org/ga4gh/ADA-M.svg?branch=develop)](https://travis-ci.org/ga4gh/ADA-M) [![](https://img.shields.io/badge/license-Apache%202-blue.svg)](https://raw.githubusercontent.com/ga4gh/ADA-M/develop/LICENSE)

The Automatable Discovery and Access Matrix (ADA-M) provides a standardized way to unambiguously represent the conditions related to data discovery and access. By adopting ADA-M, data custodians can generally describe what their data are (the Header section), who can access them (the Permissions section), terms related to their use (the Terms section), and special conditions (the Meta-Conditions). By doing so, data custodians can participate in data sharing and collaboration by making meta information about their data computer-readable and hence directly available for digital communication, searching and automation activities.

The ADA-M standard began development in late 2015 with the participation of over 50 volunteers form academia and industry and the first version (version 1.0) completed in late 2016. More about ADA-M is available on the [Regulatory and Ethics Toolkit page](https://www.ga4gh.org/ga4ghtoolkit/regulatoryandethics/).

## OpenAPI

This repository is focussed on providing an API implementation of ADA-M version 1.0 using [OpenAPI Specifications](https://github.com/OAI/OpenAPI-Specification) to describe how to interface ADA-M API services. 

## Overview of the ADA-M meta description sections

ADA-M aims to help data custodians assign a discovery and access 'Profile' to their dataset by stipulating formally and in a machine-readable way the conditions for access to these data. The following describes the four sections that comprise the fields according to ADA-M version 1.

### Header Section

The Header section is used to generally describe the source of the data and what they are. The Protocol Buffer .proto description of ADA-M is defined according to the following 11 Header section fields:

- `matrixName` a string describing the custom name of the matrix                             
- `matrixVersion` a string the version of the matrix e.g., "1.0"
- `matrixReferences` an array of strings to state any reference to this matrix e.g., publications, URLs, DOIs for the matrix (there can be many).
- `matrixProfileCreateDate` a string describing the creation date of this matrix.
- `matrixProfileUpdates` an array of ProfileUpdates describing the date and description of any updates made to the fields of this matrix (there can be many).
- `resourceName` a string describing the name of the data resource this matrix relates to.
- `resourceReferences` an array of strings describing to state any existing reference to the data resource e.g., publications, URLs, DOIs for the resource (there can be many).
- `resourceDescription` a string description of the data resource.
- `resourceDataLevel` an option to define the type of level of the data resource (either UNKNOWN, DATABASE, METADATA, SUMMARISED, DATASET, RECORDSET, RECORD, or RECORDFIELD)
- `resourceContactNames` an array of Contact describing the name and email of the contacts (there can be many) for the data resource.
- `resourceContactOrganisations` an array of strings describing the organisation that is the custodian of the data resource.

### Profile Section

The Profile section is used to describe the individual or organisation profile for the data requestor. 

- `country` an Unlimited or Limited option setting
- `allowedCountries` an array of country names allowed to access this data

- `organisation` an Unlimited or Limited option setting
- `allowedOrganisations` an array of country names allowed to access this data

- `nonProfitOrganisation` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedNonProfitOrganisations` an array of non-profit organisations allowed to access this data

- `profitOrganisation` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedProfitOrganisations` an array of for-profit organisations allowed to access this data

- `person` an Unlimited or Limited option setting
- `allowedPersons` an array of persons allowed to access this data

- `academicProfessional` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedAcademicProfessionals` an array of academic professional types allowed to access this data

- `clinicalProfessional` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedClinicalProfessionals` an array of clinical professional types allowed to access this data

- `profitProfessional` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedProfitProfessionals` an array of for-profit professional types allowed to access this data

- `nonProfessional` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedNonProfessionals` an array of non professional types allowed to access this data

- `nonProfitPurpose` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedNonProfitPurposes` an array of non-profit purposes allowed for this data

- `profitPurpose` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedProfitPurposes` an array of for-profit purposes allowed for this data

- `researchPurpose` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedResearchPurposes` an array of research purposes allowed for this data
- `allowedResearchProfiles` an array of research types allowed to access this data

- `clinicalPurpose` an Unlimited, Limited, Unlimited Obligatory, Limited Obligatory, or Forbidden option setting
- `allowedClinicalPurpose` an array of clinical purposes allowed for this data
- `allowedClinicalProfiles` an array of clinical types allowed to access this data

### Terms Section

The Term section is used to describe the terms or conditions under which a data requestor must abide to with respect to the use of the data.

- `noAuthorizationTerms` boolean value, if true then no authorization terms must be met by requestor
- `whichAuthorizationTerms` an array of strings describing any authorization terms

- `noPublicationTerms` boolean value, if true then no publication terms must be met by requestor
- `whichPublicationTerms` an array of strings describing any publication terms

- `noTimelineTerms` boolean value, if true then no timeline terms must be met by requestor
- `whichTimelineTerms` an array of strings describing any timeline terms

- `noSecurityTerms` boolean value, if true then no security terms must be met by requestor
- `whichSecurityTerms` an array of strings describing any security terms

- `noExpungingTerms` boolean value, if true then no data expunging terms must be met by requestor
- `whichExpungingTerms` an array of strings describing any data expunging terms

- `noLinkingTerms` boolean value, if true then no data linking terms must be met by requestor
- `whichLinkingTerms` an array of strings describing any data linking terms

- `noRecontactTerms` boolean value, if true then no recontact terms must be met by requestor
- `allowedRecontactTerms` an array of strings describing any recontact terms
- `compulsoryRecontactTerms` an array of strings describing any compulsory recontact terms
  
- `noIPClaimTerms` boolean value, if true then no intellectual property claim terms must be met by requestor
- `whichIPClaimTerms` an array of strings describing any intellectual property claim terms
  
- `noReportingTerms` boolean value, if true then no reporting terms must be met by requestor
- `whichReportingTerms` an array of strings describing any reporting terms

- `noCollaborationTerms` boolean value, if true then no collaboration terms must be met by requestor
- `whichCollaborationTerms` an array of strings describing any collaboration terms

- `noPaymentTerms` boolean value, if true then no payment terms must be met by requestor
- `whichPaymentTerms` an array of strings describing any payment terms

### Meta-Conditions Section

The Meta-Conditions section is used to describe aspects of the data that have to do with how the matrix should be used and othe special conditions.

- `sharingMode` option to select the mode of data sharing among: Unknown, Discovery, Access, Discovery and Access
- `multipleObligationsRule` the intepretation rule if multiple obligatory profiles are specified.
- `noOtherConditions` boolean value to state if there are no other use restrictions/limitations in force which are not herein specified.
- `whichOtherConditions` an array of strings describing other permissions/limitations that may apply as specified.
- `sensitivePopulations` boolean value to state if there is a special evaluation required for access requests involving sensitive/restricted populations.
- `uniformConsent` boolean value to state if identical consent permissions have been provided by all subjects

