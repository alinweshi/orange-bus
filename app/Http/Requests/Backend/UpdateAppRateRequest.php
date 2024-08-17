<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppRateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */public function rules(): array
    {
        return [
            'comment' => 'string|max:255',
            'rate' => 'required|numeric|min:1|max:5',
            'rateable_id' => 'required|integer|exists:card_customers,id|exists:mobile_customers,id', // Ensure customer ID exists in the database
            'rateable_type' => 'required|string|in:CardCustomer,MobileCustomer', // Ensure valid type
        ];
    }
}
