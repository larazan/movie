<?php

namespace App\Http\Livewire;

use App\Models\Cast;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class CastIndex extends Component
{
    use WithPagination;

    public $showCastModal = false;
    public $name;
    public $castId;
    public $castStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    

    protected $rules = [
        'name' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showCastModal = true;
    }

    public function createCast()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Cast::create([
          'name' => $this->name,
          'status' => $this->castStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Genre created successfully']);
    }

    public function showEditModal($castId)
    {
        $this->castId = $castId;
        $this->loadCast();
        $this->showCastModal = true;
    }

    public function loadCast()
    {
        $cast = Cast::findOrFail($this->castId);
        $this->name = $cast->name;
        $this->castStatus = $cast->status;
    }

    public function updateCast()
    {
        $this->validate();
        $cast = Cast::findOrFail($this->castId);
        $cast->update([
            'name' => $this->name,
            'status' => $this->castStatus
        ]);
        
        $this->reset();
        $this->showCastModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Cast updated']);
    }

    public function closeCastModal()
    {
        $this->showCastModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function deleteCast($castId)
    {
        Cast::findOrFail($castId)->delete();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Cast deleted']);
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.cast-index', [
            'casts' => Cast::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
        ]);
    }
}
