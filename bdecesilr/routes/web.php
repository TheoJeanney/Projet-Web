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

Route::get('/', 'PagesController@index'); //path for the index
Route::get('/condition', 'PagesController@condition')->name('condition');

Route::get('/shop', 'PagesController@shop')->name('shop');
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::get('/activity', 'PagesController@activity')->name('activity');
Route::get('multiple-file-upload', 'MultipleUploadController@index');
Route::post('multiple-file-upload/upload', 'MultipleUploadController@upload')->name('upload');

Route::get('/boite', 'PagesController@boite')->name('boite');


Route::get('/register', 'PagesController@register'); //path for the register page

//Route for post message and insert the information into the database
Route::post('/register', function () {
    $id=$_POST["campus"];   
    $utilisateur = App\Users::create ([
    'User_firstname' => request('firstname'),
    'User_lastname' =>request('lastname'),
    'User_email' =>request('email'),
    'User_phone' =>request('phone'),
    'User_password' =>bcrypt(request('psw')),
    'User_status' =>0,
    'Id_campus' =>DB::select('SELECT Id_campus FROM Campus WHERE :id = Campus_name ', ['id'=>$id])[0]->Id_campus,
    ]);

}); 

Route::get('/test', 'PagesController@test');

Route::get('/test2', function () {

    $campus=dump(DB::select('SELECT Campus_name FROM Campus'));

});