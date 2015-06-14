Demo for ["Rock cache"](https://github.com/romeOz/rock-cache)
====================

See Demo (one of three ways)
-------------------

####1. [Destination](http://demo.cache.framerock.net/)

####2. Docker + Ansible

 * [Install Docker](https://docs.docker.com/installation/) or [askubuntu](http://askubuntu.com/a/473720)
 * `docker run -d -p 8080:80 romeoz/vagrant-rock-cache`
 * Open demo [http://localhost:8080/](http://localhost:8080/)
 
####3. VirtualBox + Vagrant + Ansible

 * `git clone https://github.com/romeOz/vagrant-rock-cache.git`
 * [Install VirtualBox](https://www.virtualbox.org/wiki/Downloads)
 * [Install Vagrant](https://www.vagrantup.com/downloads), and additional Vagrant plugins `vagrant plugin install vagrant-hostsupdater vagrant-vbguest vagrant-cachier`
 * [Install Ansible](http://docs.ansible.com/intro_installation.html#latest-releases-via-apt-ubuntu)
 * `vagrant up`
 * Open demo [http://www.rock-cache/](http://www.rock-cache/) or [http://192.168.33.33/](http://192.168.33.33/)

> Work/editing the project can be done via ssh:

```bash
vagrant ssh
cd /var/www/rock-cache
```
 
License
-------------------

The Demo for ["Rock cache"](https://github.com/romeOz/rock-cache) is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)