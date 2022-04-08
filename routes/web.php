<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\PurchaseController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\CustomerController;

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
Route::get('/', [App\Http\Controllers\web\WebController::class, 'index'])->name('index');

Auth::routes();
Route::get('/login-user', [App\Http\Controllers\web\WebController::class, 'loginUser'])->name('login-user');
Route::get('index', [App\Http\Controllers\web\WebController::class, 'index'])->name('index');
Route::get('/about_us', [App\Http\Controllers\web\WebController::class, 'about_us'])->name('about_us');
Route::get('/design', [App\Http\Controllers\web\WebController::class, 'design'])->name('design');
Route::get('/designer', [App\Http\Controllers\web\WebController::class, 'designer'])->name('designer');
Route::get('/terms_and_condition', [App\Http\Controllers\web\WebController::class, 'terms_and_condition'])->name('terms_and_condition');

Route::get('/register-user', [App\Http\Controllers\web\WebController::class, 'register'])->name('register-user');
Route::get('/cart', [App\Http\Controllers\web\WebController::class, 'cart'])->name('cart');
Route::get('/details-page', [App\Http\Controllers\web\WebController::class, 'detailsPage'])->name('details-page');
Route::get('/affliated_programs', [App\Http\Controllers\web\WebController::class, 'affliated_programs'])->name('affliated_programs');
Route::get('/shoping', [App\Http\Controllers\web\WebController::class, 'shoping'])->name('shoping');
Route::get('/filter/wallet/{id}', [App\Http\Controllers\web\WebController::class, 'wallet'])->name('filter/wallet');
Route::get('/sideCart', [App\Http\Controllers\web\WebController::class, 'sideCart'])->name('sideCart');
Route::get('/responsiblites', [App\Http\Controllers\web\WebController::class, 'responsiblites'])->name('responsiblites');
Route::get('/partners', [App\Http\Controllers\web\WebController::class, 'partners'])->name('partners');
// CUSTOMER LOGIN AND REGISTRATION
Route::post('/login/customer', [App\Http\Controllers\Auth\LoginController::class, 'loginCustomer'])->name('login/customer');
Route::post('/register/customer', [App\Http\Controllers\Auth\LoginController::class, 'registerCustomer'])->name('register/customer');


// WEB
Route::group(['middleware' =>  'isCustomer'], function () {
    Route::get('/profile', [App\Http\Controllers\web\WebController::class, 'profile'])->name('profile');
    Route::get('/order_tracking', [App\Http\Controllers\web\WebController::class, 'order_tracking'])->name('order_tracking');
    Route::get('/getCustomerData/{id}', [App\Http\Controllers\web\WebController::class, 'getCustomerData'])->name('getCustomerData');
    Route::post('/update/customer/details/{id}', [App\Http\Controllers\Auth\LoginController::class, 'updateCustomerData'])->name('update/customer/details');
});

// ADMIN
Route::group(['middleware' =>  'isAdmin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    // PRODUCT
    Route::get('/admin/product', [App\Http\Controllers\admin\ProductController::class, 'index'])->name('admin/product');
    Route::post('/admin/product/store', [App\Http\Controllers\admin\ProductController::class, 'store'])->name('admin/product/store');
    Route::get('/admin/product/edit/{id}', [App\Http\Controllers\admin\ProductController::class, 'edit'])->name('admin/product/edit');
    Route::post('/admin/product/update/{id}', [App\Http\Controllers\admin\ProductController::class, 'update'])->name('admin/product/update');
    Route::get('/admin/product/delete/{id}', [App\Http\Controllers\admin\ProductController::class, 'delete'])->name('admin/product/delete');
    Route::get('/admin/product/fetch', [App\Http\Controllers\admin\ProductController::class, 'fetchproduct'])->name('admin/product/fetch');

    // SLIDER
    Route::get('/admin/slider', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('admin/slider');
    Route::post('/admin/slider/insert', [App\Http\Controllers\admin\SliderController::class, 'store'])->name('admin/slider/insert');
    Route::get('/admin/slider/edit/{id}', [App\Http\Controllers\admin\SliderController::class, 'edit'])->name('admin/slider/edit');
    Route::post('/admin/slider/update/{id}', [App\Http\Controllers\admin\SliderController::class, 'update'])->name('admin/slider/update');
    Route::get('/admin/slider/delete/{id}', [App\Http\Controllers\admin\SliderController::class, 'destroy'])->name('admin/slider/delete');
    // CATEGORY
    Route::get('/admin/category', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('admin/category');
    Route::post('/admin/category/insert', [App\Http\Controllers\admin\CategoryController::class, 'store'])->name('admin/category/insert');
    Route::get('/admin/category/edit/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('admin/category/edit');
    Route::post('/admin/category/update/{id}', [App\Http\Controllers\admin\CategoryController::class, 'update'])->name('admin/category/update');
    Route::get('/admin/category/delete/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('admin/category/delete');
    // PURCHASE
    Route::get('/admin/purchase', [App\Http\Controllers\admin\PurchaseController::class, 'index'])->name('admin/purchase');
    Route::post('/admin/purchase/insert', [App\Http\Controllers\admin\PurchaseController::class, 'store'])->name('admin/purchase/insert');
    Route::get('/admin/purchase/edit/{id}', [App\Http\Controllers\admin\PurchaseController::class, 'edit'])->name('admin/purchase/edit');
    Route::post('/admin/purchase/update/{id}', [App\Http\Controllers\admin\PurchaseController::class, 'update'])->name('admin/purchase/update');
    Route::get('/admin/purchase/delete/{id}', [App\Http\Controllers\admin\PurchaseController::class, 'destroy'])->name('admin/purchase/delete');
    // ORDER
    Route::get('/admin/order', [App\Http\Controllers\admin\OrderController::class, 'index'])->name('admin/order');
    Route::post('/admin/order/changeStatus', [App\Http\Controllers\admin\OrderController::class, 'changeStatus'])->name('admin/order/changeStatus');
    Route::get('/admin/orderHistory', [App\Http\Controllers\admin\OrderController::class, 'orderHistory'])->name('admin/orderHistory');
    Route::post('/admin/order/delieveryDate', [App\Http\Controllers\admin\OrderController::class, 'delieveryDate'])->name('admin/order/delieveryDate');
    // CUSTOMER
    Route::get('/admin/custometList', [App\Http\Controllers\admin\CustomerController::class, 'index'])->name('/admin/custometList');
});

// SOCIAL LOGIN
Route::get('/login/gmail', [App\Http\Controllers\Auth\LoginController::class, 'socialGmail'])->name('login/gmail');
Route::get('/login/gmail/redircet', [App\Http\Controllers\Auth\LoginController::class, 'socialgmailRedirect'])->name('login/gmail/redircet');
Route::get('/login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'socialFacebook'])->name('login/facebook');
Route::get('/login/facebook/redircet', [App\Http\Controllers\Auth\LoginController::class, 'socialfacebookRedirect'])->name('login/facebook/redircet');
