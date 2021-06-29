<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualRegisterRequest extends FormRequest
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
            "nama" => ["required"],
            "email" => ["required", "unique:users,email"],
            "nohp" => ["required"],
            "password" => ["required", "confirmed"],
            "password_confirmation" => ["required"]
        ];
    }
}
