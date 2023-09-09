<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

// Web
Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/women', [SiteController::class, 'women'])->name('women');
Route::get('/men', [SiteController::class, 'men'])->name('men');
Route::get('/child', [SiteController::class, 'child'])->name('child');
Route::get('/baby', [SiteController::class, 'baby'])->name('baby');
Route::get('/search', [SiteController::class, 'search'])->name('search');
Route::get('/account', [SiteController::class, 'account'])->name('account');
Route::get('/auth/{operation}', [SiteController::class, 'auth'])->name('auth');
Route::get('/basket', [SiteController::class, 'basket'])->name('basket');
Route::get('/about-us', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/career', [SiteController::class, 'career'])->name('career');
Route::get('/human-resources', [SiteController::class, 'hr'])->name('hr');
Route::get('/membership', [SiteController::class, 'membership'])->name('membership');
Route::get('/order-and-delivery', [SiteController::class, 'orderAndDelivery'])->name('order-and-delivery');
Route::get('/exchange-and-return-conditions', [SiteController::class, 'exchangeAndReturnConditions'])->name('exchange-and-return-conditions');
Route::get('/privacy-and-security', [SiteController::class, 'privacyAndSecurity'])->name('privacy-and-security');

Route::post('/doSearch', [SiteController::class, 'doSearch'])->name('doSearch');
Route::post('/newsletter', [SiteController::class, 'newsletter'])->name('newsletter');
Route::post('/login', [SiteController::class, 'login'])->name('login');
Route::post('/register', [SiteController::class, 'register'])->name('register');
