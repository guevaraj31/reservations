<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/buyers', App\Http\Controllers\Api\V1\BuyerController::class)->only(['index', 'show', 'store']);