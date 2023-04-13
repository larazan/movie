<?php

namespace App\Actions\Newsletter;

use App\Models\NewsletterSubscriber;

class EmailSubscriberAction
{
    public function __invoke(array $formData)
    {
        $this->getOrCreateSubscriberEmail($formData);
    }

    private function getOrCreateSubscriberEmail(array $formData): NewsletterSubscriber
    {
        return NewsletterSubscriber::firstOrCreate($formData);
    }
}