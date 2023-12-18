<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TesztController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teszt', function() {
    return view('teszt');
});


Route::get('/names', 'TesztController@names');

Route::get('/names/create/{family}/{name}', 'TesztController@namesCreate');
Route::get('/families/create/{name}', 'TesztController@familyCreate');

Route::post('/names/delete', 'TesztController@deleteName');

Route::get('/names/manage/surname', 'TesztController@manageSurname');
Route::post('/names/manage/surname/delete', 'TesztController@deleteSurname');
Route::post('/names/manage/surname/new', 'TesztController@newSurname');
Route::post('/names/manage/name/new', 'TesztController@newName');
