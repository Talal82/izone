<?php

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

// navigation routes
Route::get('/', 'PagesController@getindex') -> name('index');
Route::get('aboutus', 'PagesController@getAbout') -> name('about');
Route::get('services', 'PagesController@getServices') -> name('services');
Route::get('projects', 'PagesController@getProjects') -> name('projects');
Route::get('gallery', 'PagesController@getGallery') -> name('gallery');
Route::get('careers', 'PagesController@getCareers') -> name('careers');
Route::get('contact', 'PagesController@getContact') -> name('contact');

//navigation sub menu routes
Route::get('services/service-large', 'PagesController@getLargeService') -> name('view_service');
Route::get('projects/project-large', 'PagesController@getLargeProject') -> name('view_project');