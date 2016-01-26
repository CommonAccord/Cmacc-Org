Ti=Cmacc

1.sec=Cmacc is pronounced "Smack."   It is the informal name for the CommonAccord object model.  

2.0.sec=The core is a list (List) of key/values (Key/Value), where a Value can be either a string or the name of another List.  For instance:

2.1.sec=Model.Root={HW}

2.2.sec=HW=Hello World

2.3.sec==[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]

2.4.sec=Buyer.=[U/id/acme_incorporated]

2.=[Z/ol/s4]

3.sec=Many Lists can be rendered into a text (Doc) by starting with one Key ("Model.Root") and expanding any {strings wrapped in braces} (Variable). 

4.sec=The expansion is based on matching the Variable string with the first matching Key name.

5.sec=A [Path/Name_of_Another_List] is matched with a file path and name.  The effect is is as if the List in that file was copied into the current List.

6.sec=The only other feature is "prefixing," of included Lists, which is not hard to do, but best understood by looking.  All the features are in this List and in each of the Lists above.

=[Z/ol/s6]