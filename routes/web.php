<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix'=>'api'], function() use ($router) {
    //index file
    $router->get('/',['uses'=>'AdminController@index']);
    //create user
    $router->post('createuser',['uses'=>'AdminController@create']);
    //show all admins
    $router->get('alluser',['uses'=>'AdminController@showAllAdmins']);
    //single admin
    $router->get('singleuser/{id}',['uses'=>'Admincontroller@showOneAdmin']);
    //Update
    $router->put('userupdate/{id}',['uses'=>'AdminController@update']);
    //Delete
    $router->delete('userdelete/{id}',['uses'=>'AdminController@delete']);
    //login
   $router->post('login',['uses'=>'AdminController@login']);
});

$router->group(['prefix'=>'admin'], function() use ($router) {

    $router->get('/test',['uses'=>'AdminSettingsController@index']);
    //create admin settings form data to database
    $router->post('/settingsform',['uses'=>'AdminSettingsController@create']);
    
    //show all properties from admin settings table

    $router->get('/settingsview',['uses'=>'AdminSettingsController@show']);
});
//slider routes
$router->group(['prefix'=>'slider'], function() use ($router) {

    //createslider
    $router->post('/createslider',['uses'=>'SliderController@create']);
    //showallsliderinfo
    $router->get('/showallslider',['uses'=>'SliderController@showallslider']);
    //update slider id
    $router->post('/sliderupdate/{id}',['uses'=>'SliderController@update']);
    //single slider info 
    $router->get('/singleslider/{id}',['uses'=>'SliderController@singleslider']);
    
});


//slide Routes

$router->group(['prefix'=>'slide'], function() use ($router) {

    //createslider
    $router->post('/createslide',['uses'=>'SlideController@create']);
    //showallsliderinfo
     $router->get('/showslideinfo/{sid}',['uses'=>'SliderController@show']);
    // //update slider id
    // $router->post('/sliderupdate/{id}',['uses'=>'SliderController@update']);
    // //single slider info 
    // $router->get('/singleslider/{id}',['uses'=>'SliderController@singleslider']);
    
});