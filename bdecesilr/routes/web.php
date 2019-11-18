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

//Website main page
Route::get('/index', 'PagesController@index')->name('index'); 

//CGU & CGV
Route::get('/condition', 'PagesController@condition')->name('condition');

//account info for authenticated user
Route::get('/account', 'PagesController@account')->name('account');

//shop
Route::resource('shop', 'ShopController');
Route::get('/shop', 'ShopController@index')->name('shop');

//add product to cart
Route::get('/add-to-cart/{id}',[
    'uses' => 'ShopController@getAddToCart',
    'as' => 'shop.addToCart'
]);

//cart
Route::get('/shopping-cart',[
    'uses' => 'ShopController@getCart',
    'as' => 'shop.shoppingCart'
]);
Route::get('/shopBasket', [
    'uses' => 'ShopController@index',
    'as' => 'shop.main'
]);

//Activity
Route::resource('Posts', 'ActiController');
Route::get('/Posts', 'ActiController@index')->name('Posts');

//Activity list
Route::get('Posts/{id}/list', 'ActiController@list')->name('list');
Route::get('Posts/{id}/save', 'ActiController@save');
Route::post('Posts/{id}/save','ActiController@save')->name('save');

//Activity signup-resign
Route::get('/inscript/{id}', 'ActiController@inscript');
route::get('/disinscript/{id}','ActiController@disinscript');

//Activity photos
Route::get('{id_posts}/photos', 'ActiController@photos')->name('photos');

//Like
Route::get('/like/{id}', 'ActiController@like');
Route::get('/likeL/{id}', 'GalleryController@like');

//Image uploads
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
Route::get('multiple-file-upload', 'MultipleUploadController@index');
Route::post('multiple-file-upload/upload', 'MultipleUploadController@upload')->name('upload');

//Gallery
Route::resource('gallery', 'GalleryController');
Route::get('/library', 'GalleryController@index')->name('Library');
Route::post('/filepost', 'ActiController@file')->name('file');
Route::get('/library/{id}','GalleryController@show');

//Comments
Route::post('/comment/{id_posts}', 'ActiController@comment');
Route::post('/commentL/{id_posts}', 'GalleryController@comment');
Route::get('/deleteComment/{id}','ActiController@deleteComment');
Route::get('/deleteCommentL/{id}','GalleryController@deleteComment');

//Ideas
Route::get('/boite', 'PagesController@boite')->name('boite');
Route::post('/boite', 'PagesController@boite')->name('boite');

//contact form
Route::get('/contact', 'PagesController@contact')->name('contact');

//contact form send email
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

//admin
Route::get('/admin', 'PagesController@admin')->name('admin');

// ONLY FOR ADMIN, edit users
Route::get('admin/{id}/editU', 'UsersController@editU')->name('editU');
Route::patch('/admin/{id}/update',  'UsersController@update');
Route::delete('/admin/{id}', 'UsersController@destroyU');



//Payement send email
Route::post('/shopping-cart/paiement', 'SendEmailPaiementController@send');


Route::get('/', 'PagesController@index'); //path for the index
Route::get('/mention', 'PagesController@mention')->name('mention');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/images/{name}', 'FileController@show');

Route::get('/shop/addProduct','PagesController@addProduct');

?>