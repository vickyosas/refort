<?php
require_once "vendor/autoload.php";
require_once "core/config.php";

		
define("DIR_BASE_PATH", dirname( __FILE__ )); 

$router = new AltoRouter();

$router->setBasePath('/rekfort'); // Comment out or remove this line before uploading to a live or production server/cpanel

$router->map('GET|POST', '/home/?', function() use ($config) {
    require __DIR__ . '/views/home.php';
});
$router->map('GET|POST', '/?', function() use ($config) {
    require __DIR__ . '/views/home.php';
});


$router->map('GET', '/about/?', function() use ($config) {
    require __DIR__ . '/views/about.php';
});

$router->map('GET|POST', '/consultancy/?', function() use ($config) {
    require __DIR__ . '/views/consultancy.php';
});

$router->map('GET|POST', '/engineering/?', function() use ($config) {
    require __DIR__ . '/views/engineering.php';
});

$router->map('GET|POST', '/services/?', function() use ($config) {
    require __DIR__ . '/views/services.php';
});

$router->map('GET|POST', '/contact/?', function() use ($config) {
    require __DIR__ . '/views/contact.php';
});

$router->map('GET', '/projects/?', function() use ($config) {
    require __DIR__ . '/views/project.php';
});
$router->map('GET', '/404/?', function() use ($config) {
    require __DIR__ . '/views/404.php';
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    header("Location: 404");
	//echo "404 Not Found1";
}