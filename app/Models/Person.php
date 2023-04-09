<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';
    protected $guarded = [];
    // protected $fillable = ['']

    public const UPLOAD_DIR = 'uploads/persons';

    /**
	 * Define relationship with the ProductImage
	 *
	 * @return void
	 */
	public function personImages()
	{
		return $this->hasMany(PersonImage::class, 'person_id', 'id')->orderBy('id', 'DESC');
	}

	public function groups()
	{
		return $this->belongsToMany(Group::class, 'member_group')->latest();
	}
}
