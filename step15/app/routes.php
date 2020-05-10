<?php 


$router->get('', 'PagesController@home' );
$router->get('about', 'PagesController@about' );

$router->get('tasks', 'TasksController@index');
$router->post('tasks', 'TasksController@store');

$router->get('contact', 'NamesController@index');
$router->post('names', 'NamesController@store');
