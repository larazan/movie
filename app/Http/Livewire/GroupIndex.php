<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\Person;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class GroupIndex extends Component
{

    use WithFileUploads, WithPagination;

    public $showGroupModal = false;
    public $showGroupDetailModal = false;

    public $group;
    public $groupId;
    public $name;
    public $description;
    public $file;
    public $members;
    public $country;
    public $year;
    public $years = [];
    public $oldImage;
    public $groupStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;
    public $sortDirection = 'asc';
    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $yearNow = Carbon::now()->format('Y');
        for ($i=1950; $i < $yearNow + 2 ; $i++) { 
            array_push($this->years, $i);
        }
    }

    public function showCreateModal()
    {
        $this->showGroupModal = true;
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
        Group::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Group deleted successfully']);
    }

    public function createGroup()
    {
        $this->validate();

        $originalTime = ($this->minute * 60) + $this->second;
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Group::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Group::UPLOAD_DIR);

        // Group::create([ 
        //     'name' => $this->name,
        //     'slug' => Str::slug($this->name),
        //     'rand_id' => Str::random(18),
        //     'members' => $this->members,
        //     'description' => $this->description,
        //     'country' => $this->country,
        //     'origin' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'medium' => $resizedImage['medium'],
        //     'status' => $this->groupStatus,
        // ]);

        $group = new Group();
        $group->name =  $this->name;
        $group->slug =  Str::slug($this->name);
        $group->rand_id =  Str::random(18);
        $group->members =  $this->members;
        $group->description =  $this->description;
        $group->country =  $this->country;
        $group->year = $this->year;
        $group->status =  $this->groupStatus;

        if (!empty($this->file)) {
            $group->origin = $filePath;
            $group->small =$resizedImage['small'];
            $group->medium = $resizedImage['medium'];
        }

        $group->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Group created successfully']);
    }

    public function showEditModal($groupId)
    {
        $this->reset(['name']);
        $this->groupId = $groupId;
        $group = Group::find($groupId);
        $this->groupId = $group->group_id;
        $this->name = $group->name;
        $this->description = $group->description;
        $this->country = $group->country;
        $this->year = $group->year;
        $this->members = $group->members;
        $this->oldImage = $group->small;
        $this->groupStatus = $group->status;
        $this->showGroupModal = true;
    }

    public function showDetailModal()
    {
        // $this->reset(['name']);
        // $this->groupId = $groupId;
        // $group = Group::find($groupId);
        // $this->actress = $group->person_id;
        // $this->name = $group->name;
        // $this->group = $group->group;
        // $this->description = $group->description;
        // $this->country = $group->country;
        // $this->duration = $group->duration;
        // $this->minute = $this->oriDura($group->duration, 'menit');
        // $this->second = $this->oriDura($group->duration, 'detik');
        // $this->oldImage = $group->small;
        // $this->groupStatus = $group->status;

        $this->showGroupDetailModal = true;
    }
    
    public function updateGroup()
    {
        $group = Group::findOrFail($this->groupId);
        $this->validate();
  
        $originalTime = ($this->minute * 60) + $this->second;

        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->groupId) {
            if ($group) {
               
                // IMAGE
                $filePath = $this->file->storeAs(Group::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Group::UPLOAD_DIR);

                // $group->update([
                //     'name' => $this->name,
                //     'slug' => Str::slug($this->name),
                //     'rand_id' => Str::random(18),
                //     'members' => $this->members,
                //     'description' => $this->description,
                //     'country' => $this->country,
                //     'origin' => $filePath,
                //     'small' => $resizedImage['small'],
                //     'medium' => $resizedImage['medium'],
                //     'status' => $this->groupStatus,
                // ]);
                
                $group = Group::where('id', $this->groupId);
                $group->name =  $this->name;
                $group->slug =  Str::slug($this->name);
                $group->rand_id =  Str::random(18);
                $group->members =  $this->members;
                $group->description =  $this->description;
                $group->country =  $this->country;
                $group->year = $this->year;
                $group->status =  $this->groupStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->groupId);
                    
                    $group->origin = $filePath;
                    $group->small =$resizedImage['small'];
                    $group->medium = $resizedImage['medium'];
                }

                $group->save();
            }
        }

        $this->reset();
        $this->showGroupModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Group updated successfully']);
    }

    public function deleteGroup($groupId)
    {
        $group = Group::findOrFail($groupId);
        $group->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Group deleted successfully']);
    }

    public function closeGroupModal()
    {
        $this->showGroupModal = false;
    }

    public function closeDetailModal()
    {
        $this->showGroupDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function download($id)
    {
        $groupPath = Group::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$groupPath->audio)) {
            return response()->download($path.$groupPath->audio);
		}
    }

    public function render()
    {
        return view('livewire.group-index', [
            'groups' => Group::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'countries' => Country::OrderBy('name', $this->sortDirection)->get(),
            'persons' => Person::OrderBy('name', 'asc')->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Group::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Group::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Group::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Group::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $groupImage = Group::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$groupImage->original)) {
            Storage::delete($path.$groupImage->original);
		}
		
        if (Storage::exists($path.$groupImage->small)) {
            Storage::delete($path.$groupImage->small);
        }   

		if (Storage::exists($path.$groupImage->medium)) {
            Storage::delete($path.$groupImage->medium);
        }
             
        return true;
    }

    public function deleteAudio($id = null) {
        $groupAudio = Group::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$groupAudio->audio)) {
            Storage::delete($path.$groupAudio->audio);
		}

        return true;
    }
}
