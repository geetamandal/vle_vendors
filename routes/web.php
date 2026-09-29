<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UtilController;
use Illuminate\Support\Facades\Route;

  Route::get('/', [PublicController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('cache_clear', [Controller::class, 'getArtisanCommand']);
Route::get('/generate-captcha', [UtilController::class, 'generate_captcha']);
Route::post('/send-otp', [AuthController::class, 'sendOtp']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
Route::get('/logout', [AuthController::class, 'logout']);
  Route::get('/dashboard', [AdminController::class, 'dashboard']);

  Route::get('/about',[PublicController::class,'aboutUs']);
  Route::match(['get', 'post'],'/contact',[PublicController::class,'contactUs']);
  Route::get('/product',[PublicController::class,'product']);
  Route::get('/product-details/{id}',[PublicController::class,'productDetails']);
  Route::match(['get','post'],'/cart',[PublicController::class,'addToCart']);
  Route::match(['get','post'],'/checkout',[PublicController::class,'checkOut']);



  Route::get('/add-customer', [AdminController::class, 'addCustomer']);
  Route::get('/customer-list', [AdminController::class, 'customerList']);

  Route::get('/add-lead', [AdminController::class, 'LeadEntry']);
  Route::get('/portfolio',[PublicController::class,'Portfolio']);
  Route::get('/portfolio-details',[PublicController::class,'PortfolioDetails']);
  Route::get('/service',[PublicController::class,'Services']);
  Route::match(['get','post'],'/cart',[PublicController::class,'addToCart']);  
  Route::get('/service',[PublicController::class,'service']);
  Route::get('/service-details',[PublicController::class,'serviceDetails']);

  Route::match(['get', 'post'],'/registration', [PublicController::class, 'registrations']);
  Route::get('/shops',[PublicController::class,'shop']);



  