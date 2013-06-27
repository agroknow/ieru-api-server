<?php
// Autoload files with the Symfony autoloader, according to PSR-0
require_once( './vendor/autoload.php' );

// register classes with namespaces
$loader->addPrefix( 'Ieru\\', __DIR__.'/vendor' );
$loader->register();
$loader->setUseIncludePath(true);

// Start ieru restengine, with api URI identifier and API URI namespace
$api = new \Ieru\Restengine\Engine\Engine( 'api', 'Ieru\Ieruapis' );
$api->start();