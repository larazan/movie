<?php

namespace App\Http\Livewire;

use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SectionKanban extends Component
{
    public $showSectionModal = false;
    public $boardId;
    public $sectionId;
    public $title;
    public $color;
    public $position;
    public $sectionStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $showConfirmModal = false;
    public $deleteId = '';

    public $sort = 'asc';

    protected $rules = [
        'title' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateSectionModal()
    {
        $this->showSectionModal = true;
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
        Section::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Section deleted successfully']);
    }

    public function createSection()
    {
        // dd($this->publishedAt);
        $this->validate();
  
        Section::create([
            'user_id' => Auth::user()->id,
            'board_id' => $this->boardId,
            'title' => $this->title,
            'color' => $this->color,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Section created successfully']);
    }

    public function showEditModal($sectionId)
    {
        $this->reset(['title']);
        $this->sectionId = $sectionId;
        $section = Section::find($sectionId);
        $this->title = $section->title;
        $this->color = $section->color;

        $this->showSectionModal = true;
    }
    
    public function updateSection()
    {
        $section = Section::findOrFail($this->sectionId);
        $this->validate();
  
        if ($this->sectionId) {
            if ($section) {

                $section->update([
                    'user_id' => Auth::user()->id,
                    'board_id' => $this->boardId,
                    'title' => $this->title,
                    'color' => $this->color,
                ]);
                
            }
        }

        $this->reset();
        $this->showSectionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Section updated successfully']);
    }

    public function deleteSection($sectionId)
    {
        $section = Section::findOrFail($sectionId);
        $section->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Section deleted successfully']);
    }

    public function closeSectionModal()
    {
        $this->showSectionModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.section-kanban', [
            'sections' => Section::orderBy('title', $this->sort),
        ]);
    }
}
