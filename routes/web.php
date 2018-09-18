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
// Route::middleware('role:superadministrator|administrator|editor|author|contributor') -> group(function(){
	Route::get('home', 'HomeController@index')->name('home');
// });

//admin routes
Route::prefix('admin/') -> middleware('role:superadministrator|administrator|editor|author|contributor') -> group(function(){

	Route::get('/', 'HomeController@index') -> name('home');
	Route::resource('info', 'InfoController', ['except' => ['show']]);
	Route::resource('users', 'UserController');
	Route::resource('office', 'OfficeController');
	Route::resource('banner', 'BannerController', ['except' => ['create']]);
	Route::resource('value' , 'ValueController', ['except' => ['create','show']]);
	Route::resource('benefit', 'BenefitController', ['except' => ['create','show']]);
	Route::resource('about', 'AboutController', ['except' => ['create','store','show','edit','destroy']]);
	Route::resource('gallery', 'GalleryController', ['except' => ['create','show','edit','update']]);
	Route::resource('certificate', 'CertificateController', ['except' => ['create','show','edit','update']]);
	Route::resource('service', 'ServiceController');
	Route::resource('project', 'ProjectController');
	Route::get('general/settings', 'GeneralSettingsController@getGeneralSettings') -> name('settings.index');
	Route::put('general/settings/header/{id}', 'GeneralSettingsController@updateHeaderInfo') -> name('headerinfo.update');
	Route::put('general/settings/footer/{id}', 'GeneralSettingsController@updateFooterInfo') -> name('footerinfo.update');
	Route::put('general/settings/social-links', 'GeneralSettingsController@updateSocialLinks') -> name('sociallinks.update');
	Route::get('settings/accounts', 'AccountsController@getAccountSettings') -> name('account.index');
	Route::put('settings/accounts/{id}', 'AccountsController@updateAccountSettings') -> name('account.update');
	Route::post('projects/bulk-action', 'ProjectController@bulkAction') -> name('delete.bulk.projects');
	Route::get('project/change-visibility/{id}', 'ProjectController@changeVisibility') -> name('project.visibility');
	
});



//it has to be under resources.. otherwise some of them will not work
// navigation routes
Route::get('/', 'PagesController@getindex') -> name('index');
Route::get('aboutus', 'PagesController@getAbout') -> name('about');
Route::get('services', 'PagesController@getServices') -> name('services');
Route::get('projects', 'PagesController@getProjects') -> name('projects');
Route::get('careers', 'PagesController@getCareers') -> name('careers');
Route::get('contact', 'PagesController@getContact') -> name('contact');
Route::get('certificates', 'PagesController@getCertificates') -> name('certificates');
Route::get('galleryimages', 'PagesController@getGallery') -> name('gallery');
