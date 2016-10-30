DOCKER_IMAGE ?= commonaccord
DOCKER_CONTAINER_NAME ?= commonaccord
DOCKER_HTTP_PORT ?= 8080
DOCKER_IP_ADDR ?= $(shell docker-machine ip || echo '127.0.0.1')
DOCPATH ?= $(shell pwd)/Doc

.PHONY: start stop image

start: image
	docker run -d --name=$(DOCKER_CONTAINER_NAME) --volume $(DOCPATH):/var/www/html/Doc -p $(DOCKER_HTTP_PORT):80 $(DOCKER_IMAGE)

stop:
	docker stop $(DOCKER_CONTAINER_NAME)
	docker rm $(DOCKER_CONTAINER_NAME)

open:
	open http://$(DOCKER_IP_ADDR):$(DOCKER_HTTP_PORT)

image:
	docker build -t $(DOCKER_IMAGE) .
