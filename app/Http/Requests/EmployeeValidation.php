<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeValidation extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:254',
            'email' => 'required|email:rfc,dns|unique:employees,email,'.$this->id,
            'phone' => 'required|numeric|digits_between:8,20|unique:employees,phone,'.$this->id,
            'address' => 'required|max:254',
            'birth_date' => 'required|date',
            'gender' => 'required|numeric',
            'nationality' => 'required|max:50',
            'job_title' => 'required|max:254',
            'education' => 'required|max:254',
            'salary' => 'required|numeric',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'avatar' => 'nullable|image'
        ];
    }
}
