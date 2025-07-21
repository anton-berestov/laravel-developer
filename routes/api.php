<?php

use App\Http\Controllers\NearestGolfersController;
use Illuminate\Support\Facades\Route;

Route::get('/nearest-golfers', [NearestGolfersController::class, 'index']);
