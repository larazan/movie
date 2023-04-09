<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'rand_id',
        'members',
        'description',
        'country',
        'original',
        'medium',
        'small',
        'status',
    ];

    public const UPLOAD_DIR = 'uploads/groups';

    public const MEDIUM = '312x400';
	public const SMALL = '135x75';

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function members()
    {
        return $this->belongsToMany(Person::class, 'member_group');
    }
}
