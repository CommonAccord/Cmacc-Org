from pydantic_settings import BaseSettings, SettingsConfigDict


# - everything deployment-specific, from CMACC_* environment variables
# - store: template store as a local path or fsspec URL
# - files / static: supporting materials and images
# - repo_url empty = GitHub and Compare links hidden
# - remote includes: fetched in memory with a timeout, or disabled
class Settings(BaseSettings):
    model_config = SettingsConfigDict(env_prefix="CMACC_")

    store: str = "Doc"
    files: str = "File"
    static: str = "."
    landing: str = "S/About/Landing3.md"
    repo_url: str = ""
    repo_branch: str = "master"
    remote_includes: bool = True
    remote_timeout: float = 20
