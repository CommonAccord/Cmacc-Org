#!/usr/bin/env python3
"""Vet PyPI packages: latest release, Python support, license, GitHub activity."""

import json
import re
import sys
from urllib.request import Request, urlopen

TARGET_PYTHON = "3.14"


# - JSON from a public API; None on any failure so one bad package never stops the table
def get(url):
    try:
        with urlopen(Request(url, headers={"User-Agent": "cmacc-vet"}), timeout=20) as response:
            return json.load(response)
    except Exception:
        return None


# - PyPI facts for the latest release: version, upload date, Python range, target-version classifier
# - GitHub repo taken from the project's own URLs, when it lists one
def pypi(name):
    data = get(f"https://pypi.org/pypi/{name}/json")
    if not data:
        return None
    info = data["info"]
    files = data["releases"].get(info["version"], [])
    urls = " ".join((info.get("project_urls") or {}).values()) + " " + (info.get("home_page") or "")
    repos = re.findall(r"github\.com/([\w.-]+/[\w.-]+?)(?:\.git)?(?:/|\s|$)", urls)
    repo = next((r for r in repos if not r.startswith("sponsors/")), None)
    return {
        "name": info["name"], "version": info["version"],
        "released": max((f["upload_time"] for f in files), default="?")[:10],
        "python": info.get("requires_python") or "?",
        "target": "yes" if any(f"Python :: {TARGET_PYTHON}" in c for c in info["classifiers"]) else "not listed",
        "license": (info.get("license_expression") or info.get("license") or "?")[:18],
        "repo": repo,
    }


# - adoption and activity signals: stars, last push, archived flag
def github(repo):
    data = get(f"https://api.github.com/repos/{repo}") if repo else None
    if not data or "full_name" not in data:
        return "?", "?", "?"
    return f"{data['stargazers_count']:,}", data["pushed_at"][:10], "ARCHIVED" if data["archived"] else ""


# - one row per package; unknown packages reported, not fatal
def main(names):
    print(f"{'package':20} {'version':11} {'released':10} {'python':10} {'py' + TARGET_PYTHON:10} "
          f"{'license':18} {'stars':>8} {'pushed':10} repo")
    for name in names:
        facts = pypi(name)
        if not facts:
            print(f"{name:20} not found on PyPI")
            continue
        stars, pushed, archived = github(facts["repo"])
        print(f"{facts['name']:20} {facts['version']:11} {facts['released']:10} {facts['python']:10} "
              f"{facts['target']:10} {facts['license']:18} {stars:>8} {pushed:10} {facts['repo'] or '-'} {archived}")
    return 0


if __name__ == "__main__":
    sys.exit(main(sys.argv[1:] or ["fastapi"]))
