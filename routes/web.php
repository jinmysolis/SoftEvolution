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
Route::get('/','PagesController@home');
Route::get('blog/{post}','PostController@show')->name('posts.show');

Route::get('clientes', 'ClientesController@index')->name('clientes');
Route::get('informacion', 'ClientesController@informacion')->name('informacion');

Route::resource('tag', 'TagController');
Route::resource('Categoria', 'CategoriaController');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function (){
    Route::get('posts','PostsController@index')->name('admin.posts.index');
    Route::get('posts/create','PostsController@create')->name('admin.posts.create');
    Route::post('posts','PostsController@store')->name('admin.posts.store');
    Route::get('posts/{post}','PostsController@edit')->name('admin.posts.edit');
    Route::put('posts/{post}','PostsController@update')->name('admin.posts.update');
    Route::post('posts/{post}/photos','PhotosController@store')->name('admin.posts.photos.store');
    Route::delete('posts/{post}','PostsController@destroy')->name('admin.posts.destroy');
   
});




Route::get('posts', function () {
    return App\Post::all();
});

Route::get('admin','AdminController@index')->name('dashboar')->middleware('auth');

//Route::get('home', function () {
//    return view('admin.dashboard');
//})->middleware('auth');



Route::auth();