<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mix extends Model
{
	public function products()
	{
		return $this->belongsToMany('App\Product', 'mix_product', 'mix_id', 'product_id');
	}
}