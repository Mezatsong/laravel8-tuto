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

Route::get('test/{nom?}', function ($nom = 'Ben') {
    return view('test', ['nom' => $nom]);
})->name('name-test');


Route::view('page-1', 'lien1')->name('lien1');
Route::view('page-2', 'lien2')->name('lien2');
Route::view('page-3', 'lien3')->name('lien3');
Route::view('page-4', 'lien4')->name('lien4');
Route::view('page-5', 'lien5')->name('lien5');
