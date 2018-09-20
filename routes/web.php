<?php

// use Symfony\Component\Routing\Route;


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

Route::get('/', function(){
    return redirect('mechanics');
});



Route::group(['prefix' => 'mechanics'], function(){
    Route::get('', 'MechanicController@index')->name('mechanic.index');
    Route::get('/new', 'MechanicController@new')->name('mechanic.new');
    Route::post('/new', 'MechanicController@save')->name('mechanic.save');
    Route::get('/delete/{id}', 'MechanicController@delete')->name('mechanic.delete');
});




Route::group(['prefix' => 'trucks'], function(){
    Route::get('', 'TruckController@index')->name('truck.index');
    Route::get('/new', 'TruckController@new')->name('truck.new');
    Route::post('/new', 'TruckController@save')->name('truck.save');
    Route::get('/delete/{id}', 'TruckController@delete')->name('truck.delete');
    Route::get('/filter', 'TruckController@filter')->name('truck.filter');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

