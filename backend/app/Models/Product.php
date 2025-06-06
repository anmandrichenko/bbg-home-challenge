<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	protected $fillable = ['name', 'price', 'description', 'category_id', 'image_url', 'locale_id', 'product_id'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
