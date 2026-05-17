<?php
$router->get('/', 'HomeController@index');
$router->get('/listings', 'ListingController@index');
$router->get('/listings/search', 'ListingController@search');
$router->get('/listings/create', 'ListingController@create', ['auth']);
$router->get('/listing/edit/{id}', 'ListingController@edit', ['auth']);
$router->get('/listing/{id}', 'ListingController@show');

$router->post('/listings', 'ListingController@store');
$router->put('/listing/{id}', 'ListingController@update', ['auth']);
$router->delete('/listing/{id}', 'ListingController@destroy', ['auth']);

$router->get('/auth/register', 'UserController@register', ['guest']);
$router->post('/auth/register', 'UserController@store', ['guest']);
$router->get('/auth/login', 'UserController@login', ['guest']);
$router->post('/auth/login', 'UserController@authenticate', ['guest']);
$router->post('/auth/logout', 'UserController@logout', ['auth']);
