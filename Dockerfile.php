FROM composer:latest

RUN set -x && \
        apk --no-cache add rsync && \
        curl -LO https://deployer.org/deployer.phar && \
        mv deployer.phar /usr/local/bin/dep && \
        chmod +x /usr/local/bin/dep