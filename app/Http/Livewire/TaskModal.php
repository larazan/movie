<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Livewire\Component;

class TaskModal extends Component
{
    use WithFileUploads;

    public $showTaskModal = false;
    public $sectionId;
    public $taskId;
    public $title;
    public $body;
    public $position;
    public $file;
    public $oldImage;
    public $taskStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    protected $rules = [
        'title' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showTaskModal = true;
    }

    public function createTask()
    {
        // dd($this->publishedAt);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
  
        // Task::create([
        //     'section_id' => $this->sectionId,
        //     'user_id' => Auth::user()->id,
        //     'title' => $this->title,
        //     'body' => $this->body,
        //     'origin' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'medium' => $resizedImage['medium'],
        //     'status' => $this->taskStatus,
        // ]);

        $task = new Task();
        $task->section_id = $this->sectionId;
        $task->user_id = Auth::user()->id;
        $task->title = $this->title;
        $task->body = $this->body;
        $task->status = $this->taskStatus;

        if (!empty($this->file)) {
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Task::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Task::UPLOAD_DIR);

            $task->original = $filePath;
            $task->small =$resizedImage['small'];
            $task->medium =$resizedImage['medium'];
        }

        $task->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Task created successfully']);
    }

    public function closeTaskModal()
    {
        $this->showTaskModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Task::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Task::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Task::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Task::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $taskImage = Task::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$taskImage->original)) {
            Storage::delete($path.$taskImage->original);
		}
		
        if (Storage::exists($path.$taskImage->small)) {
            Storage::delete($path.$taskImage->small);
        }   

		if (Storage::exists($path.$taskImage->medium)) {
            Storage::delete($path.$taskImage->medium);
        }

             
        return true;
    }

    public function render()
    {
        return view('livewire.task-modal');
    }
}
