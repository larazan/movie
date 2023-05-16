<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/festivals';

    public const MEDIUM = '1920x643';
	public const SMALL = '135x75';
}
