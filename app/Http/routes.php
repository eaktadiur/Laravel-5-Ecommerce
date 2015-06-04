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
// Route::get('/', 'WelcomeController@index');

// Route::get('/home', 'HomeController@index');
Route::get('/home', array('as'=>'home', 'uses'=>'PagesController@index'));


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);
Route::get('/', array('as'=>'home', 'uses'=>'PagesController@index'));
//Route for Product
Route::get('/products',array('as'=>'product','uses'=>'ProductController@index'));
//Route For product Details
Route::get('/products-details/{id}', array('as'=>'product-details','uses'=>'ProductDetailsController@index'));
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
Route::post('/contact-us',['as'=>'contact','uses'=>'PagesController@store']);

//Route for categories
Route::get('/category/list', ['as'=>'category-list','uses'=>'CategoryController@index']);
Route::get('/category/create', ['as'=>'category','uses'=>'CategoryController@create']);
Route::post('/category/create',['as'=>'category','uses'=>'CategoryController@store']);
//Route for Product
Route::get('/product/list',['as'=>'product-list','uses'=>'ProductController@productList']);
Route::get('/product/create',['as'=>'create-product','uses'=>'ProductController@create']);
Route::post('/product/create',['as'=>'create-product','uses'=>'ProductController@store']);
//Route::get('product/details',['as'=>'product-detail','uses'=>'ProductController@'])
//Route for Brand

Route::get('/brand/create',['as'=>'create-brand' ,'uses'=>'BrandController@index']);
Route::post('/brand/create',['as'=>'create-brand' ,'uses'=>'BrandController@store']);
Route::get('/brand/list',['as'=>'brand-list','uses'=>'BrandController@brandList']);
//route for review 
Route::post('/product/review',['as'=>'review','uses'=>'ReviewController@store']);
//route for subcategory
Route::get('/subcategory/create',['as'=>'subcategory','uses'=>'SubcategoryController@create']);
Route::post('/subcategory/create',['as'=>'subcategory','uses'=>'SubcategoryController@create']);