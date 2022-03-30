<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
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
    return view('web.index');
});

Auth::routes();

// WEB
Route::get('/index', [App\Http\Controllers\WebController::class, 'index'])->name('index');
// ADMIN
Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
);

