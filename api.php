<?php
// Remove error reporting (comment in production environment)
error_reporting(0);
ini_set('display_errors', '1');

// Autoload files with Composer.json (remember to run "composer install")
// after cloning the project from Github
require_once( 'vendor/autoload.php' );

// Allowed domain for cross domain javascript requests
// Please, change * for your server name, including http://
// It distinguises between www.yourserver.com and yourserver.com
define( 'XDOMAIN_ALLOWED_SERVER', '*' );
define( 'API_SERVER', 'http://ak.oeanalytic-dev.agroknow.gr' );
define( 'API_PATH', '/api/' );

// Define database connections
$databases = array (
    'resources' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'ak_organic_resources',
        'username'  => 'root',
        'password'  => 'r00t!',
        'collation' => 'utf8_general_ci',
        'prefix'    => '',
        'charset'   => 'utf8'
    ),

    'oauth' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'ak_organic_oauth',
        'username'  => 'root',
        'password'  => 'r00t!',
        'collation' => 'utf8_general_ci',
        'prefix'    => '',
        'charset'   => 'utf8'
    ),

	'analytics' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'ak_organic_analytics',
        'username'  => 'root',
        'password'  => 'r00t!',
        'collation' => 'utf8_general_ci',
        'prefix'    => '',
        'charset'   => 'utf8'
	),

    'navigational' => array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'ieru_organic_resources_navigational',
        'username'  => 'root',
        'password'  => '',
        'collation' => 'utf8_general_ci',
        'prefix'    => '',
        'charset'   => 'utf8'
    )
);

// Start ieru restengine, with api URI identifier and API URI namespace
$api = new \Ieru\Restengine\Engine\Engine( 'Ieru\Ieruapis', $databases );
$api->start();
