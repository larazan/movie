<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    use HasFactory;

    public const UPLOAD_DIR = 'uploads/movies';

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '600x656';
	public const EXTRA_LARGE = '1125x1200';

	/**
	 * Relationship with the product
	 *
	 * @return array
	 */
	public function movie()
	{
		return $this->belongsTo(Movie::class);
	}
}
