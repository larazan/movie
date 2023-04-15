<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberGroup extends Model
{
    use HasFactory;

    protected $table = 'member_groups';

    protected $fillable = [
        'person_id',
        'group_id',
    ];

    public function group()
	{
		return $this->belongsTo(Group::class);
	}
}
