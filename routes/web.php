<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return redirect()->route('countries.index');
});

Route::resource('countries', CountryController::class);
