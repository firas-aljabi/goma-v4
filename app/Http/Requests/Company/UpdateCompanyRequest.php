<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            "company_id" => "required|exists:companies,id",
            "name" => "nullable|string",
            "email" => "nullable|email",
            'start_commercial_record' => 'nullable|date',
            'end_commercial_record' => 'nullable|date',
            'commercial_record' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ];
    }
}
