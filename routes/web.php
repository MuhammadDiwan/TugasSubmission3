<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::resource('laptops', LaptopController::class);