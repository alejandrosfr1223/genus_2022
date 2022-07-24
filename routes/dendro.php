<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dendro.dendro');
})->name("home");