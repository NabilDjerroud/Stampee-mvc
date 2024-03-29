<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');

Route::get('/client', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');

Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');

Route::post('/client/delete', 'ClientController@delete');


Route::get('/utilisateur/create', 'UtilisateurController@create');
Route::post('/utilisateur/create', 'UtilisateurController@store');


Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');


Route::get('/timbre/index', 'TimbreController@index'); 
Route::get('/timbre/create', 'TimbreController@create'); 
Route::post('/timbre', 'TimbreController@store'); 
Route::get('/timbre/show', 'TimbreController@show');



Route::get('/enchere', 'EnchereController@index');
Route::post('/enchere/create', 'EnchereController@store');
Route::post('/enchere/desactiver', 'EnchereController@deactiverEnchere');

Route::dispatch();
?>

