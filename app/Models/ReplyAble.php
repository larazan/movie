<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * This interface allows models to receive replies.
 */
interface ReplyAble
{
    public function title(): string;

    /**
     * @return \App\Models\Reply[]
     */
    public function replies();

    /**
     * @return \App\Models\Reply[]
     */
    public function latestReplies(int $amount = 5);

    public function deleteReplies();

    public function repliesRelation(): MorphMany;

    // public function isConversationOld(): bool;

    public function replyAbleSubject(): string;
}