<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	use HasFactory;

	protected $guarded = [];

	public function scopeOverdue($query)
	{
		return $query->where('due_date', '<', now());
	}

	public function scopeSortByField($query, $sortField = 'created_at', $sortOrder = 'desc')
	{
		$validFields = ['created_at', 'due_date'];

		if (!in_array($sortField, $validFields)) {
			$sortField = 'created_at';
		}

		$sortOrder = $sortOrder === 'asc' ? 'asc' : 'desc';

		return $query->orderBy($sortField, $sortOrder);
	}
}
