<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable  = ['name'];

    // table sing._ table sing.
    // category_product

	public function products(){
		return $this->belongsToMany(Category::class);
	}

	/** @var Builder $category */
	/*$category = new Category();
	$query = $category->where()
					->where()
					->where()
	$query->where()
		$results = $query->get();*/
}
