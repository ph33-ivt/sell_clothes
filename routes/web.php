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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::group([
    'middleware' => 'IsAdmin',
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'as'         => 'admin.',
], function () {
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    //manager Products
    Route::get('products', 'ProductController@index')->name('products.index');
    Route::get('products/{product}/detail', 'ProductController@detailProductId')->name('product.detail');
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::get('products/create', 'ProductController@create')->name('product.create');
    Route::post('products', 'ProductController@store')->name('product.store');
    Route::put('products/{product}', 'ProductController@update')->name('products.update');



    //Manger Image
    Route::get('images', 'ImageController@index')->name('image.index');

    //Manage ProductSize
    Route::get('productsizes', 'ProductSizeController@index')->name('productsize.index');
    Route::get('productsizes/{id}/edit', 'ProductSizeController@edit')->name('productsize.edit');
    Route::post('productsizes/{id}/update', 'ProductSizeController@update')->name('productsize.update');
    Route::delete('productsizes/{id}', 'ProductController@destroy')->name('product.destroy');


    //Order
    Route::get('orders', 'OrderController@index')->name('orders.index');
    Route::delete('order/{id}', 'OrderController@destroy')->name('order.destroy');
    Route::get('order/{id}', 'OrderController@detail')->name('order.detail');
    

    //User
    Route::get('users/admin', 'UserController@indexAdmin')->name('user.indexadmin');
    Route::get('users/user', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('users', 'UserController@store')->name('user.store');
    Route::get('users/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::post('users/{user}', 'UserController@update')->name('user.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('user.delete');

    //Category
    Route::get('categories', 'CategoryController@index')->name('categories.index');
    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.delete');
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('categories', 'CategoryController@store')->name('categories.store');

    //Search
    Route::get('users/search', 'UserController@getSearch')->name('user.search');

    //Comment
    Route::get('comments', 'CommentController@index')->name('comments.index');
});

//user
Route::get('users', 'UserController@indexuser')->name('users.index');

Auth::routes();



