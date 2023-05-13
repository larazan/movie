<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use App\Models\Option;
use Livewire\Component;
use Livewire\WithPagination;

class OptionIndex extends Component
{
    use WithPagination;

    public $showOptionModal = false;

    public $content;
    public $optionId;
    public $pollId;

    public $pollTitle;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function mount($pollID)
    {
        $this->pollId = $pollID;
        $this->pollTitle = Poll::where('id', $this->pollID)->first()->title;
    }

    public function showCreateModal()
    {
        $this->showOptionModal = true;
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
        Option::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Attribute deleted successfully']);
    }

    public function createAttribute()
    {
        // dd($this->publishedAt);
        $this->validate();
  
        Option::create([
            'poll_id' => $this->pollId,
            'content' => $this->content,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Attribute created successfully']);
    }

    public function showEditModal($optionId)
    {
        $this->reset(['name']);
        $this->optionId = $optionId;
        $option = Option::find($optionId);
        $this->content = $option->content;       
        $this->showOptionModal = true;
    }
    
    public function updateAttribute()
    {
        $option = Option::findOrFail($this->optionId);
        $this->validate();
        
        if ($this->optionId) {
            if ($option) {

                $option->update([
                    'poll_id' => $this->pollId,
                    'content' => $this->content,
                ]);
                
            }
        }

        $this->reset();
        $this->showOptionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Attribute updated successfully']);
    }

    public function deleteAttribute($optionId)
    {
        $option = Option::findOrFail($optionId);
        $option->delete();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Attribute deleted successfully']);
    }

    public function closeAttributeModal()
    {
        $this->showOptionModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.option-index', [
            'options' => Option::search('content', $this->search)->where('poll_id', $this->pollId)->orderBy('id', $this->sort)->paginate($this->perPage),
        ]);
    }
}
