<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Livewire\Component;

class Account extends Component
{
    use WithFileUploads;

    public $showUserModal = false;
    public $showPasswordModal = false;

    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $address1;
    public $image;
    public $file;
    public $oldImage;
    public $currentPassword;
    public $password;
    public $userId;

    protected $rules = [
        'firstName' => 'required|min:3',
        'lastName' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        $this->firstName = $user->first_name;
        $this->lastName = $user->last_name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->address1 = $user->address1;
        $this->image = $user->profile_photo_path;
    }

    public function showUpdateModal()
    {
        $this->showPasswordModal = true;
    }

    public function showEditModal()
    {
        
        $id = Auth::id();
        $user = User::findOrFail($id);
      
        $this->oldImage = $user->profile_photo_path;
        
        $this->showUserModal = true;
    }

    public function updateAccount()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $this->validate();

        if ($id) {
            if ($user) {

                $user->update([
                    'first_name' => $this->firstName,
                    'last_name' => $this->lastName,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'address1' => $this->address1,
                    
                ]);
                
            }
        }
        
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'User Profile updated successfully']);
    }

    public function closeUserModal()
    {
        dd('fck');
        $this->showUserModal = false;
    }

    public function closePasswordModal()
    {
        $this->showPasswordModal = false;
    }


    public function updatePhoto()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $this->validate();
  
        $new = Str::slug($this->firstName) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->userId) {
            if ($user) {
               // delete image
			    $this->deleteImage($this->userId);
                $filePath = $this->file->storeAs(User::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, User::UPLOAD_DIR);

                $user->update([
                    'profile_photo_path' => $filePath,
                ]);
                
            }
        }

        $this->reset();
        $this->showUserModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Photo updated successfully']);
    }

    public function updatePassword($propertyName)
    {
        
        $this->validateOnly($propertyName, [
            
            'currentPassword' => ['required', 'string', 'min:8', 'confirmed', function ($attribute, $value, $fail) use ($propertyName) {
                if (!(Hash::check($this->currentPassword, Auth::user()->password))) {
                    $fail('Your current password does not matches with the password');
                }
            }],

            'password' => ['required', 'string', 'min:8', 'confirmed', function ($attribute, $value, $fail) use ($propertyName) {
                if(strcmp($this->currentPassword, $this->password) == 0){
                    $fail('New Password cannot be same as your current password.');
                }
            }],
        ]);

        //Change Password
        $user = Auth::user();
        // $user->password = bcrypt($request->get('new-password'));
        $user->password = Hash::make($this->password);
        $user->save();

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Password updated successfully']);
    }

    
    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.account');
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', User::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', User::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', User::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', User::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $userImage = User::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$userImage->profile_photo_path)) {
            Storage::delete($path.$userImage->profile_photo_path);
		}
		
        // if (Storage::exists($path.$userImage->small)) {
        //     Storage::delete($path.$userImage->small);
        // }   

		// if (Storage::exists($path.$userImage->medium)) {
        //     Storage::delete($path.$userImage->medium);
        // }

             
        return true;
    }
}
