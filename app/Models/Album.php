<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'group_id',
        'person_id',
        'slug',
        'rand_id',
        'year',
        'description',
        'country',
        'original',
        'medium',
        'small',
        'status',
    ];

    public const UPLOAD_DIR = 'uploads/albums';

    public const MEDIUM = '312x400';
	public const SMALL = '135x75';

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
