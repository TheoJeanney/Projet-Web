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
Auth::routes();

Route::get('/index', 'PagesController@index')->name('index'); //path for the index
Route::get('/condition', 'PagesController@condition')->name('condition');

Route::get('/account', 'PagesController@account')->name('account');

/*Shop*/
Route::resource('shop', 'ShopController');

Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::get('/activity', 'PagesController@activity')->name('activity');
Route::resource('Posts', 'PostsController');

//Comments
//Route::post('comments/{id_posts}', ['uses' => 'CommentsController', 'as' => 'comments.store']);

//Route::put('/Posts/{id}/edit','PostsController@update');
//Route::delete('Posts/{id}','PostsController@destroy');

Route::get('multiple-file-upload', 'MultipleUploadController@index');
Route::post('multiple-file-upload/upload', 'MultipleUploadController@upload')->name('upload');

Route::get('/boite', 'PagesController@boite')->name('boite');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/admin', 'PagesController@admin')->name('admin');

Route::get('admin/{id}/editU', 'UsersController@editU')->name('editU');
Route::patch('/admin/{id}/update',  'UsersController@update');
Route::delete('/admin/{id}', 'UsersController@destroyU');


//      SEND EMAIL
//Route::post('index','PagesController@index')->name('sendEmail');


Route::get('/', 'PagesController@index'); //path for the index
Route::get('/mention', 'PagesController@mention')->name('mention');


Route::get('/test', 'PagesController@test');

Route::get('/test2', function () {

    $campus=dump(DB::select('SELECT Campus_name FROM Campus'));

});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/images/{name}', 'FileController@show');

Route::get('/shop/addProduct','PagesController@addProduct');