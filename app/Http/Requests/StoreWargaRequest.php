<?php

namespace App\Http\Requests;

use App\History_Warga;
use Illuminate\Foundation\Http\FormRequest;

class StoreWargaRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('warga_create');
    }

    public function rules()
    {
        return [ ];
    }
}
