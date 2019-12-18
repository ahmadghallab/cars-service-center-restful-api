<?php

$router->group(['prefix' => 'api/v1'], function() use ($router) {
    // User routes
    $router->post('user/register', 'AuthController@store');
    $router->post('user/signin', 'AuthController@signin');
    $router->get('user/{id}', 'AuthController@show');
    $router->patch('user/{id}', 'AuthController@update');

    // Make routes
    $router->get('makes', 'MakeController@index');
    $router->post('makes', 'MakeController@store');
    $router->get('makes/{id}', 'MakeController@show');
    $router->get('makes/{id}/models', 'MakeController@getModelsByMake');
    $router->patch('makes/{id}', 'MakeController@update');
    $router->delete('makes/{id}', 'MakeController@destroy');
    
    // Make routes
    $router->get('models', 'MakeModelController@index');
    $router->post('models', 'MakeModelController@store');
    $router->get('models/{id}', 'MakeModelController@show');
    $router->patch('models/{id}', 'MakeModelController@update');
    $router->delete('models/{id}', 'MakeModelController@destroy');
});
