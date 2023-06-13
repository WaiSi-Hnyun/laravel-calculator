<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
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
        $rules = [
            'first_num' => ['required', 'numeric', 'integer'],
            'sec_num' => ['required', 'numeric', 'integer']
        ];

        if ($this->is('divide')) {
            $rules['sec_num'][] = 'not_in:0';
        }

        return $rules;
    }

    /**
     * This is custom vaildation message
     *
     * @return array
     */
    public function messages()
    {
        return [
            'sec_num.not_in' => 'The second number must not be zero when dividing.'
        ];
    }
}
