<?php

namespace App\Models;

use App\Models\ReplyAble;
use App\Traits\HasAuthor;
use App\Traits\HasLikes;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Reply extends Model
{
    use HasFactory;
    use HasAuthor;
    use HasLikes;
    use SoftDeletes;

    const TABLE = 'replies';

    /**
     * {@inheritdoc}
     */
    protected $table = self::TABLE;

    protected $fillable = [
        'body',
    ];
    
    protected $with = [
        'likesRelation',
        // 'updatedByRelation',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function excerpt(int $limit = 200): string
    {
        return Str::limit(strip_tags($this->body()), $limit);
    }

    // A Reply has an owner
    // public function owner()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public function thread()
    // {
    //     return $this->belongsTo(Thread::class);
    // }

    public function to(ReplyAble $replyAble)
    {
        $this->replyAbleRelation()->associate($replyAble);
    }

    public function replyAble(): ReplyAble
    {
        return $this->replyAbleRelation;
    }

    public function replyAbleRelation(): MorphTo
    {
        return $this->morphTo('replyAbleRelation', 'replyable_type', 'replyable_id');
    }
}
