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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//Project
Route::get('/project/home',function(){
    return view('project.home');
});
Route::get('/project/register',function(){
    return view('project.register');
});


//Caplet
// Route::get('/caplet/home',function(){
//     return view('caplet.home');
// });

// Route::get('/caplet/register',function(){
//     return view('caplet.register');
// });
// Route::get('/caplet/login',function(){
//     return view('caplet.login');
// });

// Route::get('/caplet/logout',function(){
//     return view('caplet.login');
// // });

Route::group(['namespace' => 'Caplet'],function(){
    //Register Routes
    Route::get('caplet','HomeController@index');
    Route::get('caplet/home','HomeController@dashboard');

    Route::get('caplet/register','RegisterController@index');
    Route::post('caplet/register_action','RegisterController@store');
    Route::post('caplet/login_check','RegisterController@login');

    //Login Routes
    Route::get('caplet/login','LoginController@index');
    Route::post('caplet/login_action','LoginController@store');

    Route::get('caplet/logout','RegisterController@login');
    Route::get('logout', 'RegisterController@logout');
});


Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('');

})->middleware("auth");

Route::get('/pages',function(){
    return view('pages.index');
});

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

Route::resource('/products','ProductController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
