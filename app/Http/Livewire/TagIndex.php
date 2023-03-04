<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class TagIndex extends Component
{
    use WithPagination;

    public $showTagModal = false;
    public $tagName;
    public $tagId;
    public $tagStatus = 'inactive';
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
        'tagName' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showTagModal = true;
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
        Tag::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Tag deleted successfully']);
    }

    public function createTag()
    {
        $this->validate();

        Tag::create([
          'tag_name' => $this->tagName,
          'slug'     => Str::slug($this->tagName)
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Tag created successfully']);
    }

    public function showEditModal($tagId)
    {
        $this->reset(['tagName']);
        $this->tagId = $tagId;
        $tag = Tag::find($tagId);
        $this->tagName = $tag->tag_name;
        $this->showTagModal = true;
    }
    
    public function updateTag()
    {
        $this->validate();
        
        $tag = Tag::findOrFail($this->tagId);
        $tag->update([
            'tag_name' => $this->tagName,
            'slug'     => Str::slug($this->tagName)
        ]);
        $this->reset();
        $this->showTagModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Tag updated successfully']);
    }

    public function deleteTag($tagId)
    {
        $tag = Tag::findOrFail($tagId);
        $tag->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Tag deleted successfully']);
    }

    public function closeTagModal()
    {
        $this->showTagModal = false;
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
        return view('livewire.tag-index', [
            'tags' => Tag::search('tag_name', $this->search)->orderBy('tag_name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
