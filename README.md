IERU API Server
===============

**Requirements**

For installing the Analytics Service, a server with the following tools installed is required:
* PHP 5.4
* MySQL 5.5
* Apache
* Apache modules: mod_rewrite
* Git

The file of the virtual hosts of the Apache server should be something like this: 
```
<virtualhost *:80>
     serveradmin  david@teluria.es
     documentroot "/users/david/sites/github/ieru-api-server"
     servername   api.dev
     serveralias  www.api.dev

     <directory /users/david/sites/github/ieru-api-server>
         options indexes followsymlinks multiviews
         allowoverride all
         order allow,deny
         allow from all
     </directory>
</virtualhost>
```

Installation
------------
**Install the REST engine**

Clone the Github project of the api server to a folder.
```
~/Sites/github $> git clone https://github.com/ieru/ieru-api-server
```

Run composer install
```
~/Sites/github/ieru-api-server $> cd ieru-api-server
~/Sites/github/ieru-api-server $> composer install
```

**Done!**