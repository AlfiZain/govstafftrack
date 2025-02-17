<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'nip' => 'required|string|max:25',
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'place_of_birth' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:10',
            'religion' => 'required|string|max:50',
            'phone' => 'required|string|max:15',
            'npwp' => 'required|string|max:25',
            'unit_id' => 'required',
            'position_id' => 'required',
        ];
    }
}
