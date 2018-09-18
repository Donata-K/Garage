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



Route::group(['prefix' => 'mechanics'], function(){
    Route::get('', 'MechanicController@index')->name('mechanic.index');
    Route::get('/new', 'MechanicController@new')->name('mechanic.new');
    Route::post('/new', 'MechanicController@save')->name('mechanic.save');
    Route::get('/delete/{id}', 'MechanicController@delete')->name('mechanic.delete');
});