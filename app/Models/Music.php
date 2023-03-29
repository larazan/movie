<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    const SINGLE = 1;
    const ALBUM = 2;

    protected $table = 'musics';
    protected $guarded = [];

    public const UPLOAD_DIR = 'uploads/musics';
    public const UPLOAD_AUDIO = 'uploads/files/audios';

    public const SMALL = '135x141';
	public const MEDIUM = '312x400';

    public function isSingle(): bool
    {
        return $this->type() === self::SINGLE;
    }

    public function isAlbum(): bool
    {
        return $this->type() === self::ALBUM;
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
