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
Route::get('careers', 'PagesController@getCareers') -> name('careers');
Route::get('contact', 'PagesController@getContact') -> name('contact');
Route::get('certificates', 'PagesController@getCertificates') -> name('certificates');

//navigation sub menu routes
Route::get('service-large{id}', 'PagesController@getLargeService') -> name('view_service');
Route::get('project-large{id}', 'PagesController@getLargeProject') -> name('view_project');
Route::get('completed-projects', 'PagesController@getCompletedProjects') -> name('completed_projects');
Route::get('ongoing-projects', 'PagesController@getOngoingProjects') -> name('ongoing_projects');

//search route
Route::get('search','SearchController@search') -> name('search');


//post contact route
Route::post('contact', 'PagesController@postContact') -> name('contact.post');

//authentication routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//admin panel routes

//register admin controller routes
Route::resource('info', 'InfoController', ['except' => ['show']]);
Route::resource('office', 'OfficeController');
Route::resource('banner', 'BannerController', ['except' => ['create']]);
Route::resource('value' , 'ValueController', ['except' => ['create','show']]);
Route::resource('benefit', 'BenefitController', ['except' => ['create','show']]);
Route::resource('about', 'AboutController', ['except' => ['create','store','show','edit','destroy']]);
Route::resource('gallery', 'GalleryController', ['except' => ['create','show','edit','update']]);
Route::resource('certificate', 'CertificateController', ['except' => ['create','show','edit','update']]);



Route::get('galleryimages', 'PagesController@getGallery') -> name('gallery');
