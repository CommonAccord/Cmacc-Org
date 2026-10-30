from pathlib import Path

from jinja2 import Environment, FileSystemLoader

# - one Jinja environment for every piece of markup: page templates and the macros in marks.html
# - autoescape on: plain data is escaped; corpus HTML is passed as Markup and inserted as written
pages = Environment(loader=FileSystemLoader(Path(__file__).parent / "templates"), autoescape=True)
marks = pages.get_template("marks.html").module
