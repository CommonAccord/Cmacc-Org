# Templates image: the corpus only. Deployed next to the renderer; an init
# container copies it into the Pod's working volume. Build from the repo root:
#   docker buildx build -f infra/templates.Dockerfile .
FROM busybox:1.37.0@sha256:9db7b59979c38555a39def84a31fb98b5296952f9e3afd4f6f11f05b07adfab0

COPY Doc/ /templates/Doc/
COPY File/ /templates/File/
USER 65532:65532
CMD ["sh", "-c", "cp -R /templates/. /data/"]
