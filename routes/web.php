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
})->name('welcome');

Auth::routes();

// route for homepage view
Route::get('/home', 'HomeController@index')
    ->name('home');


// search
Route::get('/home/search', 'HomeController@search')
    ->name('search');


// submit question 
Route::post('ask', 'InsertController@ask')
    ->name('ask');

//  view user all answer
Route::get('/useranswer', 'DetailThreadController@myanswer')
    ->name('useranswer');

//  view user all question
Route::get('/userquestion', 'DetailThreadController@myquestion')
    ->name('userquestion');

// My Profile
Route::get('/profile', 'myProfileController@myProfile')
->name('myprofile');