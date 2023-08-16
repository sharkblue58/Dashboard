<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook'=>'nullable|string',
            'instagram'=>'nullable|string',
            'phone'=>'nullable|numeric',
            'email'=>'nullable|email',
            
            'ar' => 'nullable|array',            
            'ar.title' => 'nullable|string',
            'ar.content' => 'nullable|string',
            'ar.address' => 'nullable|string',

            'en' => 'nullable|array',
            'en.title' => 'nullable|string',
            'en.content' => 'nullable|string',
            'en.address' => 'nullable|string',

            'fr' => 'nullable|array',
            'fr.title' => 'nullable|string',
            'fr.content' => 'nullable|string',
            'fr.address' => 'nullable|string',
        ];
    }
}
