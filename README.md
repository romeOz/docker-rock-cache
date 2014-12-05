Demo for ["Rock cache"](https://github.com/romeOz/rock-cache)
====================

Used Vagrant + Ansible.

###Out of the box:

 * Ubuntu 14.04 64 bit

> If you need to use 32 bit of Ubuntu, then uncomment `config.vm.box_url` the appropriate version in the file [Vagrantfile](https://github.com/romeOz/vagrant-rock-cache/blob/master/Vagrantfile).

 * Nginx 1.6
 * PHP-FPM 5.6
 * Composer
 * Memcached 1.4.14 + php5_memcached, php5_memcache
 * Couchbase 3.0.0 + pecl couchbase-1.2.2
 * Redis 2.8 + php5-redis
 * Local IP loop on Host machine /etc/hosts and Virtual hosts in Nginx already set up!


License
-------------------

The Demo for ["Rock cache"](https://github.com/romeOz/rock-cache) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)