import re

thisDict = {
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
    "Model.Root": "{96} bottles of {Favored Beverage} on the {House Element}.",
    "Favored Beverage": "b{i}r",
    "House Element": "{wl}",
    "i": "ee",
    "wl": "wall"
}

thisDict["Model.Root"]


def find_value(key):
    value = thisDict[key]
    search = [x.group() for x in re.finditer(r'{(.*?)}', value)]
    
    # End case
    if len(search) == 0:
        return value
    
    else:
        for i in range(len(search)):
            new_val = find_value(search[i][1:-1])
            value = value.replace(search[i], new_val, 1)
        return value

find_value("Model.Root")

