<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/buyers', App\Http\Controllers\Api\V1\BuyerController::class)->only(['index', 'store']);
Route::apiResource('v1/available', App\Http\Controllers\Api\V1\AvailableController::class)->only(['index']);
Route::apiResource('v1/tickets', App\Http\Controllers\Api\V1\TicketController::class)->only(['index', 'store']);
