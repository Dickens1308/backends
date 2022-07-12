<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::controller(ApiController::class)->group(function () {
    Route::post('/mails', 'mails');
    Route::post('/subscribe', 'subscribe');
});
