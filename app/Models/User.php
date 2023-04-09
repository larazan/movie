<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    const DEFAULT = 1;
    const MODERATOR = 2;
    const ADMIN = 3;

    const TABLE = 'users';

    protected $table = self::TABLE;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'password', 
        'address1', 
        'address2', 
        'province_id', 
        'city_id', 
        'postcode', 
        'profile_photo_path',
    ];

    public const UPLOAD_DIR = 'uploads/user';
	public const SMALL = '135x75';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function lastName(): string
    {
        return $this->last_name;
    }

    // public function bio(): string
    // {
    //     return $this->bio;
    // }

    public function emailAddress(): string
    {
        return $this->email;
    }

    // public function type(): int
    // {
    //     return (int) $this->type;
    // }

    // public function isModerator(): bool
    // {
    //     return $this->type() === self::MODERATOR;
    // }

    // public function isAdmin()
    // {
    //     // return $this->type() === self::ADMIN;
    //     return self::where('type', self::ADMIN)->first();
    // }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class)->orderBy('position');
    }

    public function boards()
    {
        return $this->hasMany(Board::class);
    }

    public function threads()
    {
        // make database relationship and return threads in proper order
        return $this->hasMany(Thread::class)->latest();
    }
}
