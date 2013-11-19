IERU API Server
===============

**Requirements**

For installing the Analytics Service, a server with the following tools installed is required:

* PHP 5.3 or higher
* PHP 5 Curl library
* MySQL 5.5 or higher
* Apache 2
* Git
* Composer (http://getcomposer.org/download/)

Benefits of installing with Composer
------------------------------------

Composer is a dependency manager that simplifies the task of downloading the dependencies of this project. It also eases the updating of those depedencies with just a single command line. It is strongly recommended that you install the API Server's dependencies through composer as the APIs will change constantly and will allow you to keep the API Server up-to-date with just a single command line.

If you can not use command line in your production server, download the whole project to your laptop/computer and follow these installation instructions. Then you can simply upload the contents to your server through FTP or any other means you use.

Else, you can request a zip file with the contents of the API Server, but as this is a manual task, we can not constantly provide a zip file everytime we do a change to the APIs.

Installation on Ubuntu 13.04
----------------------------
Be sure to have installed the following (be sure to have run >sudo apt-get update):
* Apache2 (sudo apt-get install apache2)
* PHP5 (sudo apt-get install php5-cli)
* PHP5 library for Apache2 (sudo apt-get install libapache2-mod-php5)
* MySQL (sudo apt-get install mysql-server)
* Git (sudo apt-get install git)
* Curl for PHP5 (sudo apt-get install php5-curl)

Please check with your system administrator that you have all the previous libraries installed. We can not provide help on installing this libraries are they are not related with the API.

Install the REST engine
-----------------------

Clone the Github project of the api server to the default folder of the web server, or the virtual host you are going to use for this project.

The api will be accessed using: http://localhost/api/analytics/translate (this is an example URL, not a functional one).

```
/var/ $> sudo git clone https://github.com/ieru/ieru-api-server
```

Remove the /var/www directory and rename the folder. Give proper write permissions (please check with your sysadmin, as giving full access to everyone, 0777, is not a good practice, but will serve to test that everything works).
```
/var/ $> sudo rm -R www
/var/ $> sudo mv ieru-api-server/ www
/var/ $> sudo chmod -R 0777  www
```

Download composer.phar file and copy inside the directory. Install the project dependencies through composer.
```
/var/www/ $> php composer.phar install
```

It will just download files and build the required paths for the classes of those libraries to work on the API server project.

**Install databases**

Install the database dumps ieru_organic_analytics.sql and ieru_organic_oauth.sql in the local MySQL database.


**Configure api.php file**

In the api.php file you can change the access data for each database needed on the project.

Also change the server name for the API (API_SERVER constant) and the location of the api.php file (API_PATH constant, keep slashes at begining and end of the constant, and it is '/api.php/' by default). The API_PATH, if you install the API in a subdirectory called 'api' would be '/api/api.php/'.

For allowing javascript cross domain calls (e.g: requesting API from the organic edunet web app), you can configure the value of the constant XDOMAIN_ALLOWED_SERVER located in the php file, but by default it allows Ajax calls from any server. Include "http://" in the server name. Useful too for development and preproduction machines.

**Done!**

Just check that everything works with a few API requests:
```
http://localhost/api.php/analytics/translate/providers
http://localhost/api.php/analytics/translate/languages
http://localhost/api.php/analytics/translate?text=potato&from=en&to=es
```
