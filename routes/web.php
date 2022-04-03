<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SliderController;

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

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});
Route::get('/', function () {
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);

    return view('web.index');
});

Auth::routes();
Route::get('/login-user', [App\Http\Controllers\web\WebController::class, 'loginUser'])->name('login-user');
Route::get('index', [App\Http\Controllers\web\WebController::class, 'index'])->name('index');
Route::get('/about_us', [App\Http\Controllers\web\WebController::class, 'about_us'])->name('about_us');
Route::get('/design', [App\Http\Controllers\web\WebController::class, 'design'])->name('design');
Route::get('/designer', [App\Http\Controllers\web\WebController::class, 'designer'])->name('designer');
Route::get('/terms_and_condition', [App\Http\Controllers\web\WebController::class, 'terms_and_condition'])->name('terms_and_condition');
Route::get('/profile', [App\Http\Controllers\web\WebController::class, 'profile'])->name('profile');
Route::get('/register-user', [App\Http\Controllers\web\WebController::class, 'register'])->name('register-user');
Route::get('/cart', [App\Http\Controllers\web\WebController::class, 'cart'])->name('cart');
Route::get('/details-page', [App\Http\Controllers\web\WebController::class, 'detailsPage'])->name('details-page');
Route::get('/affliated_programs', [App\Http\Controllers\web\WebController::class, 'affliated_programs'])->name('affliated_programs');
Route::get('/shoping', [App\Http\Controllers\web\WebController::class, 'shoping'])->name('shoping');
Route::get('/wallet', [App\Http\Controllers\web\WebController::class, 'wallet'])->name('wallet');
Route::get('/sideCart', [App\Http\Controllers\web\WebController::class, 'sideCart'])->name('sideCart');
Route::get('/responsiblites', [App\Http\Controllers\web\WebController::class, 'responsiblites'])->name('responsiblites');
Route::get('/partners', [App\Http\Controllers\web\WebController::class, 'partners'])->name('partners');
// CUSTOMER LOGIN AND REGISTRATION
Route::post('/login/customer', [App\Http\Controllers\Auth\LoginController::class, 'loginCustomer'])->name('login/customer');
Route::post('/register/customer', [App\Http\Controllers\Auth\LoginController::class, 'registerCustomer'])->name('register/customer');
Route::get('/order_tracking', [App\Http\Controllers\web\WebController::class, 'order_tracking'])->name('order_tracking');
// WEB
Route::group(['middleware' =>  'isCustomer'], function () {
});
// ADMIN
Route::group(['middleware' => 'auth', 'isAdmin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/admin/product', [App\Http\Controllers\admin\ProductController::class, 'index'])->name('admin/product');
    // SLIDER
    Route::get('/admin/slider', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('admin/slider');
    Route::get('/admin/slider/inser', [App\Http\Controllers\admin\SliderController::class, 'store'])->name('admin/slider/inser');
    Route::get('/admin/slider/edit/{id}', [App\Http\Controllers\admin\SliderController::class, 'edit'])->name('admin/slider/edit');
    Route::post('/admin/slider/update/{id}', [App\Http\Controllers\admin\SliderController::class, 'update'])->name('admin/slider/update');
    Route::get('/admin/slider/delete/{id}', [App\Http\Controllers\admin\SliderController::class, 'destroy'])->name('admin/slider/delete');
});

// SOCIAL LOGIN
Route::get('/login/gmail', [App\Http\Controllers\Auth\LoginController::class, 'socialGmail'])->name('login/gmail');
Route::get('/login/gmail/redircet', [App\Http\Controllers\Auth\LoginController::class, 'socialgmailRedirect'])->name('login/gmail/redircet');
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'socialFacebook'])->name('login/facebook');
Route::get('/login/facebook/redircet', [App\Http\Controllers\Auth\LoginController::class, 'socialfacebookRedirect'])->name('login/facebook/redircet');
