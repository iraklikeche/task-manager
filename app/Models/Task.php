<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Task extends Model
{
	use HasFactory,	HasTranslations;

	protected $guarded = [];

	public $translatable = ['name', 'description'];

	public function scopeOverdue($query): Builder
	{
		return $query->where('due_date', '<', now());
	}

	public function scopeSortByField($query, $sortField = 'created_at', $sortOrder = 'desc'): Builder
	{
		$validFields = ['created_at', 'due_date'];

		if (!in_array($sortField, $validFields)) {
			$sortField = 'created_at';
		}

		$sortOrder = $sortOrder === 'asc' ? 'asc' : 'desc';

		return $query->orderBy($sortField, $sortOrder);
	}
}
