# Geral
Telegram: GOPHP, PHPSP

Dados sensíveis do sistema devem ficar em variaveis de ambiente


Composer cria a pasta vendor

Não versionar pasta vendor e pastas maiores

Conhecer PHP-FIG

"cd -" Volta para a pasta anterior

Packgist - Agrega os repositorios

Docker Hub: Agrega imagens docker

---

# Docker
docker-compose exec php7 bash (Acessa o ambiente docker)
docker-compose exec php7 date
docker-compose exec php7 -v

docker-compose build (compila o Dockerfile)
docker-compose up (sobe o ambiente docker)

---

# Composer

docker-compose exec php7 composer require vlucas/phpdotenv -vvv (Adiciona uma dependencia - o "-vvv" liga o verbose no modo porreta)

composer require (Adiciona nova dependencia)
composer install (Baixei o projeto e quero instalar)

sudo chown -R $USER:$USER ~/.composer (Altera o usuario e grupo do owner da pasta)