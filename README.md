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
     documentroot "/users/david/sites/github/api-server"
     servername   edunet.dev
     serveralias  www.edunet.dev

     <directory /users/david/sites/github/api-server>
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
**Install the APIs**

Clone the Github project of the APIs to a directory in the server.
```
~/Sites/github $> git clone https://github.com/ieru/ieru-rest-engine
~/Sites/github $> git clone https://github.com/ieru/ieru-oe-apis
```
Create symbolic links inside the ieru-api-server/vendor/Ieru to the REST engine and APIs
```
~/Sites/github/ieru-api-server/vendor/Ieru $> ln -s ../../../ieru-rest-engine/src/Ieru/Restengine/ Restengine
~/Sites/github/ieru-api-server/vendor/Ieru $> ln -s ../../../ieru-oe-apis/Ieru/Ieruapis/ Ieruapis
```
**Database installation**

Import to the local server the ieru_organic_oauth.sql and ieru_organic_analytics.sql files.
Success!
Check that everything is working accessing the following URL (change the server to the localhost or any other you are using):
```
http://www.api.dev/api/analytics/translate?text=potato&from=en&to=es
```
