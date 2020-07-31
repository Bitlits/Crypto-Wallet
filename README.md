# Kryptsy

### Features

* 🧠 Supports [TOR](https://www.torproject.org/) a free & anonymous open-source software for enabling anonymous communication.
* 🚫 No Javascript.
* ⚛️ Supports multiple digital currencies (eg. Bitcoin, Litecoin, Dogecoin etc.).
* 🙊 Anonymous login with no sign up required.
* 📖 Powerful admin dashboard and management tools.
* 💡 Usability and scalability.
* 🔧 Highly configurable and extendable.
* 🔐 Industry standard security out of the box.
* 💬 Active community behind.

### Requirements

* Linux
* Git 1.7.10+
* Sqlite
* Mustache
* PhpLiteAdmin v1.9.8.2
* Apache2
* RedBean

** More details are in the [doc](doc).

### Getting started

* [Setup on Mac OS X](doc/setup-local-osx.md)
* [Setup on Ubuntu](doc/setup-local-ubuntu.md)
* [Deploy production server](doc/deploy-production-server.md)

## Installation

* <p>Sign up with <a target="_blank" href="https://m.do.co/c/397fb2277475">Digital Ocean</a><img width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></p>
* Install LAMP https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04
* Edit the configuration file `sudo nano /base/init.php`
* Install Litecoin & start the Litecoin Daemon `sudo litecoind`
* Edit the configuration file `sudo nano /vendor/sql/phpliteadmin.conf.php`
* Access PhpLiteAdmin Dashboard http://example.com/vendor/sql/phpliteadmin.php
