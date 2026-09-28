<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::prefix("common")->group(function () {
        Route::get('/vle-list', [CommonController::class, 'vleList']);
        Route::get('/product-list', [ReportController::class, 'productList']);
        Route::get('/product-details/{id}', [ReportController::class, 'productDetails']);
        Route::get('/vle-details',[CommonController::class,'vleDetails']);
        Route::get('/customer-list',[CommonController::class,'customerList']);
        Route::get('/order-list', [ReportController::class, 'orderList']);
        Route::get('/advertisement-list',[ReportController::class,'advertisementList']);
        Route::get('/offer-list',[ReportController::class,'offerList']);
});
