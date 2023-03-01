<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

use Illuminate\Support\Facades\Hash;

class UserIndex extends Component
{
    use WithPagination;

    public $showUserModal = false;
    public $name;
    public $email;
    public $password;
    public $userId;
    public $userStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    // protected $rules = [
    //     'name' => 'required',
    // ];

    public function showCreateModal()
    {
        $this->showUserModal = true;
    }

    public function createUser()
    {
        $this->validate([
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'isAdmin' => 'required'
        ]);

        User::create([
          'name' => $this->name,
          'email' => strtolower($this->email),
          'password' => Hash::make($this->password),
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'User created successfully']);
    }

    public function showEditModal($userId)
    {
        $this->reset(['name']);
        $this->userId = $userId;
        $user = User::find($userId);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->userStatus = $user->status;
        $this->showUserModal = true;
    }
    
    public function updateUser()
    {
        $this->validate([
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users',
            'isAdmin' => 'required'
        ]);

        $user = User::findOrFail($this->userId);
        if ($this->password) {
            $user->update([
                'name' => $this->name,
                'email' => strtolower($this->email),
                'password' => Hash::make($this->password),
            ]);
        } else {
            $user->update([
                'name' => $this->name,
                'email' => strtolower($this->email),
            ]);
        }
        
        $this->reset();
        $this->showUserModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'User updated successfully']);
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'User deleted successfully']);
    }

    public function closeUserModal()
    {
        $this->showUserModal = false;
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
        return view('livewire.user-index', [
            'users' => User::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
        ]);
    }
}
