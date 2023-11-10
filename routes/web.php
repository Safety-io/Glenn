<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(UserController::class)->name('pages.')->group(function (){
    Route::get('/', 'index')->name('index');
    Route::post('/search', 'search')->name('search');
    Route::get('/detail/{id}', 'detail')->name('detail')->where(['id' => '[0-9]+','detail' => '[a-z]+' ]);
});

