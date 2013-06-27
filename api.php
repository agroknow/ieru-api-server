<?php
// Autoload files with the Symfony autoloader, according to PSR-0
require_once( 'vendor/autoload.php' );

// Allowed domain for cross domain javascript requests
define( 'XDOMAIN_ALLOWED_SERVER', 'www.edunet.php' );

// Start ieru restengine, with api URI identifier and API URI namespace
$api = new \Ieru\Restengine\Engine\Engine( 'api', 'Ieru\Ieruapis' );
$api->start();