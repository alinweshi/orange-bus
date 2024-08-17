<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class DriverUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:drivers,email',
            'bus_id' => 'required|integer',
            'phone' => 'required',
            'code' => 'required',
            'driving_license_serial' => 'required',
            'license_expiry_date' => 'required|date',
            'personal_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'string',
        ];
    }
}