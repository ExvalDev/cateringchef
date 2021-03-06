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

/* Route::get('/', function () {
    return view('menu');
}); */

Auth::routes(['verify' => true]);

Route::get('/', 'MenuController@index')->middleware('verified');
Route::get('/tables', 'TableController@index')->middleware('verified');
Route::resource('/customer', 'CustomerController')->middleware('verified');
Route::resource('/supplier', 'SupplierController')->middleware('verified');
Route::resource('/ingredient', 'IngredientController')->middleware('verified');
Route::resource('/component', 'ComponentController')->middleware('verified');
Route::resource('/meal', 'MealController')->middleware('verified');
Route::view('/impressum', 'impressum');
Route::view('/datenschutz', 'datenschutz');
Route::post('/menu', 'MenuController@store')->middleware('verified');
Route::get('/menu', 'MenuController@index')->middleware('verified');
Route::get('/menu/changeWeek/{week}/{direction}', 'MenuController@index')->middleware('verified');
Route::get('/menu/changeYear', 'MenuController@changeYear')->middleware('verified');
Route::delete('menu/{id}', 'MenuController@destroy')->middleware('verified');
Route::post('/menu/einkaufsliste', 'PDFController@createShoppingList')->middleware('verified');

