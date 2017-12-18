<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Product extends Model
{
	//protected $fillable = ['slug', 'name', 'image', 'category_id'];

	public static function toJsJson($products)
	{
		$productsJson = [];
		foreach ($products as $product) {
			$productJson = [];
			$productJson['_title'] = $product->name;
			$productJson['_category'] = $product->category()->first()->slug;
			$productJson['_image'] = Helpers::thumbnail(Voyager::image($product->image), 'cropped');
			$productJson['_benefits'] = Helpers::removeFirstParagraph($product->benefits);
			$productJson['_slug'] = $product->slug;
			$productsJson [] = $productJson;
		}

		return $productsJson;
	}

	public function category()
	{
		return $this->belongsTo('App\ProductCategory', 'category_id', 'id');
	}
}
