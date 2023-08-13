<?php

namespace App\Http\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\WithPagination;
use Livewire\Component;

class SubscribeIndex extends Component
{
    
use WithPagination;

    public $showNewsletterSubscriberModal = false;
    public $email;
    public $newsletterSubscriberId;
    public $newsletterSubscriberStatus = 0;
    public $statuses = [
        0 => 'active',
        1 => 'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'email' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showNewsletterSubscriberModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        NewsletterSubscriber::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'NewsletterSubscriber deleted successfully']);
    }

    public function createNewsletterSubscriber()
    {
        $this->validate();

        NewsletterSubscriber::create([
          'email' => $this->email,
          'status' => $this->newsletterSubscriberStatus
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'NewsletterSubscriber created successfully']);
    }

    public function showEditModal($newsletterSubscriberId)
    {
        $this->reset(['newsletterSubscriberName']);
        $this->newsletterSubscriberId = $newsletterSubscriberId;
        $newsletterSubscriber = NewsletterSubscriber::find($newsletterSubscriberId);
        $this->email = $newsletterSubscriber->email;
        $this->newsletterSubscriberStatus = $newsletterSubscriber->status;
        $this->showNewsletterSubscriberModal = true;
    }
    
    public function updateNewsletterSubscriber()
    {
        $this->validate();
        
        $newsletterSubscriber = NewsletterSubscriber::findOrFail($this->newsletterSubscriberId);
        $newsletterSubscriber->update([
            'email' => $this->email,
            'status' => $this->newsletterSubscriberStatus
        ]);
        $this->reset();
        $this->showNewsletterSubscriberModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'NewsletterSubscriber updated successfully']);
    }

    public function deleteNewsletterSubscriber($newsletterSubscriberId)
    {
        $newsletterSubscriber = NewsletterSubscriber::findOrFail($newsletterSubscriberId);
        $newsletterSubscriber->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'NewsletterSubscriber deleted successfully']);
    }

    public function closeNewsletterSubscriberModal()
    {
        $this->showNewsletterSubscriberModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.subscribe-index', [
            'subscribers' => NewsletterSubscriber::search('email', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage)
        ]);
    }
}
