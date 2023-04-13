<?php

namespace App\Http\Livewire;

use App\Models\RateType;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class RateTypeIndex extends Component
{
    use WithPagination;

    public $showRateTypeModal = false;
    public $rateTypeName;
    public $rateTypeDetail;
    public $rateTypeDefinition;
    public $rateTypeId;
    public $rateTypeStatus = 'inactive';
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
        'rateTypeName' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showRateTypeModal = true;
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
        RateType::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'RateType deleted successfully']);
    }

    public function createRateType()
    {
        $this->validate();

        RateType::create([
          'name' => $this->rateTypeName,
          'slug' => Str::slug($this->rateTypeName),
          'definition' => $this->rateTypeDefinition,
          'detail' => $this->rateTypeDetail,
          'status' => $this->rateTypeStatus
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'RateType created successfully']);
    }

    public function showEditModal($rateTypeId)
    {
        $this->reset(['rateTypeName']);
        $this->rateTypeId = $rateTypeId;
        $rateType = RateType::find($rateTypeId);
        $this->rateTypeName = $rateType->name;
        $this->rateTypeDefinition = $rateType->definition;
        $this->rateTypeDetail = $rateType->detail;
        $this->rateTypeStatus = $rateType->status;
        $this->showRateTypeModal = true;
    }
    
    public function updateRateType()
    {
        $this->validate();
        
        $rateType = RateType::findOrFail($this->rateTypeId);
        $rateType->update([
            'name' => $this->rateTypeName,
            'slug' => Str::slug($this->rateTypeName),
            'definition' => $this->rateTypeDefinition,
            'detail' => $this->rateTypeDetail,
            'status' => $this->rateTypeStatus
        ]);
        $this->reset();
        $this->showRateTypeModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'RateType updated successfully']);
    }

    public function deleteRateType($rateTypeId)
    {
        $rateType = RateType::findOrFail($rateTypeId);
        $rateType->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'RateType deleted successfully']);
    }

    public function closeRateTypeModal()
    {
        $this->showRateTypeModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.rate-type-index', [
            'types' => RateType::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
