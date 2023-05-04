FROM php:7.4-cli

RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install mysqli && apt-get install openssh-client -y
    
RUN groupadd --gid 1000 vasiliy \
  && useradd --uid 1000 --gid vasiliy --shell /bin/bash --create-home vasiliy
  

USER vasiliy
  
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

EXPOSE 9000

CMD ["tail", "-f", "/dev/null"]   
