<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/advertisings';
    public const SMALL = '135x75';

    public function segments()
	{
		return $this->belongsToMany(AdvertisingSegment::class);
	}
}
