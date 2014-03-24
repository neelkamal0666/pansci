<?php
define("SITE_URL","http://pansci.in");
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/','showHome');
$app->get('/about','about');
$app->get('/services','services');
$app->get('/gallery','gallery');
$app->get('/contact','contact');

$app->run();

function showHome() {
require_once("resources/layout/header.php");
main_header('home','Pantheon Scientific Trust');
require_once("resources/layout/home.php");
require_once("resources/layout/footer.php");
}
function about() {
require_once("resources/layout/header.php");
main_header('about','About Pantheon Scientific Trust');
require_once("resources/layout/about.php");
require_once("resources/layout/footer.php");
}
function services() {
require_once("resources/layout/header.php");
main_header('services','Services of Pantheon Scientific Trust');
require_once("resources/layout/services.php");
require_once("resources/layout/footer.php");
}
function gallery() {
require_once("resources/layout/header.php");
main_header('gallery','Photo Gallery');
require_once("resources/layout/gallery.php");
require_once("resources/layout/footer.php");
}
function contact() {
require_once("resources/layout/header.php");
main_header('contact','Contact Us');
require_once("resources/layout/contact.php");
require_once("resources/layout/footer.php");
}