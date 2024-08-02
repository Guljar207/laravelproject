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
    return view('welcome');
});

Route::get('/ID/{id}', function ($id) {
    echo "ID".$id;
});

Route::get('/user/{name?}', function ($name = 'Shahana') {
    echo "Name ".$name;
})->where('name','[A-Za-z]+');

//Route::get('/users','App\Http\Controllers\UserController@index');
Route::get('/read','App\Http\Controllers\readcontroller@in');

Route::get('/about','App\Http\Controllers\democontroller@hel');
Route::get('/home','App\Http\Controllers\democontroller@hi');
Route::get('/test',function(){
    return view('User'); 
});


// passing data to controller to view

//Route::get('/abc','App\Http\Controllers\UserController@about');
Route::get('/ig','App\Http\Controllers\UserController@inu');


Route::get('/emp',function(){
    return view('inza',
    ['name'=>'Gulzar'],
    ['address'=>'bhestan'],
    [''=>'']);

    
});


Route::get('/test', function() {
    return view('test');
 });
 
 Route::get('/test2', function() {
    return view('test2');
 });
 


