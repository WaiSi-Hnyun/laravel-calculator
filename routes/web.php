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

Route::get('/', 'Calculator\CalculatorController@index')->name('calculator.index');
Route::post('/add', 'Calculator\CalculatorController@add')->name('calculator.add');
Route::post('/multiply', 'Calculator\CalculatorController@multiply')->name('calculator.multiply');
Route::post('/divide', 'Calculator\CalculatorController@divide')->name('calculator.divide');
