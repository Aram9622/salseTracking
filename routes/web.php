<?php

use Illuminate\Support\Facades\Route;

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
  if(Auth::user()){
      return redirect('/admin');
  }
    return view('auth.login');
});

Auth::routes();

Route::group(['prefix'=>'admin','as' => 'admin.', 'middleware' => ['auth']],function(){
  Route::get('/',function(){
    return view('Admin.dashboard');
  })->name('home');
  Route::get('/clients/', function(){
    return view('Admin.clients');
  })->name('clients');
  Route::get('/personal-page/', function(){
    return view('Admin.personal-page');
  })->name('personal-page');

  Route::get('/invite-client/', "ClientsController@index")->name('invite-client');
  Route::post('/invite-client/', "ClientsController@create")->name('create-client');

  Route::get('/my-account', 'MyAccountController@index')->name('my-account');
  Route::post('/my-account', 'MyAccountController@update')->name('update-my-account');
});
//Route::get('/home', 'HomeController@index')->name('home');
