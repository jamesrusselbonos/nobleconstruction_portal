<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return view('clients/client_calendar');
});

Route::get('/projects', function () {
    return view('clients/client_projects');
});

Route::get('/add_projects', function () {
    return view('clients/client_add_projects');
});

Route::post('/add_projects', 'projectsController@create')->name('client.add_projects.create');

Auth::routes();

// Route::get('/client', 'HomeController@index')->name('home');
