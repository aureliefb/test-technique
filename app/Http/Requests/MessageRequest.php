<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
        // data validation
        return [
          'last_name'   => 'required|min:2',
          'first_name'  => 'required|min:2',
          'email'       => 'required|email',
          'phone'       => 'required|numeric',
          'subject'     => 'required|min:10'
        ];
    }
}
