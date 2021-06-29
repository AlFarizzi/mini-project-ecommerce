<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $barang = Barang::get();
        return view("pages.all.index", compact("barang"));
    }

    public function DetailBarang(Barang $b) {
        return view("pages.all.detail_barang", compact("b"));
    }
}
