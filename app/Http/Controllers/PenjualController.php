<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BarangController;
use App\Http\Requests\UpdatePasswordPenjual;
use App\Http\Requests\UpdateProfilePenjualRequest;

class PenjualController extends Controller
{

    public function index() {
        return view("pages.penjual.index");
    }

    public function getUpdateProfile() {
        return view("pages.penjual.update_profile");
    }

    public function putUpdateProfile(UpdateProfilePenjualRequest $request) {
        Auth::user()->update([
            "nama" => $request->nama,
            "email" => $request->email,
            "alamat" => $request->alamat
        ]);
        return redirect()->back();
    }

    public function putUpdatePassword(UpdatePasswordPenjual $request) {
        $helper = new BarangController();
        if(Hash::check($request->password_lama, Auth::user()->password)) {
            $update = Auth::user()->update([
                "password" => bcrypt($request->password)
            ]);
            return $update === true
            ? $helper->pesan("Update Password Berhasil", "penjual.update_profile")
            : $helper->pesan("Update Password Gagal", "penjual.update.profile");
        } else {
            dd("gagal");
            return redirect()->back();
        }
    }

}
