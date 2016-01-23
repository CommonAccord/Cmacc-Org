Cmacc Record Format:

Characteristics:

1. A List:

2. Ordered, but unnumbered

3. of Key/Values

4. where the value is either a snippet of text, or the identity of another List.

Canonical File Format

0. Pragmatically (Pierce and Holmes) what Primavera's parser uses, <i>except that the end of a record should be either two successive EOLs or an EOL, whitespace and EOF.</i>  This would allow greater flexibility in formating the source text for readability and use of html word processors.

1. Key/Value is delimited by start of line (SOL) and EOL.  

2. Separation between Key and Value is an equal sign ("=").  Spaces are permitted between = and key and value, but ignored.

3.  The identity of another List is its filename in the Cmacc directory, surrounded by "[" and "]". When the Value is another List, the Key may be an empty string.

4. Additional text may be included in the file, for documentation or otherwise.  It will be ignored.


Current Cmacc Parsing

1. The current canonical form is what happens with the "Print" view.

2. From a default field ("Model.Root" is the current unfortunate name), take its value, expand any Variables (spans of text beginning with "{" and ending with the next "}" ).

3. Expansion is done by seeking a Key whose name matches the name of the Variable and replacing the Variable (including the "{" and "}") with the Value.

4. In seeking the Key whose name matches, i) the "first" matching Key is used and other are ignored, ii) the order of search starts at the top of the current List, then - recursively, depth-first - goes through any referenced Lists, in the order in which they are presented.  For a referenced List, each Key in the List, and each Variable in any Value is <i>prefixed</i> with the name of Key that included the List (if the Key is an empty string, nothing is added as prefix). Prefixing is also recursive.

5. When seeking a match for a Variable that is prefixed, if no match is found, the last added prefix (the right-most one) is eliminated and the search for a match is done again.  This is also recursive, so that finally a match is sought for the bare Variable name.
 



