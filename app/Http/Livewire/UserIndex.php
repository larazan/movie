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
    public $passwordConfirmation;
    public $userId;
    public $userStatus = 0;
    public $statuses = [
        0 => 'user',
        1 => 'admin',
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'firstName' => 'required|min:2',
        'lastName' => 'required|min:2',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:8|confirmed',
        'phone' => 'required|min:10',
        'userStatus' => 'required'
    ];

    public function showCreateModal()
    {
        $this->showUserModal = true;
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
        User::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'User deleted successfully']);
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
        $this->reset(['firstName']);
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function render()
    {
        return view('livewire.user-index', [
            'users' => User::search('first_name', $this->search)->orderBy('first_name', $this->sort)->paginate($this->perPage),
        ]);
    }
}
