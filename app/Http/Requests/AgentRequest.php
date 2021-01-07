<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
          'f_name' => ['nullable'],
          'l_name' => ['nullable'],
          'email' => ['nullable', 'email'],
          'phone' => ['nullable'],
          'physical_address' => ['nullable'],
          'zip_code' => ['nullable'],
          'npn' => ['nullable'],
          'password' => ['nullable', 'confirmed'],
          'credit_card' => ['nullable'],
          'credit_card_number' => ['nullable'],
          'card_holder_name' => ['nullable'],
          'cvv' => ['nullable', 'max:3'],
          'expiry_month' => ['nullable'],
          'expiry_year' => ['nullable'],
          'image' => 'nullable|file|mimes:jpeg,jpg,png,gif'
        ];
    }
}
