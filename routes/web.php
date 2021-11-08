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
Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::get('/about-us-page',function (){
    return view('about');
})->name('about');

Route::get('/products','App\Http\Controllers\MyController@show');

Route::get('/total-users','App\Http\Controllers\MyController@index');

Route::get('edit/{id}','App\Http\Controllers\MyController@edit');
Route::get('/add-blog','App\Http\Controllers\BlogController@create');
Route::post('/save-blog','App\Http\Controllers\BlogController@insert');
Route::get('/blogs','App\Http\Controllers\BlogController@index');
Route::get('blog-edit/{id}','App\Http\Controllers\BlogController@edit');
Route::post('blog-update/{id}','App\Http\Controllers\BlogController@update');
Route::get('blog-delete/{id}','App\Http\Controllers\BlogController@delete');
Route::get('home','App\Http\Controllers\BlogController@index');









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
