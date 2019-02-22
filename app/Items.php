<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model

{
	protected $table ='items';
	
	protected $fillable = [
		'name',
		'model',
		'category_id',
		'description'
	];
}