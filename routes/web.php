<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeGroupController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\cityController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CountryCityController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\languageController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\prodactCategoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\vendorController;
use App\Http\Controllers\vendorStoreController;
use App\Models\country;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::prefix('')->middleware('auth:web')->group(function () {
    Route::view('/', 'temp');
    Route::resource('admin', AdminController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('vendors', vendorController::class);
    Route::resource('products', productController::class);
    Route::resource('', UserController::class);
    Route::resource('prodactCategories', prodactCategoryController::class);
    Route::resource('store', vendorStoreController::class);
    Route::resource('attributeGroup', AttributeGroupController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('contactUs', ContactUsController::class);
    Route::resource('country', countryController::class);
    Route::resource('city', cityController::class);
    Route::resource('language', languageController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('order', orderController::class);

    Route::get('country-city', [CountryCityController::class, 'index']);
    Route::post('get-cities', [CountryCityController::class, 'getCity']);
    Route::post('getCities', [vendorController::class, 'fetchCities']);
    Route::post('getCities', [productController::class, 'fetchCities']);



    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
