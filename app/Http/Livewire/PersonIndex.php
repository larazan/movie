<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Person;

class PersonIndex extends Component
{
    use WithFileUploads;

    public $showPersonModal = false;
    public $name;
    public $personId;
    public $filename;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public function showCreateModal()
    {
        $this->showPersonModal = true;
    }

    public function createPerson()
    {
        $dataValid = $this->validate([
            'name' => 'required',
            'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $dataValid['filename'] = $this->filename->store('person', 'public');
  
        Person::create($dataValid);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Person created successfully']);
    }

    public function showEditModal($personId)
    {
        $this->reset(['name']);
        $this->personId = $personId;
        $person = Person::find($personId);
        $this->name = $person->name;
        
        $this->showPersonModal = true;
    }
    
    public function updatePerson()
    {
        $person = Person::findOrFail($this->personId);

        $dataValid = $this->validate([
            'name' => 'required',
            'filename' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
        
        if ($this->personId) {
            if ($person) {
                $person->update($dataValid);
                $dataValid['filename'] = $this->filename->store('person', 'public');
            }
        }

        $this->reset();
        $this->showPersonModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Person updated successfully']);
    }

    public function deletePerson($personId)
    {
        $person = Person::findOrFail($personId);
        $person->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Person deleted successfully']);
    }

    public function closePersonModal()
    {
        $this->showPersonModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.person-index', [
            'persons' => Person::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
