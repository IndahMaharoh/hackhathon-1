<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('index');
});