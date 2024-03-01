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
			'name.en'        => 'required|min:3|regex:/^[A-Za-z\s]+$/',
			'name.ka'        => 'required|min:3|regex:/^[ა-ჰ\s]+$/u',
			'description.en' => 'required|min:3|regex:/^[A-Za-z\s]+$/',
			'description.ka' => 'required|min:3|regex:/^[ა-ჰ\s]+$/u',
			'due_date'       => 'required|date',
		];
	}

	public function messages(): array
	{
		// {{ __('auth.welcome_back') }}
		return [
			'name.en.required'        => __('errors.name_en_required'),
			'name.en.min'             => __('errors.name_en_min'),
			'name.en.regex'           => __('errors.name_en_regex'),
			'name.ka.required'        => __('errors.name_ka_required'),
			'name.ka.min'             => __('errors.name_ka_min'),
			'name.ka.regex'           => __('errors.name_ka_regex'),
			'description.en.required' => __('errors.description_en_required'),
			'description.en.min'      => __('errors.description_en_min'),
			'description.en.regex'    => __('errors.description_en_regex'),
			'description.ka.required' => __('errors.description_ka_required'),
			'description.ka.min'      => __('errors.description_ka_min'),
			'description.ka.regex'    => __('errors.description_ka_regex'),
			'due_date.required'       => __('errors.due_date_required'),
			'due_date.date'           => __('errors.due_date_date'),
		];
	}
}
