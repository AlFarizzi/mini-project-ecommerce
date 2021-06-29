<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BarangRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{

    public function pesan($pesan, $route) {
        Session::flash("pesan", $pesan);
        return redirect()->route($route);
    }

    public function getDataBarang() {
        $barang = Auth::user()->barang;
        return view("pages.penjual.barang", compact("barang"));
    }

    public function postDataBarang(BarangRequest $request) {
        $img = $request->file("gambar")->store("barang");
        $barang = Barang::create([
            "user_id" => \Auth::user()->id,
            "nama_barang" => $request->nama_barang,
            "harga" => $request->harga,
            "stok" => $request->stok,
            "gambar" => $img,
            "deskripsi" => $request->deskripsi
        ]);
            return $barang->id > 0
            ? $this->pesan("Barang Berhasil Ditambahkan", "penjual.tambah_barang")
            : $this->pesan("Barang Gagal Ditambahkan", "penjual.tambah_barang");
    }

    public function deleteBarang(Barang $b) {
        \Storage::delete($b->gambar);
        $hapus = $b->delete();
        return $hapus === true
            ? $this->pesan("Barang Berhasil Dihapus", "penjual.tambah_barang")
            : $this->pesan("Barang Gagal Dihapus", "penjual.tambah_barang");
    }

    public function getBarangViaAPI(Request $request) {
        $barang = Barang::where("id", $request->id)->first();
        return response()->json($barang);
    }

    public function putUpdateBarang(Request $request) {
        $barang = Barang::where("id",$request->id)->first();
        Storage::delete($barang->gambar);
        $img = $request->file("gambar")->store("barang");
        $update = $barang->update([
            "user_id" => \Auth::user()->id,
            "nama_barang" => $request->nama_barang,
            "harga" => $request->harga,
            "stok" => $request->stok,
            "gambar" => $img,
            "deskripsi" => $request->deskripsi
        ]);
           return $update
           ? $this->pesan("Update Barang Berhasil", "penjual.tambah_barang")
           : $this->pesan("Update Barang Gagal", "penjual.tambah_barang");
    }

}
