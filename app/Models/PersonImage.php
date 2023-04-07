<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonImage extends Model
{
    use HasFactory;

    public const UPLOAD_DIR = 'uploads/persons';

	protected $guarded = [
		'id',
		'created_at',
		'updated_at'
	];

	public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '600x656';

	/**
	 * Relationship with the product
	 *
	 * @return array
	 */
	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
