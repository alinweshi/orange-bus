<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Frontend\ApiRequest;

class UpdateAppRateRequest extends ApiRequest
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
            'comment' => 'string|max:255',
            'rate' => 'required|numeric|min:1|max:5',
        ];
    }
}
