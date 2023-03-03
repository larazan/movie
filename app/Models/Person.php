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

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';
	public const LARGE = '1000x600';
}
