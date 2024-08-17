<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreMobileCustomerRequest extends FormRequest
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
            'email' => 'required|email|unique:mobile_customers,email|max:255',
            'phone' => 'required|unique:mobile_customers,phone',
            'address' => 'nullable|string|max:255',
            'password' => 'required|string|min:8',
            'image' => 'nullable|image|max:1024', // Assuming image upload with a max size of 1MB
            'status' => 'required|string|in:active,inactive',
        ];
    }
}
