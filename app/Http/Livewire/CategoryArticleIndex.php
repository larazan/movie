<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CategoryArticle;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CategoryArticleIndex extends Component
{
    use WithPagination;

    public $showCategoryModal = false;
    public $name;
    public $categoryId;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public function showCreateModal()
    {
        $this->showCategoryModal = true;
    }

    public function createCategory()
    {
        $this->validate([
            'name' => 'required|max:255',
        ]);
        
        CategoryArticle::create([
          'name' => $this->name,
          'slug' => Str::slug($this->name),
          'parent_id' => 0,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category created successfully']);
    }

    public function showEditModal($categoryId)
    {
        $this->reset(['categoryName']);
        $this->categoryId = $categoryId;
        $category = CategoryArticle::find($categoryId);
        $this->name = $category->name;
        $this->showCategoryModal = true;
    }
    
    public function updateCategory()
    {
        $this->validate([
            'name' => 'required|max:255',
        ]);

        $category = CategoryArticle::findOrFail($this->categoryId);
        $category->update([
            'name' => $this->name,
            'slug'     => Str::slug($this->name),
            'parent_id' => 0,
        ]);

        $this->reset();
        $this->showCategoryModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category updated successfully']);
    }

    public function deleteCategory($categoryId)
    {
        $category = CategoryArticle::findOrFail($categoryId);
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
        return view('livewire.category-article-index', [
            'categories' => CategoryArticle::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
