<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
	public $fillable = [
		'id',
		'title',
		'original_title',
		'overview',
		'poster_path',
		'media_type',
		'adult',
		'original_language',
		'popularity',
		'vote_average',
		'vote_count',
	];
}
