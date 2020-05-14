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
    return view('auth/login');
});

Route::get('/add_projects', function () {
    return view('clients/client_add_projects');
});


Route::get('/back', 'admin_loginController@loginform')->name('admin.login');
Route::post('/back', 'admin_loginController@login')->name('admin.login.submit');


Route::get('/admin_main', 'adminController@admin_calendar_view');

Route::get('/manage_project', 'adminController@admin_manage_project')->name('admin.dashboard');
Route::post('/manage_project/1', 'adminController@edit_project')->name('admin.edit_project');

Route::get('/client', 'projectsController@calendar_view')->name('client.dashboard');

Route::get('/projects', 'projectsController@project_overview');

Route::post('/add_projects', 'projectsController@create')->name('client.add_projects.create');

Auth::routes();

// Route::get('/client', 'HomeController@index')->name('home');
