import sys
import json

dummy = {"metadata" : "meta", "render_tree" : "render"}
print(json.dumps(dummy))
sys.stdout.flush()