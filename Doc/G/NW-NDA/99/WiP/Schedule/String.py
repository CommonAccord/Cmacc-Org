import re

thisDict = {
    "path": "thisDict",
    "2": "2",
    "3": "3",
    "5": "5",
    "7": "7",
    "2 x 2": "{2} x {2}",
    "3 x 2": "{3} x {2}",
    "4": "{2 x 2}",
    "6": "{3 x 2}",
    "8": "{2 x 2} x {2}",
    "16": "{2 x 2} x {2 x 2}",
    "96": "{16} x {6}",
    "thisr00t": "thisr00t: {96} bottles of {Favored Beverage} on the {House Element}{period}",
    "r00t": "{thisr00t}",
    "period": "." ,
    "Favored Beverage": "b{i}r",
    "House Element": "{wl}",
    "i": "ee",
    "wl": "wall"
}

thatDict = {
    "path": "thatDict",
    "13": "13",
    "13 x 13": "{13} x {13}",
    "169": "qqq {16}",
    "thatr00t": "thatr00t: {169} books on the {House Element}-mounted {Furniture}.",
    "r00t": "{thatr00t}",

    "Furniture": "b{u}kshelves",
    "u": "oo"
}

anotherDict = {
    "path": "anotherDict",
    "11": "11",
    "11 x 11": "{11} x {11}",
    "121": "{11 x 11}",
    "anotherr00t": "anotherr00t: {121} bottles of b{i}r and {Favored Beverage} on the {Furniture}.",
    "Favored Beverage": "whiskey",
    "megar00t" : "{thisr00t} ... {thatr00t} ... {anotherr00t}",
    "r00t": "{anotherr00t}"
}

directory = [thisDict, thatDict, anotherDict]


#When there are more than one identical key throughout dictionaries: prioritizes current dict for now -> Later how?
#Limitation: We only go through dictionaries in the order given in directory; the first key we find will be used, always
#Had to add "path" field to all dictionaries to keep track of pathname -> had no way to print out the name of dictionary without using globals() = bad practice

def find_value(dictionary, key):
    
    #Case when the key does not exist in this dictionary
    if key not in dictionary:
        for x in range(len(directory)):
            if directory[x] != dictionary and key in directory[x]:
                return find_value(directory[x], key)
            
        #When the key does not exist in any of dictionaries
        raise KeyError ("Key not found in directory")
    
    #Case when the key does exist in this dictionary
    else:
        value = dictionary[key]
        search = [x.group() for x in re.finditer(r'{(.*?)}', value)]
        path = "{" + key + "}" + " from: " + dictionary["path"] + "\n"

        # End case
        if len(search) == 0:
            return value, path

        else:
            for i in range(len(search)):
                new_val, new_path = find_value(dictionary, search[i][1:-1])
                value = value.replace(search[i], new_val, 1)
                path += new_path
            return value, path

value, path = find_value(thisDict, "megar00t")

print("Value: ", value)

print("Path:\n", path)


#Called inside find_value when there is no such key in the given dictionary input
#Find the key from other dictionaries, keep log of which path; return
# def fetch_value(dictionary, key):