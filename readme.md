# Docker-PHP7

A quick and easy way to setup your Laravel PHP application using Docker and docker-compose and Laravel Composer. 
This will setup a developement environment with PHP7-fpm, MariaDB and Nginx.

## Usage
~~~
docker-compose up -d
~~~

## Structure

~~~
├-- app
│   └-- blog (laravel app folder)
│       └-- public
|             |_index.php
├-- database
├-- docker-compose.yml
|-- setting
|     |-nginx
|	  |-xdebug
|     |.....
|
|-- log-system
|     |-nginx (log for nginx)
|     |-xdebug (log content for xdebug)
|     |-.....
~~~

##Demonstrate the folder :

- `app` is the directory for project files. 
- `database` is where MariDB will store the database files.
- "setting" is the folder for setting enviroment to the system

#nginx-php-7 : Using the image richarvey/nginx-php-fpm ( lastest version)
