<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackpackController;

Route::get('/', [BackpackController::class, 'index']);
