<?php

namespace App\Actions\Newsletter;

use App\Models\NewsletterSubscriber;

class UnsubscribeAction
{
    public function __construct()
    {

    }

    public function run($token)
    {
        $subscriber = NewsletterSubscriber::where('token', $token)->subscribed()->firstOrFail();

        $subscriber->subscribed = false;

        return $subscriber->save();
    }
}