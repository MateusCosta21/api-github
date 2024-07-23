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

Execute o sh abaixo para subir os serviços referente ao projeto

```sh
./setup.sh
```


Pronto, agora o back-end da aplicação está funcional, basta configurar o front. (Importante deixar na mesma porta)
