<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nama_barang" => ["required"],
            "harga" => ["required", "gt:0"],
            "stok" => ["required", "gt:0"],
            "deskripsi" => ["required"],
            "gambar" => ["required", "mimes:png,jpg,jpeg", "max:2048"]
        ];
    }
}
