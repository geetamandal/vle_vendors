<?php

use App\Http\Controllers\HousingLeadController;
use Illuminate\Support\Facades\Route;

Route::prefix("api")->group(function () {
Route::get('/housing-broker-leads', [HousingLeadController::class, 'brokerLeadFetch']);
Route::get('/housing-broker-leads-sync', [HousingLeadController::class, 'brokerLeadSync']);

Route::get('/housing-leads-builder', [HousingLeadController::class, 'builderLeadFetch']);
Route::get('/housing-leads-builder-sync', [HousingLeadController::class, 'builderLeadSync']);


});