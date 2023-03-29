<?php

namespace App\Models;

use App\Traits\HasTags;
use App\Traits\HasLikes;
use App\Traits\HasAuthor;
use App\Traits\HasReplies;
use App\Traits\RecordsActivity;
use App\Models\ReplyAble;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Thread extends Model implements ReplyAble
{
    use HasTags;
    use HasLikes;
    use HasAuthor;
    use HasReplies;
    use HasFactory;
    use RecordsActivity;

    const GENERAL = 1;
    const ISSUES = 2;

    const TABLE = 'threads';

    protected $table = self::TABLE;

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'body',
        'status',
        'thread_tags',
    ];

    protected $with = [
        'tagsRelation',
        'likesRelation',
        'authorRelation',
    ];

    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body()), $limit);
    }

    public function replyAbleSubject(): string
    {
        return $this->title();
    }

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function delete()
    {
        $this->removeTags();
        parent::delete();
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->whereHas('tagsRelation', function ($query) use ($tag) {
            $query->where('tags.slug', $tag);
        });
    }

    // Apply all the relevant thread filters
    // public function scopeFilter($query, ThreadFilters $filters)
    // {
    //     return $filters->apply($query);
    // }
}
