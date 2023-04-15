<?php

namespace App\Http\Livewire;

use App\Models\Group;
use App\Models\GroupImage;
use App\Models\MemberGroup;
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
    public $files;
    public $members = [];
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
    public $canSubmit = false;

    // Array to save the valid state of all the inputs to validate. False by default.
    public $valid = [
        "name" => false, 
        "members" => false,
        "country" => false,
        "year" => false,
        "groupStatus" => false,
    ];

    protected $rules = [
        'name' => 'required|min:5',
        'country' => 'required',
        'year' => 'required',
        'groupStatus' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function updated($propertyName)
    {
        //can_submit is false if validation fails 
        $this->canSubmit = false;

        $this->valid[$propertyName] = false;
        $this->validateOnly($propertyName);

        //This input is valid
        $this->valid[$propertyName] = true;

        //We can submit if all inputs are valid
        $this->canSubmit = true;
        foreach($this->valid as $property) {
            if(!$property) {
                $this->canSubmit = false;
                break;
            }
        }

        $this->validateOnly($propertyName, [
            'name' => 'required|min:5',
            'members' => 'required',
            'country' => 'required',
            'year' => 'required',
            'groupStatus' => 'required',
        ]);
    }

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
  
        $new = Str::slug($this->name) . '_' . time();
       
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
        // $group->members =  $this->members;
        $group->description =  $this->description;
        $group->country =  $this->country;
        $group->year = $this->year;
        $group->status =  $this->groupStatus;

        $group->save();

        if (!empty($this->members)) {
            foreach ($this->members as $key => $member) {
                $members = new MemberGroup();
                $members->person_id = $members[$key];
                $members->group_id = $group->id;

                $members->save();
            }
        }
        
        if (!empty($this->files)) {
            foreach ($this->files as $key => $image) {
                $gimage = new GroupImage();
                $gimage->group_id = $group->id;
                $new = Str::slug($this->name) . '_' . Carbon::now()->timestamp . $key;
                $filename = $new . '.' . $this->files[$key]->getClientOriginalExtension();
                $filePath = $this->files[$key]->storeAs(GroupImage::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->files[$key], $filename, GroupImage::UPLOAD_DIR); 

                $gimage->original = $filePath;
                $gimage->large = $resizedImage['large'];
                $gimage->medium = $resizedImage['medium'];
                $gimage->small = $resizedImage['small'];
                $gimage->status = 'active';

                $gimage->save();
            }
           
        }

        

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
        $this->oldImage = $group->groupImages->first()->small;
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
  
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->groupId) {
            if ($group) {
               
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
                // $group->members =  $this->members;
                $group->description =  $this->description;
                $group->country =  $this->country;
                $group->year = $this->year;
                $group->status =  $this->groupStatus;

                $group->save();

                if (!empty($this->members)) {
                    foreach ($this->members as $key => $member) {
                        $members = new MemberGroup();
                        $members->person_id = $members[$key];
                        $members->group_id = $group->id;
        
                        $members->save();
                    }
                }

                if (!empty($this->files)) {
                    // delete image
			        $this->deleteImage($this->groupId);
                    foreach ($this->files as $key => $image) {
                        $gimage = new GroupImage();
                        $gimage->group_id = $group->id;
                        $new = Str::slug($this->name) . '_' . Carbon::now()->timestamp . $key;
                        $filename = $new . '.' . $this->files[$key]->getClientOriginalExtension();
                        $filePath = $this->files[$key]->storeAs(GroupImage::UPLOAD_DIR, $filename, 'public');
                        $resizedImage = $this->_resizeImage($this->files[$key], $filename, GroupImage::UPLOAD_DIR); 
        
                        $gimage->original = $filePath;
                        $gimage->large = $resizedImage['large'];
                        $gimage->medium = $resizedImage['medium'];
                        $gimage->small = $resizedImage['small'];
                        $gimage->status = 'active';
        
                        $gimage->save();
                    }
                }
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
		$size = explode('x', GroupImage::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', GroupImage::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', GroupImage::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

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
        $groupImage = GroupImage::where(['group_id' => $id])->first();
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

        if (Storage::exists($path.$groupImage->large)) {
            Storage::delete($path.$groupImage->large);
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
