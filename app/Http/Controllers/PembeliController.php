<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\PenjualRegisterRequest;

class PembeliController extends Controller
{
    public function getLoginPembeli() {
        return view("pages.pembeli.login");
    }

    public function getRegisterPembeli() {
        return view("pages.pembeli.register");
    }

    public function postRegisterPembeli(PenjualRegisterRequest $request) {
        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "nohp" => $request->nohp,
            "alamat" => $request->alamat,
            "password" => bcrypt($request->password),
            "level_id" => 3
        ]);
        return redirect()->route("pembeli.login");
    }

}
