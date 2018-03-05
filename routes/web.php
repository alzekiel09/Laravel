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

Route::get('/', function () {
    return view('welcome');
});





/*


Route::get('sample', function () {
    return 'About us ';
});


Route::get('submit-form', function()

	{

       return 'Form has been submitted Succesfully';

	});


Route::get('product/detergent',function(){
	return 'Welcome to the detergent page';
});

Route::get('product/detergent/Tide', function () {
    return 'This page shows Tide detergent ';
});




Route::get('product/{theSubmenu}/{theSubmenu1}', function($theSubmenu, $theSubmenu1){
    return  " This page shows " .$theSubmenu. " " .$theSubmenu1. " ";


});	*/



Route::get('index', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', 'AboutUs@indexes')->name('aboutus');


	