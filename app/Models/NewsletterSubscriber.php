<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    use HasFactory;
     
    protected $table = 'newsletter_subscribers';

    protected $fillable = [
        'email',
        'token',
        'status',
    ];

    public function scopeSubscribed($query, $flag = 1)
    {
        return $query->where('status', $flag);
    }
}
