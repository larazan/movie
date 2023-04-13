<?php


namespace App\Actions\Newsletter;


use App\Models\NewsletterSubscriber;

class GetActiveSubscribers
{
    public function __construct()
    {
    }

    public function run() {
        return NewsletterSubscriber::subscribed()->get();
    }
}