<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class PollIndex extends Component
{
    use WithPagination;

    public $showPollModal = false;

    public $title;
    public $startAt;
    public $endAt;
    public $pollId;
    public $pollStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'question' => 'required',
        'answer' => 'required',
    ];

    public function mount()
    {
        $this->startAt = today()->format('Y-m-d');
        $this->endAt = today()->format('Y-m-d');
    }

    public function showCreateModal()
    {
        $this->showPollModal = true;
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
        Poll::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Poll deleted successfully']);
    }

    public function createPoll()
    {
        $this->validate();

        Poll::create([
          'title' => $this->title,
          'created_by' => Auth::user()->id,
          'start_at' => $this->startAt,
          'end_at' => $this->endAt,
          'status' => $this->pollStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Poll created successfully']);
    }

    public function showEditModal($pollId)
    {
        $this->reset(['title']);
        $this->pollId = $pollId;
        $poll = Poll::find($pollId);
        $this->title = $poll->title;
        $this->startAt = $poll->start_at;
        $this->endAt = $poll->end_at;
        $this->pollStatus = $poll->status;
        $this->showPollModal = true;
    }
    
    public function updatePoll()
    {
        $this->validate();

        $poll = Poll::findOrFail($this->pollId);
        $poll->update([
            'title' => $this->title,
            'created_by' => Auth::user()->id,
            'start_at' => $this->startAt,
            'end_at' => $this->endAt,
            'status' => $this->pollStatus,
        ]);
        $this->reset();
        $this->showPollModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Poll updated successfully']);
    }

    public function deletePoll($pollId)
    {
        $poll = Poll::findOrFail($pollId);
        $poll->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Poll deleted successfully']);
    }

    public function closePollModal()
    {
        $this->showPollModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function resetFilters()
    {
        $this->reset();
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.poll-index', [
            'polls' => Poll::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
        ]);
    }
}
