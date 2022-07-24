<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicBookController;

Route::get('/', function () {
    return view('nous.nous');
})->name("home");