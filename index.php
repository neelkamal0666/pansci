<?php
require 'lib/config.php';
require 'lib/db_connect.php';
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/','showHome');
$app->get('/about','about');
$app->get('/services','services');
$app->get('/gallery','gallery');
$app->get('/contact','contact');
$app->get('/admin/dashboard','dashboard');
$app->get('/admin','admin');
$app->get('/change-password', function() use ($app){

        if(isset($_COOKIE['password'])){

                $p_hash = DB_PREFIX.'settings';

                $password = get_data_from_hash($p_hash,"password");

                if($_COOKIE['password']==md5($password)) {

                        require_once("resources/layout/dashboard_layout/header.php");

                        main_header('change-password','change password');

                        require_once("resources/layout/dashboard_layout/change_password.php");

                        require_once("resources/layout/dashboard_layout/footer.php");

                } else {

			$app->redirect(SITE_URL);

		}

        } else {

                $app->redirect(SITE_URL);

        }

});


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
function dashboard() {
require_once("resources/layout/admin/header.php");
main_header('admin','Admin -Panel');
require_once("resources/layout/admin/dashboard.php");
require_once("resources/layout/admin/footer.php");
}
function admin(){
require_once("resources/layout/admin/admin_header.php");
main_header('admin','Admin -Panel');
require_once("resources/layout/admin/login_page.php");
require_once("resources/layout/admin/footer.php");
}