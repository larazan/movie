<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'user_id',
        'title',
        'body',
        'position',
        'original',
        'medium',
        'small',
        'status',
    ];

    public const UPLOAD_DIR = 'uploads/tasks';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
