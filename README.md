# Integração api github
## Contexto
Implementar em laravel api do github para integrar um frontend Angular


## Tecnologias

- Laravel - Laravel é um framework PHP de aplicações web com sintaxe expressiva e elegante.
- PostgreSQL - Um sistema open-source de gerenciamento de base de dados relacional.
- Docker(Com Apache, Nginx e NodeJS) - O Docker permite que você separe seus aplicativos de sua infraestrutura para que você possa entregar software rapidamente.

## Instalação

##### Requisito obrigátorio
Antes de tudo você precisa ter o docker e o docker-compose e também o git.
Caso não tenha instalado, aqui alguns links de referência:
- Aqui encontra os passos para instalação do Docker => https://docs.docker.com/get-docker/ 
- Aqui encontra os passos para instalação do Docker Compose => https://docs.docker.com/compose/ 
- Aqui encontra os passos para instalação do git => https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

##### Clone o projeto
Com o git instalado e em um diretório da sua escolha, baixe o projeto:

```sh
git clone https://github.com/MateusCosta21/api-github
```



##### Suba o serviço

Primeiro copie o docker-compose-example para conseguir executar o container
```sh
cp docker-compose-example.yml docker-compose.yml
```

Em seguida, com o Docker-compose instalado, execute esse comando na raiz do projeto:

```sh
docker-compose up -d
```

##### Acesse o container
Com o container rodando, execute esse comando na raiz do projeto:

```sh
docker exec -it laravel-api bash
```
##### Configure o .env
Se não tiver alterado nada, o .env ja vai estar configurado depois de rodar o seguinte comando:

```sh
cp .env.example .env
```

##### Instale as dependências
Agora você pode executar:

```sh
composer install
```

##### Dê permissões as pastas necessárias
São elas storage/logs e storage/framework, como estamos num ambiente de testes vamos dar todas as permissões, apenas execute:

```sh
chmod -R 777 storage/logs storage/framework
```

##### Pra finalizar vamos rodar as migrations, a seeder e gerar a chave da aplicação
Caso não tenha alterado credenciais nos arquivo do docker basta rodar os comandos de sempre:

```sh
php artisan migrate
```

```sh
php artisan key:generate
```

Pronto, agora o back-end da aplicação está funcional, basta configurar o front. (Importante deixar na mesma porta)
