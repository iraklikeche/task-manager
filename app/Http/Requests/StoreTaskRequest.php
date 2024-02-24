<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'task.en' => [
                    'required',
                    'min:3',
                    'regex:/^[A-Za-z\s]+$/'
                ],
                'task.ge' => [
                    'required',
                    'min:3',
                    'regex:/^[ა-ჰ\s]+$/u'
                ],                'description.en' => 'required|string',
                'description.en' => [
                    'required',
                    'min:3',
                    'regex:/^[A-Za-z\s]+$/'
                ],
                'description.ge' => [
                    'required',
                    'min:3',
                    'regex:/^[ა-ჰ\s]+$/u'
                ],
                'date' => 'required|date',
    
        ];
    }
}
