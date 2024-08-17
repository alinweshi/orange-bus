<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class CardCustomerUpdateRequest extends FormRequest
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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:card_customers,email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
            'password' => 'required|string|min:8',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'cardType' => 'required|in:gold,silver,platinum',
            'cardNumber' => 'required|string',
            'cardExpiryDate' => 'required|date',
            'cardCVV' => 'required|string',
            'cardIssueDate' => 'required|date',
            'cardBalance' => 'required|numeric',
            'cardLimit' => 'required|numeric',
        ];
    }
}
