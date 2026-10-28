# Python renderer. Build from the repository root:
#   docker buildx build -f app/Dockerfile .
# Templates are not in this image; they come from the templates image at runtime.
FROM python:3.14.7-slim-bookworm@sha256:82bc3c539b8813ada9d68c63b40158fa002f7f33de9bf3312a3dfdc0620dff56 AS app

WORKDIR /app
ENV PYTHONDONTWRITEBYTECODE=1 PIP_DISABLE_PIP_VERSION_CHECK=1
COPY app/requirements.txt ./
RUN pip install --no-cache-dir --require-hashes --no-deps -r requirements.txt
COPY app/cmacc ./cmacc
COPY png/ static/png/
COPY image/ static/image/
COPY vendor/png/ static/vendor/png/

ENV CMACC_STORE=/data/Doc CMACC_FILES=/data/File CMACC_STATIC=/app/static
USER 65532:65532
EXPOSE 8080
CMD ["uvicorn", "cmacc.main:app", "--host", "0.0.0.0", "--port", "8080"]

# Test stage: same app plus test tools and tests; run with the corpus mounted read-only.
FROM app AS test
USER root
COPY app/requirements-test.txt ./
RUN pip install --no-cache-dir --require-hashes --no-deps -r requirements-test.txt
COPY app/pyproject.toml ./
COPY app/tests ./tests
USER 65532:65532
CMD ["python", "-m", "pytest", "-q", "-p", "no:cacheprovider", "tests"]
