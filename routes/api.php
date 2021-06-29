<?php

use App\Http\Controllers\BarangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-barang', [BarangController::class, "getBarangViaAPI"]);
