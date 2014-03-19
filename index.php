<?php
define("SITE_URL","http://localhost/PanSciNew");
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim(array(
       "log.enabled" => true,
       "MODE" => "development"
));
$app->get('/', 'showHome');
$app->get('/about', 'about');
$app->get('/services', 'services');
$app->get('/gallery', 'gallery');
$app->get('/products', 'products');
$app->get('/contact', 'contact');
// run the Slim app
$app->run();

function showHome(){
	require_once("resources/layout/header.php");
	main_header('Pansci');
	require_once("resources/layout/home.php");
	require_once("resources/layout/footer.php");
}
function about(){
	require_once("resources/layout/header.php");
	main_header('Pansci- About');
	require_once("resources/layout/about.php");
	require_once("resources/layout/footer.php");
}
function services(){
	require_once("resources/layout/header.php");
	main_header('Pansci- Services');
	require_once("resources/layout/services.php");
	require_once("resources/layout/footer.php");
}
function gallery(){
	require_once("resources/layout/header.php");
	main_header('Pansci- Gallery');
	require_once("resources/layout/gallery.php");
	require_once("resources/layout/footer.php");
}
function products(){
	require_once("resources/layout/header.php");
	main_header('Pansci- Products');
	require_once("resources/layout/products.php");
	require_once("resources/layout/footer.php");
}
function contact(){
	require_once("resources/layout/header.php");
	main_header('Pansci- Contact');
	require_once("resources/layout/contact.php");
	require_once("resources/layout/footer.php");
}
?>
