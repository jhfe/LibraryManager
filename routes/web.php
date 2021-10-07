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
Route::group(['middleware' => 'auth'], function() {
/*    Route::get('/', function () {
        return view('welcome');
    });*/
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::resource('categories', App\Http\Controllers\CategoryController::class);

    Route::resource('tags', App\Http\Controllers\TagController::class);

    Route::resource('authors', App\Http\Controllers\AuthorController::class);

    Route::resource('members', App\Http\Controllers\MemberController::class);

    Route::resource('publishers', App\Http\Controllers\PublisherController::class);

    Route::resource('items', App\Http\Controllers\ItemController::class);
});








Route::resource('itemTypes', App\Http\Controllers\ItemTypeController::class);