Demo for ["Rock cache"](https://github.com/romeOz/rock-cache)
====================

Installation
-------------------

 * [Install Docker](https://docs.docker.com/installation/) or [askubuntu](http://askubuntu.com/a/473720) 
 * `docker run --name memcached -d romeoz/docker-memcached`
 * `docker run --name demo -d --link memcached:memcached -p 8080:80 romeoz/docker-rock-cache`
 * Open demo [http://localhost:8080/](http://localhost:8080/)

Installation using the Docker Compose
-------------------

 * [Install Docker](https://docs.docker.com/installation/) or [askubuntu](http://askubuntu.com/a/473720) 
 * [Install Docker Compose](https://docs.docker.com/compose/install/)
 * `curl -L https://github.com/romeoz/docker-rock-cache/raw/master/docker-compose.yml > docker-compose.yml`
 * `docker-compose up -d`
 * Open demo [http://localhost:8080/](http://localhost:8080/)

Out of the box
-------------------
 * Ubuntu 14.04.3 (LTS)
 * Nginx 1.8.0
 * PHP 5.6
 * Memcached + php5+memcached
 * Composer
 
License
-------------------

The Demo for ["Rock cache"](https://github.com/romeOz/rock-cache) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)