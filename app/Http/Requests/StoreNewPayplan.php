<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewPayplan extends FormRequest
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
            'name' => 'required|unique:payplans|max:255',
            'description' => 'required|nullable|max:255',
            'is_recurring' => 'boolean',
            'billing_cycle' => 'required',
            'payplan_terms' => 'alpha_dash|unique:payplans|max:255',
            'is_active' => 'boolean'
        ];
    }
}
