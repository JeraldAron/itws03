<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require __DIR__ . '/../vendor/autoload.php';

use Framework\Router;

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Strip the subfolder prefix so routes work under both:
//   http://ws03-main.test/listings   → /listings
//   http://localhost/ws03-main/listings → /listings
$scriptDir  = dirname($_SERVER['SCRIPT_NAME']); // e.g. /ws03-main/public  or  /public
$basePath   = rtrim(str_replace('/public', '', $scriptDir), '/'); // e.g. /ws03-main  or  ''
if ($basePath !== '' && str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath)) ?: '/';
}

$router->route($uri);
