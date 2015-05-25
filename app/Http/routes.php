<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);
Route::get('/', array('as'=>'home', 'uses'=>'PagesController@index'));
//Route for Product
Route::get('/products',array('as'=>'product','uses'=>'ProductController@index'));
//Route For product Details
Route::get('/products-details', array('as'=>'product-details','uses'=>'ProductDetailsController@index'));
//Route For cheekOut 
Route::get('check-out',array('as'=>'checkout','uses'=>'CheckoutController@index'));
//Route For cart
Route::get('/cart',array('as'=>'cart','uses'=>'CartController@index'));
//Route For login 
Route::get('/login',array('as'=>'login','uses'=>'LoginController@index'));
//Route For Blog List
Route::get('/blog-list',array('as'=>'blog-list','uses'=>'BloglistController@index'));
//Route For Single Blog
Route::get('/single-blog',array('as'=>'single-blog','uses'=>'SingleBlogController@index'));

Route::get('/404',array('as'=>'404','uses'=>'PagesController@error'));

Route::get('/contact-us',array('as'=>'contact','uses'=>'PagesController@contact'));
