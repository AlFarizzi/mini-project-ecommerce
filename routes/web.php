<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;
use Illuminate\Support\Facades\Route;

// localhost:8000/penjual/login
// localhost:8000/penjual/register

Route::get("", [IndexController::class, "index"])->name("all.index");
Route::get('/detail/{b:nama_barang}', [IndexController::class, "DetailBarang"])->name("all.barang.detail");

Route::group(["prefix" => "pembeli"],function() {
    Route::get("/login", [PembeliController::class, "getLoginPembeli"])->name("pembeli.login");
    Route::get("/register", [PembeliController::class, "getRegisterPembeli"])->name("pembeli.register");
    Route::post("/register", [PembeliController::class, "postRegisterPembeli"]);
});

Route::group(["prefix" => "penjual"],function() {

    Route::group(["middleware" => "guest"], function() {
        Route::get("/register", [AuthController::class, "getRegisterPenjual"])->name("penjual.register");
        Route::post('/register', [AuthController::class, "postRegisterPenjual"]);

        Route::get('/login', [AuthController::class, "getLoginPenjual"])->name("penjual.login");
        Route::post('/login', [AuthController::class, "postLoginPenjual"]);
    });

    Route::group(["middleware" => "auth"], function() {
        Route::get("", [PenjualController::class, "index"])->name("penjual.index");

        // barang
        Route::get('/tambah-barang', [BarangController::class, "getDataBarang"])->name("penjual.tambah_barang");
        Route::post('/tambah-barang', [BarangController::class, "postDataBarang"]);
        Route::get("/hapus-barang/{b:nama_barang}", [BarangController::class, "deleteBarang"])->name("penjual.hapus_barang");
        Route::put('/update-barang', [BarangController::class, "putUpdateBarang"])->name("penjual.update_barang");

        // update profile
        Route::get("/update-profile", [PenjualController::class, "getUpdateProfile"])->name("penjual.update_profile");
        Route::put('/update-profile', [PenjualController::class, "putUpdateProfile"]);
        Route::put("/update-password", [PenjualController::class, "putUpdatePassword"])->name("penjual.update_password");
    });
});

Route::get('/logout', function() {
    $redirect =\ Auth::user()->level->level;
    \Auth::logout();
    return redirect()->route($redirect.".login");
});
