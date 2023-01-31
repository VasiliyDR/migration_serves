FROM php:7.4-cli

RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install mysqli

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

EXPOSE 9000

CMD ["tail", "-f", "/dev/null"]   