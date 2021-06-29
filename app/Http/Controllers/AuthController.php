<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PenjualRegisterRequest;

class AuthController extends Controller
{
   public function getRegisterPenjual() {
        return view("pages.penjual.register");
   }

   public function postRegisterPenjual(PenjualRegisterRequest $request) {
        User::create([
            "nama" => $request->nama,
            "email" => $request->email,
            "nohp" => $request->nohp,
            "alamat" => $request->alamat,
            "password" => bcrypt($request->password),
            "level_id" => 2
        ]);
        return redirect()->route("penjual.login");
    }

    public function getLoginPenjual() {
        return view("pages.penjual.login");
    }

    public function postLoginPenjual(Request $request) {
        if(Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            // return redirect("/login");
            return redirect()->route("penjual.index");
        } else {
            return redirect()->back();
        }
    }

}
