docker-symfony
==============

* Based on : @eko/docker-symfony ! 
* Added Symfony 3,3 with FOSUserBundle
* Added Phpmyadmin
* Removed Elk
* Fixing PhpSession with docker

# Installation

First, clone this repository:

```bash
$ git clone git@github.com:langyx/SimpleSymfony3Docker.git
```

Next, put your Symfony application into `symfony` folder and do not forget to add `symfony.dev` in your `/etc/hosts` file.

Make sure you adjust `database_host` in `parameters.yml` to the database container alias "db"

Then, run:

```bash
$ docker-compose up
```

_Note :_ you can rebuild all Docker images by running:

```bash
$ docker-compose build
```

# Symfony & FOSUserBundle 

* Symfony console (You can do alias) :
```bash
alias dsymfcons="sudo docker-compose exec php php /var/www/symfony/bin/console"
```
* Import user.sql :)

* Add user :
```bash
dsymfcons fos:user:create testuser
```

# How it works?

Here are the `docker-compose` built images:

* `db`: This is the MySQL database container (can be changed to postgresql or whatever in `docker-compose.yml` file),
* `php`: This is the PHP-FPM container including the application volume mounted on,
* `nginx`: This is the Nginx webserver container in which php volumes are mounted too,
* `phpmyadmin` : host:8080

This results in the following running containers:

```bash
> $ docker-compose ps
        Name                      Command               State              Ports
        -------------------------------------------------------------------------------------------
        docker_db_1            /entrypoint.sh mysqld            Up      0.0.0.0:3306->3306/tcp
        docker_phpmyadmin_1    /run.sh phpmyadmin                Up       0.0.0.0:8080->80/tcp
        docker_nginx_1         nginx                            Up      443/tcp, 0.0.0.0:80->80/tcp
        docker_php_1           php5-fpm -F                      Up      9000/tcp
```

# Read logs

You can access Nginx and Symfony application logs in the following directories on your host machine:

* `logs/nginx`
* `logs/symfony`

# Code license

You are free to use the code in this repository under the terms of the 0-clause BSD license. LICENSE contains a copy of this license.
