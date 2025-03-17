
# 🐳 Setup Docker para Laravel 10 com PHP 8.1  

Este repositório contém um ambiente pré-configurado para rodar **Laravel 10** com **PHP 8.1** utilizando **Docker** e **Docker Compose**.  

## 🚀 Tecnologias utilizadas  
- **Laravel 10**  
- **PHP 8.1**  
- **Docker**  
- **Docker Compose**  
- **MySQL/PostgreSQL** *(opcional, conforme configuração)*  
- **Nginx/Apache** *(dependendo da configuração escolhida)*  

## 📌 Pré-requisitos  
Antes de iniciar, certifique-se de ter instalado:  
- [Docker](https://www.docker.com/)  
- [Docker Compose](https://docs.docker.com/compose/)  

## ⚡ Como usar  
Clone Repositório
```sh
git clone https://github.com/devluciano/curso-laravel-10.git
```
```sh
cd curso-laravel-10
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Curso Laravel 10"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)
