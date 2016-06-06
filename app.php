<?php
//autoloader de composer qui charge également nos classes (psr-4)
require_once __DIR__.'/vendor/autoload.php'; 
// chargement d'eloquent
require 'config/database.php';
// fonctions utilitaires
require 'functions.php';
//on démarre les sessions
// doc : http://php.net/manual/fr/session.examples.basic.php
session_start();

$app = new Silex\Application(); 
$app['debug'] = true;
/*
	Nos routes !
	doc silex : http://silex.sensiolabs.org/doc/master/usage.html#controllers-as-classes
 */
$app->get('/', 'App\\Controllers\\HomeController::getIndex');  
$app->get('/logout', 'App\\Controllers\\HomeController::getLogout'); 
$app->get('/cart', 'App\\Controllers\\CartController::getIndex'); 
$app->post('/cart/add', 'App\\Controllers\\CartController::postAdd');
$app->get('/cart/checkout', 'App\\Controllers\\CartController::getCheck'); 
$app->post('/cart/valid', 'App\\Controllers\\CustomerController::postUser');  
$app->post('/cart/confirmation', 'App\\Controllers\\OrderController::postOrder');  
$app->post('/cart/confirmation', 'App\\Controllers\\OrderController::destroySession'); 


$app->run(); 