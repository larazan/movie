<?php

namespace App\Http\Livewire;

use App\Models\Nationality;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class NationalityIndex extends Component
{
    use WithPagination;

    public $showNationalityModal = false;
    public $nationalityName;
    public $nationalityId;
    public $nationalityStatus = 'inactive';
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
        'nationalityName' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showNationalityModal = true;
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
        Nationality::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Nationality deleted successfully']);
    }

    public function createNationality()
    {
        $this->validate();

        Nationality::create([
          'name' => $this->nationalityName,
          'slug' => Str::slug($this->nationalityName),
          'status' => $this->nationalityStatus
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Nationality created successfully']);
    }

    public function showEditModal($nationalityId)
    {
        $this->reset(['nationalityName']);
        $this->nationalityId = $nationalityId;
        $nationality = Nationality::find($nationalityId);
        $this->nationalityName = $nationality->name;
        $this->nationalityStatus = $nationality->status;
        $this->showNationalityModal = true;
    }
    
    public function updateNationality()
    {
        $this->validate();
        
        $nationality = Nationality::findOrFail($this->nationalityId);
        $nationality->update([
            'name' => $this->nationalityName,
            'slug' => Str::slug($this->nationalityName),
            'status' => $this->nationalityStatus
        ]);
        $this->reset();
        $this->showNationalityModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Nationality updated successfully']);
    }

    public function deleteNationality($nationalityId)
    {
        $nationality = Nationality::findOrFail($nationalityId);
        $nationality->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Nationality deleted successfully']);
    }

    public function closeNationalityModal()
    {
        $this->showNationalityModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.nationality-index', [
            'nationalities' => Nationality::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
