<?php

namespace App\Http\Livewire;

use App\Models\Thread;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ForumIndex extends Component
{
    
    public $showThreadModal = false;
    public $threadId;
    public $threadTags;
    public $title;
    public $body;
    public $threadStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rule = [
        'threadName' => 'required|min:5',
        'body'       => 'required|min:5',
    ];

    public function showCreateModal()
    {
        $this->showThreadModal = true;
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
        Thread::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Thread deleted successfully']);
    }

    public function createThread()
    {
        $this->validate();

        Thread::create([
            'author_id' => Auth::user()->id,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => $this->body,
            'status' => $this->threadStatus,
            'thread_tags' => $this->threadTags,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Thread created successfully']);
    }

    public function showEditModal($threadId)
    {
        $this->reset(['title']);
        $this->threadId = $threadId;
        $thread = Thread::find($threadId);
        $this->title = $thread->title;
        $this->body = $thread->body;
        $this->threadTags = $thread->thread_tags;
        $this->threadStatus = $thread->status;
        $this->showThreadModal = true;
    }
    
    public function updateThread()
    {
        $this->validate();
        
        $thread = Thread::findOrFail($this->threadId);
        $thread->update([
            'author_id' => Auth::user()->id,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => $this->body,
            'thread_tags' => $this->threadTags,
            'status' => $this->threadStatus,
        ]);
        $this->reset();
        $this->showThreadModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Thread updated successfully']);
    }

    public function deleteThread($threadId)
    {
        $thread = Thread::findOrFail($threadId);
        $thread->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Thread deleted successfully']);
    }

    public function closeThreadModal()
    {
        $this->showThreadModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.forum-index', [
            'threads' => Thread::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage)
        ]);
    }
}
