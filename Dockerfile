FROM nginx:latest

RUN apt-get update && apt-get install -qq curl \
    gnupg \
    libpython-stdlib libpython2.7-minimal libpython2.7-stdlib nodejs python \
    python-minimal python2.7 python2.7-minimal

RUN curl -sL https://deb.nodesource.com/setup_6.x | bash - && \
    apt install -qq nodejs
#RUN curl -s https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add - && \
#    echo "deb https://deb.nodesource.com/node_7.x stretch main" > /etc/apt/sources.list.d/nodesource.list

RUN apt-get install -qq php7.0-fpm \
        php7.0-mbstring \
        php7.0-dom \
        git \
        bzip2 \
        php7.0-zip

# Composer Install
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

EXPOSE 8081
