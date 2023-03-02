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
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $password;
    public $userId;
    public $userStatus = 0;
    public $statuses = [
        0 => 'user',
        1 => 'admin',
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'phone' => 'required|min:6',
        'isAdmin' => 'required'
    ];

    public function showCreateModal()
    {
        $this->showUserModal = true;
    }

    public function createUser()
    {
        $this->validate();

        User::create([
          'first_name' => $this->firstName,
          'last_name' => $this->lastName,
          'email' => strtolower($this->email),
          'phone' => $this->phone,
          'password' => Hash::make($this->password),
          'status' => $this->userStatus,
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'User created successfully']);
    }

    public function showEditModal($userId)
    {
        $this->reset(['name']);
        $this->userId = $userId;
        $user = User::find($userId);
        $this->firstName = $user->first_name;
        $this->lastName = $user->last_name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->userStatus = $user->status;
        $this->showUserModal = true;
    }
    
    public function updateUser()
    {
        $this->validate();

        $user = User::findOrFail($this->userId);
        if ($this->password) {
            $user->update([
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => strtolower($this->email),
                'phone' => $this->phone,
                'password' => Hash::make($this->password),
                'status' => $this->userStatus,
            ]);
        } else {
            $user->update([
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => strtolower($this->email),
                'phone' => $this->phone,
                'status' => $this->userStatus,
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
