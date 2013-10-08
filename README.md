IERU API Server
===============

**Requirements**

For installing the Analytics Service, a server with the following tools installed is required:
* PHP 5.3
* MySQL 5.5
* Apache
* Apache modules: mod_rewrite
* Git
* Composer (http://getcomposer.org/download/)

Installation
------------
**Install the REST engine**

Clone the Github project of the api server to the default folder of the web server, or the virtual host you are going to use for this project.

The installation only supports installing it in the root folder of the web server (e.g: http://localhost/).

The api will be accessed using: http://localhost/api/analytics/translate (this is an example URL, not a functional one).

```
~/Sites/github $> git clone https://github.com/ieru/ieru-api-server
```

Run composer install
```
~/Sites/github/ieru-api-server $> cd ieru-api-server
~/Sites/github/ieru-api-server $> composer install
```

**Install databases**

Install the database dumps ieru_organic_analytics.sql and ieru_organic_oauth.sql in the local MySQL database.


**Configure api.php file**

In the api.php file you can change the access data for each database needed on the project.

For allowing javascript cross domain calls (e.g: requesting API from the organic edunet web app), you can configure the value of the constant XDOMAIN_ALLOWED_SERVER located in the php file, but by default it allows Ajax calls from any server. Include "http://" in the server name. Useful too for development and preproduction machines.

**Done!**

Just check that everything works with a few API requests:
```
http://api.dev/api/analytics/translate/providers
http://api.dev/api/analytics/translate/languages
http://api.dev/api/analytics/translate?text=potato&from=en&to=es
```
