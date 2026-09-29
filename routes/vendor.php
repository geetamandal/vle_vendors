<?php

use App\Http\Controllers\Vendor1Controller;
use App\Http\Controllers\Vendor2Controller;
use App\Http\Controllers\Vendor3Controller;

use Illuminate\Support\Facades\Route;

Route::prefix("1")->group(function () {


      Route::get('/index-1', [Vendor1Controller::class, 'index_1']);
      Route::get('/service-1',[Vendor1Controller::class,'services']);
     Route::get('/contact-1',[Vendor1Controller::class,'contact_us']);
           Route::get('/product-1', [Vendor1Controller::class, 'product']);
           Route::get('/product-details-1',[Vendor1Controller::class,'productDetails']);
            Route::get('/cart-1', [Vendor1Controller::class, 'cart']);
      Route::get('/checkout-1', [Vendor1Controller::class, 'checkout']);
      Route::get('/placeorder-success-1', [Vendor1Controller::class, 'placeorder']);
      

});

Route::prefix("2")->group(function () {

      Route::get('/index-2', [Vendor2Controller::class, 'index']);
      Route::get('/product-2', [Vendor2Controller::class, 'product']);
      Route::get('/service-2', [Vendor2Controller::class, 'service']);
      Route::get('/contact-2', [Vendor2Controller::class, 'contact']);
      Route::get('/user-login-2', [Vendor2Controller::class, 'userLogin']);
      Route::get('/cart-2', [Vendor2Controller::class, 'cart']);
      Route::get('/checkout-2', [Vendor2Controller::class, 'checkout']);
      Route::get('/order-success-2', [Vendor2Controller::class, 'placeorder']);
       Route::get('/service-details-2', [Vendor2Controller::class, 'serviceDetails']);
});
