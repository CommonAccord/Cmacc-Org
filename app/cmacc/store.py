import posixpath

import fsspec


# - template store behind fsspec: a local directory today, object storage by URL later
class Store:
    # - root from a path or fsspec URL (file://, s3://, az:// with the matching plugin installed)
    def __init__(self, url):
        self.fs, self.root = fsspec.core.url_to_fs(url)

    # - store-relative path; anchoring at "/" before normalizing keeps ".." inside the store
    def path(self, rel):
        rel = posixpath.normpath("/" + rel).lstrip("/")
        return posixpath.join(self.root, rel) if rel else self.root

    # - bytes as text; undecodable bytes survive the round trip (surrogateescape)
    def read(self, rel):
        path = self.path(rel)
        if not self.fs.isfile(path):
            raise FileNotFoundError(rel)
        return self.fs.cat_file(path).decode("utf-8", "surrogateescape")

    # - legacy save semantics: existing files only
    def write(self, rel, text):
        path = self.path(rel)
        if not self.fs.isfile(path):
            raise FileNotFoundError(rel)
        self.fs.pipe_file(path, text.encode("utf-8", "surrogateescape"))

    # - folder entries as (name, is_dir), sorted like a directory listing
    def listdir(self, rel):
        entries = self.fs.ls(self.path(rel), detail=True)
        return sorted(
            (posixpath.basename(e["name"].rstrip("/")), e["type"] == "directory") for e in entries
        )

    def isdir(self, rel):
        return self.fs.isdir(self.path(rel))

    def isfile(self, rel):
        return self.fs.isfile(self.path(rel))
