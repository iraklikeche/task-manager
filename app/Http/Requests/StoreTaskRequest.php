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
	protected function commonRules($type = 'en'): array
	{
		$regex = $type === 'ka' ? '/^[ა-ჰ\s]+$/u' : '/^[A-Za-z\s]+$/';

		return [
			'required',
			'min:3',
			"regex:$regex",
		];
	}

	public function rules(): array
	{
		return [
			'name.en'        => $this->commonRules('en'),
			'name.ka'        => $this->commonRules('ka'),
			'description.en' => $this->commonRules('en'),
			'description.ka' => $this->commonRules('ka'),
			'due_date'       => ['required', 'date'],
		];
	}
}
