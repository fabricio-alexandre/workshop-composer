FROM php:7.4.0-fpm

RUN apt-get update

RUN apt-get install -y \
      git \
      libzip-dev \
      unzip \
      && docker-php-ext-install zip

# BAIXA O COMPOSER
RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer

# DÁ A PERMISSAO PARA TODOS EXECUTAREM PARA TUDO QUE ESTÁ DENTRO DA PASTA COMPOSER
RUN chmod +x /usr/bin/composer

# ALTERA A PASTA DE TRABALHO DEFAULT
WORKDIR /php7

# COPIA ARQUIVO PARA O AMBIENTE
# COPY entrypoint.sh /usr/local/bin/entrypoint.sh
# # EXECUTA SCRIPT APÓS SUBIR O AMBIENTE
# ENTRYPOINT [ "sh", "/usr/local/bin/entrypoint.sh "]

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
ENTRYPOINT ["sh","/usr/local/bin/entrypoint.sh"]