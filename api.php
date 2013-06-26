<?php
// Autoload files with the Symfony autoloader, according to PSR-0
require_once( 'vendor/Symfony/Component/ClassLoader.php' );
$loader = new \Symfony\Component\ClassLoader\ClassLoader();

// register classes with namespaces
$loader->addPrefix( 'Ieru\\', __DIR__.'/vendor' );
$loader->register();
$loader->setUseIncludePath(true);

// Start ieru restengine, with api URI identifier and API URI namespace
$api = new \Ieru\Restengine\Engine\Engine( 'api', 'Ieru\Ieruapis' );
$api->start();