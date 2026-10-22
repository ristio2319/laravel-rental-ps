<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

Route::get('/', function () {
    return redirect()->route('rentals.index');
});

Route::resource('rentals', RentalController::class);