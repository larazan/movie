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
        'description',
        'country',
        'year',
        'status',
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function members()
    {
        return $this->belongsToMany(Person::class, 'member_group');
    }

    public function groupImages()
    {
        return $this->hasMany(GroupImage::class);
    }

    public function groupMembers()
    {
        return $this->hasMany(MemberGroup::class);
    }
}

// create member group table pivot
// create group image table pivot 
// multiple image group