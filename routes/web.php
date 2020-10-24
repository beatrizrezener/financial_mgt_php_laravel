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

Auth::routes();

Route::resource('category', 'App\Http\Controllers\CategoryController')->name('index', 'category')->middleware('auth');
Route::resource('expense', 'App\Http\Controllers\ExpenseController')->name('index', 'expense')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/expense/{category}/category', [App\Http\Controllers\ExpenseController::class, 'category'])->name('expense.category');
