<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class karyawanRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nik' => 'required|number',
            'user_id' => 'required|integer|exists:user_id,id',
            'nama' => 'required|max:255',
            'posisi' => 'required|max:255',
            'depart_id' => 'required|integer|exists:depart_id,id',
            'status' => 'required|max:255',
            'no_telp' => 'required|number'
        ];
    }
}
