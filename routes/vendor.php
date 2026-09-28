<?php

use App\Http\Controllers\Vendor1Controller;
use App\Http\Controllers\Vendor2Controller;
use App\Http\Controllers\Vendor3Controller;

use Illuminate\Support\Facades\Route;

Route::prefix("1")->group(function () {

      Route::get('/', [Vendor1Controller::class, 'index']);


});