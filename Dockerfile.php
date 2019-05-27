FROM composer:latest

RUN set -x && \
        apk --no-cache add rsync && \
        composer global require deployer/deployer && \
        composer global require deployer/recipes