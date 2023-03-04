<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CategoryMovie;
use App\Models\Movie;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class MovieCategoryIndex extends Component
{
    use WithPagination;
    
    public $showCategoryModal = false;
    public $name;
    public $categoryId;
    public $categoryStatus = 'inactive';
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
        'name' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showCategoryModal = true;
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
        CategoryMovie::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Category deleted successfully']);
    }

    public function createCategory()
    {
        $this->validate();

        CategoryMovie::create([
          'name' => $this->name,
          'slug' => Str::slug($this->name),
          'status' => $this->categoryStatus,
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category created successfully']);
    }

    public function showEditModal($categoryId)
    {
        $this->reset(['categoryName']);
        $this->categoryId = $categoryId;
        $category = CategoryMovie::find($categoryId);
        $this->name = $category->name;
        $this->categoryStatus = $category->status;
        $this->showCategoryModal = true;
    }
    
    public function updateCategory()
    {
        $this->validate();

        $category = CategoryMovie::findOrFail($this->categoryId);
        $category->update([
            'title' => $this->name,
            'slug'     => Str::slug($this->name),
            'status' => $this->categoryStatus,
        ]);
        $this->reset();
        $this->showCategoryModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category updated successfully']);
    }

    public function deleteCategory($categoryId)
    {
        $category = CategoryMovie::findOrFail($categoryId);
        $category->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Category deleted successfully']);
    }

    public function closeCategoryModal()
    {
        $this->showCategoryModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.movie-category-index', [
            'categories' => CategoryMovie::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
