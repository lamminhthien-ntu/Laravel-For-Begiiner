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
    return view('index');
});

Route::get('/about-us-page',function (){
    return view('about');
})->name('about');

Route::get('/products','App\Http\Controllers\MyController@show');

Route::get('/total-users','App\Http\Controllers\MyController@index');

Route::get('edit/{id}','App\Http\Controllers\MyController@edit');
Route::get('/add-blog','BlogController@create');
Route::get('/save-blog','BlogController@create');



Auth::routes();




