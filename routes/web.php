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

Route::get('/ajaxshowcprojects', 'adminController@ajaxshowcprojects')->name('admin.ajaxshowcprojects');

Route::get('/back', 'admin_loginController@loginform')->name('admin.login');
Route::post('/back', 'admin_loginController@login')->name('admin.login.submit');


Route::get('/admin_main', 'adminController@admin_calendar_view');

Route::get('/manage_project', 'adminController@admin_manage_project')->name('admin.dashboard');
Route::post('/manage_project/1', 'adminController@edit_project')->name('admin.edit_project');

Route::get('/manage_customers', 'adminController@admin_manage_customers');

Route::get('/orders', 'adminController@admin_show_orders');

Route::get('/ajaxshoworders', 'adminController@ajaxshoworders')->name('admin.ajaxshoworders');

Route::get('/services', 'adminController@admin_services');
Route::post('/services', 'adminController@create_services')->name('admin.service.create');
Route::post('/services/1', 'adminController@edit_services')->name('admin.service.edit');
Route::get('/services/{id}', 'adminController@delete_services')->name('admin.service.delete');

Route::get('/ajaxshowcustomers', 'adminController@ajaxshowcustomers')->name('admin.ajaxshowcustomers');

Route::get('/client', 'projectsController@calendar_view')->middleware('verified')->name('client.dashboard');

Route::get('/order_overview', 'projectsController@order_overview')->middleware('verified')->name('client.orders');

Route::get('/projects', 'projectsController@project_overview')->middleware('verified');
Route::post('/projects/1', 'projectsController@project_edit')->middleware('verified')->name('client.edit_project');

Route::get('/add_projects', 'projectsController@show_add_project')->middleware('verified');

Route::post('/add_projects', 'projectsController@create')->middleware('verified')->name('client.add_projects.create');

Auth::routes(['verify' => true]);

Auth::routes();

// Route::get('/client', 'HomeController@index')->name('home');
