<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('genea.genea');
})->name("home");