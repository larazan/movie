<?php

namespace App\Http\Livewire;

use App\Models\Network;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use Livewire\Component;

class NetworkIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showNetworkModal = false;
    public $name;
    public $country;
    public $status;
    public $networkId;
    public $file;
    public $site;
    public $oldImage;
    public $networkStatus = 'inactive';
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
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showNetworkModal = true;
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
        Network::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Network deleted successfully']);
    }

    public function createNetwork()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Network::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Network::UPLOAD_DIR);
  
        Network::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'site' => $this->site,
            'country' => $this->country,
            'origin' => $filePath,
            'small' => $resizedImage['small'],
            'medium' => $resizedImage['medium'],
            'status' => $this->networkStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Network created successfully']);
    }

    public function showEditModal($networkId)
    {
        $this->reset(['name']);
        $this->networkId = $networkId;
        $network = Network::find($networkId);
        $this->name = $network->name;
        $this->site = $network->site;
        $this->country = $network->country;
        $this->oldImage = $network->small;
        $this->networkStatus = $network->status;
        $this->showNetworkModal = true;
    }
    
    public function updateNetwork()
    {
        $network = Network::findOrFail($this->networkId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->networkId) {
            if ($network) {
               // delete image
			    $this->deleteImage($this->networkId);
                $filePath = $this->file->storeAs(Network::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Network::UPLOAD_DIR);

                $network->update([
                    'name' => $this->name,
                    'slug' => Str::slug($this->name),
                    'site' => $this->site,
                    'country' => $this->country,
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'medium' => $resizedImage['medium'],
                    'status' => $this->networkStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showNetworkModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Network updated successfully']);
    }

    public function deleteNetwork($networkId)
    {
        $network = Network::findOrFail($networkId);
        $network->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Network deleted successfully']);
    }

    public function closeNetworkModal()
    {
        $this->showNetworkModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.network-index', [
            'networks' => Network::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'countries' => Country::orderBy('name', $this->sort)->get(),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Network::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Network::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Network::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Network::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $networkImage = Network::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$networkImage->original)) {
            Storage::delete($path.$networkImage->original);
		}
		
        if (Storage::exists($path.$networkImage->small)) {
            Storage::delete($path.$networkImage->small);
        }   

		if (Storage::exists($path.$networkImage->medium)) {
            Storage::delete($path.$networkImage->medium);
        }

             
        return true;
    }
}
