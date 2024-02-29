<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
			'current_password'             => 'required_with:new_password|nullable',
			'new_password'                 => 'required_with:current_password|min:4|confirmed|nullable',
			'new_password_confirmation'    => 'same:new_password',
			'avatar'                       => 'image',
			'cover'                        => 'image',
		];
	}
}
