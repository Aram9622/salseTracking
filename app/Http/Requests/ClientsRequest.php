<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
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
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'max:255', 'email'],
          'event' => ['required', 'string'],
          'phone' => ['required', 'string'],
          'address' => ['required', 'string'],
          'state' => ['required', 'string'],
          'city' => ['required', 'string'],
          'country' => ['required', 'string'],
          'select_package' => ['required', 'string'],
          'zip_code' => ['required', 'string', 'max:5'],
          'credit_card' => ['required', 'string'],
          'credit_card_number' => ['required', 'string'],
          'card_holder_name' => ['required', 'string'],
          'cvv' => ['required'],
          'expire_month' => ['required', 'string'],
          'expire_year' => ['required', 'string']
        ];
    }
}
