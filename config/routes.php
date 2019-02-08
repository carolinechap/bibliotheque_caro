<?php

$routes = new Router;

$routes->get('/',  'PagesController@home');

// Routes des abonnés
$routes->get('abonnes',             'AbonnesController@index');
$routes->get('abonnes/(\d+)',       'AbonnesController@show'); 
$routes->get('abonnes/add',         'AbonnesController@add');  
$routes->post('abonnes/save',       'AbonnesController@save');  
$routes->get('abonnes/delete/(\d+)','AbonnesController@delete');


// Routes des ouvrages
$routes->get('ouvrages',             'OuvragesController@index'); 
$routes->get('ouvrages/(\d+)',       'OuvragesController@show');
$routes->get('ouvrages/add',         'OuvragesController@add');
$routes->post('ouvrages/save',       'OuvragesController@save');
$routes->get('ouvrages/delete/(\d+)','OuvragesController@delete');


// Routes de la relation abonneouvrage
$routes->get('abonnements',                   'AbonnesOuvragesController@index');
$routes->get('abonnements/(\d+)',             'AbonnesOuvragesController@show');
$routes->get('abonnements/add',               'AbonnesOuvragesController@add');
$routes->post('abonnements/save',             'AbonnesOuvragesController@save');
$routes->get('abonnements/delete/(\d+)',      'AbonnesOuvragesController@delete');




$routes->run();