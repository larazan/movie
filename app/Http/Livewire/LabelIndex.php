<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Label;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;

class LabelIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showLabelModal = false;
    public $name;
    public $status;
    public $labelId;
    public $file;
    public $site;
    public $oldImage;
    public $labelStatus = 'inactive';
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
        $this->showLabelModal = true;
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
        Label::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Label deleted successfully']);
    }

    public function createLabel()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Label::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Label::UPLOAD_DIR);
  
        Label::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'site' => $this->site,
            'origin' => $filePath,
            'small' => $resizedImage['small'],
            'medium' => $resizedImage['medium'],
            'status' => $this->labelStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Label created successfully']);
    }

    public function showEditModal($labelId)
    {
        $this->reset(['name']);
        $this->labelId = $labelId;
        $label = Label::find($labelId);
        $this->name = $label->name;
        $this->site = $label->site;
        $this->oldImage = $label->small;
        $this->labelStatus = $label->status;
        $this->showLabelModal = true;
    }
    
    public function updateLabel()
    {
        $label = Label::findOrFail($this->labelId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->labelId) {
            if ($label) {
               // delete image
			    $this->deleteImage($this->labelId);
                $filePath = $this->file->storeAs(Label::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Label::UPLOAD_DIR);

                $label->update([
                    'name' => $this->name,
                    'slug' => Str::slug($this->name),
                    'site' => $this->site,
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'medium' => $resizedImage['medium'],
                    'status' => $this->labelStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showLabelModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Label updated successfully']);
    }

    public function deleteLabel($labelId)
    {
        $label = Label::findOrFail($labelId);
        $label->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Label deleted successfully']);
    }

    public function closeLabelModal()
    {
        $this->showLabelModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.label-index', [
            'labels' => Label::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Label::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Label::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Label::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Label::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $labelImage = Label::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$labelImage->original)) {
            Storage::delete($path.$labelImage->original);
		}
		
        if (Storage::exists($path.$labelImage->small)) {
            Storage::delete($path.$labelImage->small);
        }   

		if (Storage::exists($path.$labelImage->medium)) {
            Storage::delete($path.$labelImage->medium);
        }

             
        return true;
    }

   
}
