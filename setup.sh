#!/bin/bash

# Copia o arquivo docker-compose-example para docker-compose.yml
cp docker-compose-example.yml docker-compose.yml

# Inicia os containers em modo detached
docker-compose up -d

# Espera alguns segundos para garantir que o banco de dados esteja pronto
sleep 10

# Acessa o container
docker exec -it laravel-api bash -c "
    # Gera o arquivo .env
    cp .env.example .env

    # Altera o DB_HOST no arquivo .env para o serviço 'db'
    sed -i 's/DB_HOST=127.0.0.1/DB_HOST=db/' .env

    # Instala as dependências do Composer
    composer install

    # Dá permissões para as pastas necessárias
    chmod -R 777 storage/

    # Roda as migrations e gera a chave da aplicação
    php artisan migrate
    php artisan key:generate
"