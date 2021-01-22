Nested Collaboration:

An inter-business negotiation will often involve a tree of conversations:

The two parties will have a channel between them, often two or more channels, led by the lead lawyer for each side, by the lead business persons, by the lead technical persons.  

Each of the lead persons will often rely on others within their organization or in outside consultancies (e.g. law firms).  

There will be drafts and proposed modifications made within those internal groups which will be vetted, tweeked, discarded, saved, by the lead. 

And each of these pods of conversation may have sub-pods.  The law firm may have a team that works together and only the lead lawyer at the firm directly communicates new materials to the client.  Same within engineering, marketing, etc.

                   Party1    <---->    Party2
                _____|_____
               |           |
            BusLead      LegalLead 
        _____|______     ______|______
        |          |     |           |
        Bus2      Bus3   InHouse    Law Firm Lead
        ..         ..      ..        _____|______
                                     |          | 
        ..         ..      ..       Lawyer2    Lawyer3


Git enables this kind of nested collaboration.  It will be important to do some examples and figure out good practices. 

I currently use an improvised method of nesting git repos.  It _might_ be that we should use git submodules instead.  https://git-scm.com/book/en/v2/Git-Tools-Submodules
