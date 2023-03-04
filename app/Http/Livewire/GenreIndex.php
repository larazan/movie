<?php

namespace App\Http\Livewire;

use App\Models\Genre;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class GenreIndex extends Component
{
    use WithPagination;

    public $showGenreModal = false;
    public $name;
    public $genreId;
    public $genreStatus = 'inactive';
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
        $this->showGenreModal = true;
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
        Genre::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Genre deleted successfully']);
    }

    public function createGenre()
    {
        $this->validate();

        Genre::create([
          'name' => $this->name,
          'slug' => Str::slug($this->name),
          'status' => $this->genreStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Genre created successfully']);
    }

    public function showEditModal($genreId)
    {
        $this->reset(['genreName']);
        $this->genreId = $genreId;
        $genre = Genre::find($genreId);
        $this->name = $genre->name;
        $this->genreStatus = $genre->status;
        $this->showGenreModal = true;
    }
    
    public function updateGenre()
    {
        $this->validate();

        $genre = Genre::findOrFail($this->genreId);
        $genre->update([
            'title' => $this->name,
            'slug'     => Str::slug($this->name),
            'status' => $this->genreStatus,
        ]);
        $this->reset();
        $this->showGenreModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Genre updated successfully']);
    }

    public function deleteGenre($genreId)
    {
        $genre = Genre::findOrFail($genreId);
        $genre->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Genre deleted successfully']);
    }

    public function closeGenreModal()
    {
        $this->showGenreModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function resetFilters()
    {
        $this->reset();
        $this->reset(['search', 'sort', 'perPage']);
    }
    
    public function render()
    {
        return view('livewire.genre-index', [
            'genres' => Genre::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
