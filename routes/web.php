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



Route::get('/', 'indexController@index');
Route::get('listings', 'listingsController@index');
Route::get('elements', 'elementsController@index');
Route::get('blog', 'blogController@index');
Route::get('projects', 'projectsController@index');
Route::get('contact', 'contactController@index');
Route::get('testimonials', 'testimonialController@index');
Route::get('about', 'aboutController@index');
Route::get('faq', 'faqController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
