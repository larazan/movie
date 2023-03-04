<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;
use App\Models\Character;
use App\Models\Cast;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CharacterIndex extends Component
{

    use WithPagination;

    public $showCharacterModal = false;
    public $movie;
    // public $movieTitle;
    // public $movieImage;
    // public $movieRelease;
    // public $movieDesc;
    // public $movieYear;
    // public $movieCountry;
    // public $movieDuration;
    // public $movieLang;
    // public $movieNetwork;
    // public $movieGenre;
    public $movieId;

    public $personId;
    public $castId;
    public $characterName;
    public $characterId;
    public $characterStatus = 'inactive';
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
        'character_name' =>  'required',
    ];

    public function mount($id)
    {
        $this->movie = Movie::find($id);
        // $this->movieTitle = $this->movie->title;
        // $this->movieImage = $this->movie->title;
        // $this->movieRelease = $this->movie->title;
        // $this->movieDesc = $this->movie->title;
        // $this->movieYear = $this->movie->title;
        // $this->movieCountry = $this->movie->title;
        // $this->movieDuration = $this->movie->title;
        // $this->movieLang = $this->movie->title;
        // $this->movieNetwork = $this->movie->title;
        // $this->movieGenre = $this->movie->title;
    }

    public function showCreateModal()
    {
        $this->showCharacterModal = true;
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
        Character::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Character deleted successfully']);
    }

    public function createCharacter()
    {
        $this->validate();
  
        Character::create([
            'character_name' => $this->characterName,
            'movie_id' => $this->movieId,
            'person_id' => $this->personId,
            'cast_id' => $this->castId,
            'status' => $this->characterStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Character created successfully']);
    }

    public function showEditModal($characterId)
    {
        $this->reset(['characterName']);
        $this->characterId = $characterId;
        $character = Character::find($characterId);
        $this->characterName = $character->character_name;
        $this->movieId = $character->movie_id;
        $this->personId = $character->person_id;
        $this->castId = $character->cast_id;
        $this->characterStatus = $character->status;
        $this->showCharacterModal = true;
    }
    
    public function updateCharacter()
    {
        $character = Character::findOrFail($this->characterId);
        $this->validate();
        
        if ($this->characterId) {
            if ($character) {
                $character->update([
                    'character_name' => $this->characterName,
                    'movie_id' => $this->movieId,
                    'person_id' => $this->personId,
                    'cast_id' => $this->castId,
                    'status' => $this->characterStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showCharacterModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Character updated successfully']);
    }

    public function deleteCharacter($characterId)
    {
        $character = Character::findOrFail($characterId);
        $character->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Character deleted successfully']);
    }

    public function closeCharacterModal()
    {
        $this->showCharacterModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.character-index', [
            'characters' => Character::search('character_name', $this->search)->orderBy('character_name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
