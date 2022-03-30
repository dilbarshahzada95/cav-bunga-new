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
Route::get('index', [App\Http\Controllers\web\WebController::class, 'index'])->name('index');
Route::get('/about_us', [App\Http\Controllers\web\WebController::class, 'about_us'])->name('about_us');
Route::get('/design', [App\Http\Controllers\web\WebController::class, 'design'])->name('design');
Route::get('/designer', [App\Http\Controllers\web\WebController::class, 'designer'])->name('designer');
Route::get('/terms_and_condition', [App\Http\Controllers\web\WebController::class, 'terms_and_condition'])->name('terms_and_condition');
Route::get('/profile', [App\Http\Controllers\web\WebController::class, 'profile'])->name('profile');
Route::get('/register-user', [App\Http\Controllers\web\WebController::class, 'register'])->name('register-user');
Route::get('/login-user', [App\Http\Controllers\web\WebController::class, 'loginUser'])->name('login-user');
Route::get('/cart', [App\Http\Controllers\web\WebController::class, 'cart'])->name('cart');
Route::get('/details-page', [App\Http\Controllers\web\WebController::class, 'detailsPage'])->name('details-page');
Route::get('/affliated_programs', [App\Http\Controllers\web\WebController::class, 'affliated_programs'])->name('affliated_programs');
Route::get('/order_tracking', [App\Http\Controllers\web\WebController::class, 'order_tracking'])->name('order_tracking');
Route::get('/shoping', [App\Http\Controllers\web\WebController::class, 'shoping'])->name('shoping');
Route::get('/wallet', [App\Http\Controllers\web\WebController::class, 'wallet'])->name('wallet');
// ADMIN
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
});
