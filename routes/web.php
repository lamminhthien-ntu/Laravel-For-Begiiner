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
    $data="Hello I'm data from Controller or Function of Route";
    return view('about',compact('data'));
})->name('about');

Route::get('/products','MyController@show');
Route::get('/total-users','MyController@index');
Route::get('edit/{id}','MyController@edit');
//Route::get('/add-blog','BlogController@create');
//Route::post('/save-blog','BlogController@insert');
//Route::get('/blogs','BlogController@index');
//Route::get('blog-edit/{id}','BlogController@edit');
//Route::post('blog-update/{id}','BlogController@update');
//Route::get('blog-delete/{id}','BlogController@delete');
Route::resource('blog','BlogController');

Route::get('home','BlogController@index');

Route::resource('blog2',"Blog2Controller");

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
