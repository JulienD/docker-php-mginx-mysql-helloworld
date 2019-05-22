# Docker PHP7-FPM - NGINX - MySQL

## Installation

1. Create a `.env` from the `.env.dist` file. Adapt it according to your application

    ```bash
    cp .env.dist .env
    ```

2. Build/run containers with (with and without detached mode)

    ```bash
    $ docker-compose build
    $ docker-compose up -d
    ```

3. Update your system host file (add app.localhost)

4. Go to app.localhost

## Usage

Just run `docker-compose up -d`

## How it works?

Have a look at the `docker-compose.yml` file, here are the `docker-compose` built images:

* `mysql`: This is the MySQL database container,
* `php-fpm`: This is the PHP-FPM container in which the application volume is mounted,
* `nginx`: This is the Nginx webserver container in which application volume is mounted too,

This results in the following running containers:

```bash
$ docker-compose ps
Name                          Command               State              Ports            
--------------------------------------------------------------------------------------------------
helloworld_mysql   docker-entrypoint.sh mysqld     Up      3306/tcp
helloworld_nginx   nginx -g daemon off;            Up      0.0.0.0:80->80/tcp
helloworld_php     docker-php-entrypoint php-fpm   Up      9000/tcp      
```

## Useful commands

```bash
# bash commands
$ docker-compose exec php-fpm bash

# MySQL commands
$ docker-compose exec mysql mysql -uroot -p"root"

# Check CPU consumption
$ docker stats $(docker inspect -f "{{ .Name }}" $(docker ps -q))

# Stop all containers
$ docker-compose stop

# Delete all containers
$ docker-compose rm 
```