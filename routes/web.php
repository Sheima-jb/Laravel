<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UserController;
Route::get('/index', function () {
    return view('index'); 
});
Route::get('/services', function () {
    return view('create'); 
});
Route::get('/', function(){ return view('welcome') ;
}) ;
Route::get('/user/{id}', function($id) {
    return 'User id= ' . $id;
});


Route::get('/pages', 'PagesController@index') ;
Route::get('/pages', 'PagesController@about') ;



Route::resource('clients', ClientsController::class);
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Afficher le formulaire d'inscription

// Afficher la liste des utilisateurs (optionnel)
Route::get('/users', [UserController::class, 'index'])->name('users.index');