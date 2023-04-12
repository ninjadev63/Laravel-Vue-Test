<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;

class Product extends Model
{
	use HasFactory;

	protected $casts = [
		'category_id' => 'integer',
	];

	/**
	 * Get the user that owns the category
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo(Category::class, 'categories_id', 'id');
	}
}
