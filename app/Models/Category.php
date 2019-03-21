<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable  = ['name'];

    // table sing._ table sing.
    // category_product

	public function products(){
		return $this->belongsToMany(Category::class);
	}
}
