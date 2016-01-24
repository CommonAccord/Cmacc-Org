Ti=Cmacc

1.sec=Cmacc is pronounced "Smack."   It is the informal name for the CommonAccord object model.  

2.0.sec=The core is a list (List) of key/values (Key/Value), where a Value can be the name of another List.  For instance:

2.1.sec=[Dx/Acme/01-AngelRound/01-SAFE-Robinson_v0.md]

2.2.sec=[S/Sandbox/Blockchain/TransactionRecordQw3rty01.md]

2.=[Z/ol/s2]

3.sec=Many Lists can be rendered into a text (Doc) by starting with one Key ("Model.Root") and expanding any strings {wrapped in braces} (Variable). 

4.sec=The expansion is based on matching the Variable string with the first matching Key name.

5.sec=A [Name_of_Another_List] is matched with the file name.  This is as if the List in that file was copied into the current List.

6.sec=The only other feature is "prefixing," of included Lists, which is not hard, but easier to understand by looking.  All the features are in this List and in each of the Lists above.

=[Z/ol/s6]