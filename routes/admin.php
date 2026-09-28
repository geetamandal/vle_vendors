<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VLEController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::match(['get','post'],'/add-vle',[AdminController::class,'addVle']);
    Route::post('/enquiry-assign/{id}', [AdminController::class, 'AssignEnquiry']);
    Route::get('/user-list',[ReportController::class,'userList']);
    Route::post('/add-user',[AdminController::class,'addUser']);

});

Route::prefix("vle")->group(function () {
    Route::get('/dashboard', [VLEController::class, 'dashboard']);
   
     Route::get('/service-list', [VLEController::class, 'serviceList']);
     Route::match(['get', 'post'], '/add-product', [VLEController::class, 'productEntry']);
     Route::get('/enquiry-list',[VLEController::class,'enquiryList']);
     Route::match(['get', 'post'],'/add-customer',[VLEController::class,'addCustomer']);
     Route::match(['get','post'],'/advertisement-entry',[VLEController::class,'advertisementEntry']);
    Route::match(['get','post'],'/offer-entry',[VLEController::class,'offerEntry']);

});


