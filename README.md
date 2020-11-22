## Como começar

Baixe/clone este repositório e execute os passos de instalação abaixo.

### Pré-Requisitos

- PHP versão >= 7.4
- Composer
- MySQL versão >= 5.7
- NodeJS e NPM/Yarn

### Instalação

A partir da raiz do projeto, você terá que seguir os passos abaixo para que tudo funcione da devida forma.


### Dependências

**Instalar dependências da parte do PHP:**
```
composer install
```

**Criar um arquivo `.env` na raiz do projeto contendo suas conexões de banco de dados.**

Neste repositório há um exemplo de `.env` em `.env.example` se preferir renomeie o arquivo de `.env.example` para `.env` e faça a configuração do banco de dados.

- DB_CONNECTION=*mysql*
- DB_HOST= *host que está rodando seu banco de dados ex: 127.0.0.1* 
- DB_PORT=*3306*
- DB_DATABASE= *nome do seu banco de dados*
- DB_USERNAME= *usuário*
- DB_PASSWORD= *senha*

**Criar a estrutura do banco de dados.**

Após configurar o `.env`, execute o comando abaixo para criar toda estrutura do banco de dados do projeto:

```
php artisan migrate
```
**Popular o banco de dados**

Para popular o bando de dados, execute o comando:
```
php artisan db:seed
```
Com o comando acima, foi criado um usuário padrão, sinta-se livre para usa-lo.

- usuário = *john.doe@example.com*
- Senha = *123* 

**Rodar servidor**

Executar o comando abaixo para iniciar o servidor do backend:
```
php artisan serve --host=127.0.0.1
```
## Ir ao repositório do [Travel Guide front-end](https://github.com/japostulo/travel-guide) e seguir o readme

**Visualizando o projeto**

<!-- Caso não esteja utilizando o docker do projeto, aponte a pasta `public/` desta aplicação para seu webserver favorito, abaixo segue um exemplo utilizando o webserver embutido do php:
```
// a partir da raiz do projeto
$ php -S 127.0.0.1:8000 -t public/
```

E acesse em seu navegador a url `http://localhost:8000`.

Caso esteja utilizando o docker provido:
```
// a partir da raiz do projeto
$ docker-compose up -d // inicia os containers em background
```
E acesse em seu navegador a url `http://jetstream.test` -->


## Autores

* **João Apostulo Neto** - [Github](https://github.com/japostulo)

## Licença

Este projeto é licenciado através da MIT License.
