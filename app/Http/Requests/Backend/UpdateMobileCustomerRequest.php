<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMobileCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:mobile_customers,email,' . $this->mobile_customer->id,
            'phone' => 'required|digits:10|unique:mobile_customers,phone,' . $this->mobile_customer->id,
            'address' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
            'image' => 'nullable|image|max:1024', // Assuming image upload with a max size of 1MB
            'status' => 'required|string|in:active,inactive',
        ];
    }
}
