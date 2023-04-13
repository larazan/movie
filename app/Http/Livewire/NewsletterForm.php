<?php

namespace App\Http\Livewire;

use App\Actions\Newsletter\EmailSubscriberAction;
use App\Mail\SubscriberMailable;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
// use Newsletter;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterForm extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:newsletter_subscribers,email',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);
    }

    public function createNewsletterSubscriber()
    {
        $this->validate();

        $token = bcrypt($this->email);

        $newsletter = new NewsletterSubscriber();
        $data = array (
          'email' => $this->email,
          'status' => 1
        );

        $newsletter->save($data);

        (new EmailSubscriberAction)([
            'email' => $this->email,
            'status' => 1,
            'token' => $token,
        ]);

        if (!Newsletter::isSubscribed($this->email)) {
            Newsletter::subscribe($this->email, ['NAME' => $this->name, 'TOKEN' => $token]);
        }

        Mail::to($this->email)
            ->bcc('your@email.com', 'Your Name')
            ->send(new SubscriberMailable($data));

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'NewsletterSubscriber created successfully']);
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
