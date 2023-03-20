<?php

namespace App\Http\Livewire;

use App\Models\Board;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BoardKanban extends Component
{
    public $showBoardModal = false;
    public $boardId;
    public $title;
    public $description;
    public $boardStatus = 'inactive';
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

    public function showCreateBoardModal()
    {
        $this->showBoardModal = true;
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
        Board::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Board deleted successfully']);
    }

    public function createBoard()
    {
        // dd($this->publishedAt);
        $this->validate();
  
        Board::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'rand_id' => Str::random(10),
            'description' => $this->description,
            'status' => $this->boardStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Board created successfully']);
    }

    public function showEditModal($boardId)
    {
        $this->reset(['title']);
        $this->boardId = $boardId;
        $board = Board::find($boardId);
        $this->title = $board->title;
        $this->description = $board->description;
        $this->boardStatus = $board->status;

        $this->showBoardModal = true;
    }
    
    public function updateBoard()
    {
        $board = Board::findOrFail($this->boardId);
        $this->validate();
  
        if ($this->boardId) {
            if ($board) {

                $board->update([
                    'user_id' => Auth::user()->id,
                    'title' => $this->title,
                    'slug' => Str::slug($this->title),
                    'rand_id' => Str::random(10),
                    'description' => $this->description,
                    'status' => $this->status,
                ]);
                
            }
        }

        $this->reset();
        $this->showBoardModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Board updated successfully']);
    }

    public function deleteBoard($boardId)
    {
        $board = Board::findOrFail($boardId);
        $board->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Board deleted successfully']);
    }

    public function closeBoardModal()
    {
        $this->showBoardModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.board-kanban', [
            'boards' => Board::orderBy('title', $this->sort),
        ]);
    }
}
