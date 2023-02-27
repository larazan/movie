<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CountryIndex extends Component
{
    use WithPagination;

    public $showCountryModal = false;
    public $countryName;
    public $countryId;
    public $countryStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;


    public function showCreateModal()
    {
        $this->showCountryModal = true;
    }

    public function createCountry()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Country::create([
          'name' => $this->countryName,
          'slug' => Str::slug($this->countryName),
          'status' => $this->countryStatus
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Country created successfully']);
    }

    public function showEditModal($countryId)
    {
        $this->reset(['countryName']);
        $this->countryId = $countryId;
        $country = Country::find($countryId);
        $this->countryName = $country->name;
        $this->countryStatus = $country->status;
        $this->showCountryModal = true;
    }
    
    public function updateCountry()
    {
        $this->validate([
            'name' => 'required',
        ]);
        
        $country = Country::findOrFail($this->countryId);
        $country->update([
            'name' => $this->countryName,
            'slug' => Str::slug($this->countryName),
            'status' => $this->countryStatus
        ]);
        $this->reset();
        $this->showCountryModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Country updated successfully']);
    }

    public function deleteCountry($countryId)
    {
        $country = Country::findOrFail($countryId);
        $country->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Country deleted successfully']);
    }

    public function closeCountryModal()
    {
        $this->showCountryModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.country-index', [
            'countries' => Country::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
