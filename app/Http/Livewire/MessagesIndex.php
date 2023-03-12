<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MessagesIndex extends Component
{
    public $users;
    public $search = '';
    public $sort = 'asc';

    public function jason()
    {
        return Http::get('http://127.0.0.1:8000/api/users')->json()['results'];
    }
    
    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            
            $searchResults = $this->jason();
        }
        
        
        dump($searchResults);

        return view('livewire.messages-index', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
