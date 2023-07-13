<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reque_clientes extends FormRequest
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
            'customers_id_number' => 'required',
            'customers_name' => 'required',
            'customers_birth_date' => 'required|date',
            'customers_address' => 'required',
            'customers_phone' => 'required',
            'ciudad_id' => 'required',
        ];
    }
}
