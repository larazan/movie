<?php

namespace App\Http\Livewire;

use App\Models\Board;
use App\Models\Section;
use App\Models\Task;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Livewire\Component;

class Kanban extends Component
{   
    use WithFileUploads;

    public $sort = 'asc';
    public $statuses = [
        'active',
        'inactive'
    ];
    public $colorStatus = 'indigo';
    public $colors = [
        'indigo',
        'sky',
        'yellow',
        'red',
        'green',
        'emerald',
    ];

    // Board
    public $board;
    public $showBoardModal = false;
    public $boardId;
    public $boardTitle;
    public $description;
    public $boardStatus = 'inactive';
    public $showConfirmBoardModal = false;
    public $deleteBoardId = '';

    // Section
    public $showSectionModal = false;
    public $boardID;
    public $sectionId;
    public $sectionTitle;
    public $color;
    public $sectionPosition;
    public $sectionStatus = 'inactive';
    public $showConfirmSectionModal = false;
    public $deleteSectionId = '';

    // Task
    public $showTaskModal = false;
    public $sectionID;
    public $sectionName;
    public $taskId;
    public $taskTitle;
    public $body;
    public $taskPosition;
    public $file;
    public $oldImage;
    public $taskStatus = 'inactive';
    public $showConfirmTaskModal = false;
    public $deleteTaskId = '';

    public function mount($slug = '')
    {
        $user_id = Auth::user()->id;
        if ($slug) {
            $this->board = Board::where('user_id', $user_id)->where('slug', $slug)->first();
            $this->boardID = $this->board->id;
        }
        
    }

    // BOARD
    public function showCreateBoardModal()
    {
        $this->showBoardModal = true;
    }

    public function closeConfirmBoardModal()
    {
        $this->showConfirmBoardModal = false;
    }

    public function removeBoardId($id)
    {
        $this->showConfirmBoardModal = true;
        $this->deleteBoardId = $id;
    }

    public function deletedBoard()
    {
        Board::find($this->deleteBoardId)->delete();
        $this->showConfirmBoardModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Board deleted successfully']);
    }

    public function createBoard()
    {
        // dd($this->publishedAt);
        $this->validate([
            'boardTitle' => 'required|min:3',
            'description' => 'required|min:3',
        ]);
  
        Board::create([
            'user_id' => Auth::user()->id,
            'title' => $this->boardTitle,
            'slug' => Str::slug($this->boardTitle),
            'rand_id' => Str::random(10),
            'description' => $this->description,
            'status' => $this->boardStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Board created successfully']);
    }

    public function showEditBoardModal($boardId)
    {
        $this->reset(['boardTitle']);
        $this->boardId = $boardId;
        $board = Board::find($boardId);
        $this->boardTitle = $board->title;
        $this->description = $board->description;
        $this->boardStatus = $board->status;

        $this->showBoardModal = true;
    }
    
    public function updateBoard()
    {
        $board = Board::findOrFail($this->boardId);
        $this->validate([
            'boardTitle' => 'required|min:3',
            'description' => 'required|min:3',
        ]);
  
        if ($this->boardId) {
            if ($board) {

                $board->update([
                    'user_id' => Auth::user()->id,
                    'title' => $this->boardTitle,
                    'slug' => Str::slug($this->boardTitle),
                    'rand_id' => Str::random(10),
                    'description' => $this->description,
                    'status' => $this->status,
                ]);
                
            }
        }

        $this->reset();
        $this->showBoardModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Board updated successfully']);
    }

    public function deleteBoard($boardId)
    {
        $board = Board::findOrFail($boardId);
        $board->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Board deleted successfully']);
    }

    public function closeBoardModal()
    {
        $this->showBoardModal = false;
    }
    // END BOARD
    



    // SECTION
    public function showCreateSectionModal()
    {
        $this->showSectionModal = true;
    }

    public function closeConfirmSectionModal()
    {
        $this->showConfirmSectionModal = false;
    }

    public function removeSectionId($id)
    {
        $this->showConfirmSectionModal = true;
        $this->deleteSectionId = $id;
    }

    public function deletedSection()
    {
        Section::find($this->deleteSectionId)->delete();
        $this->showConfirmSectionModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Section deleted successfully']);
    }

    public function createSection()
    {
        // dd($this->publishedAt);
        $this->validate([
            'sectionTitle' => 'required|min:3',
            // 'description' => 'required|min:3',
        ]);
  
        Section::create([
            'user_id' => Auth::user()->id,
            'board_id' => $this->boardID,
            'title' => $this->sectionTitle,
            'color' => $this->color,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Section created successfully']);
    }

    public function showEditSectionModal($sectionId)
    {
        $this->reset(['sectionTitle']);
        $this->sectionId = $sectionId;
        $section = Section::find($sectionId);
        $this->sectionTitle = $section->title;
        $this->color = $section->color;

        $this->showSectionModal = true;
    }
    
    public function updateSection()
    {
        $section = Section::findOrFail($this->sectionId);
        $this->validate([
            'sectionTitle' => 'required|min:3',
            // 'description' => 'required|min:3',
        ]);
  
        if ($this->sectionId) {
            if ($section) {

                $section->update([
                    'user_id' => Auth::user()->id,
                    'board_id' => $this->boardId,
                    'title' => $this->title,
                    'color' => $this->color,
                ]);
                
            }
        }

        $this->reset();
        $this->showSectionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Section updated successfully']);
    }

    public function deleteSection($sectionId)
    {
        $section = Section::findOrFail($sectionId);
        $section->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Section deleted successfully']);
    }

    public function closeSectionModal()
    {
        $this->showSectionModal = false;
    }

    // END SECTION



    // TASK
    public function showCreateTaskModal($id)
    {
        $this->showTaskModal = true;
        $this->sectionID = $id;
        $this->sectionName = Section::find($id)->title;
    }

    public function closeConfirmTaskModal()
    {
        $this->showConfirmTaskModal = false;
    }

    public function removeTaskId($id)
    {
        $this->showConfirmTaskModal = true;
        $this->deleteTaskId = $id;
    }

    public function deletedTask()
    {
        Task::find($this->deleteTaskId)->delete();
        $this->showConfirmTaskModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Task deleted successfully']);
    }

    public function createTask()
    {
        // dd($this->publishedAt);
        $this->validate([
            'taskTitle' => 'required|min:3',
        ]);
  
        if ($this->file) {
            $new = Str::slug($this->taskTitle) . '_' . time();
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Task::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Task::UPLOAD_DIR);
            
            Task::create([
                'section_id' => $this->sectionID,
                'user_id' => Auth::user()->id,
                'title' => $this->taskTitle,
                'body' => $this->body,
                'origin' => $filePath,
                'small' => $resizedImage['small'],
                'medium' => $resizedImage['medium'],
                'status' => $this->taskStatus,
            ]);
        } else {
            Task::create([
                'section_id' => $this->sectionID,
                'user_id' => Auth::user()->id,
                'title' => $this->taskTitle,
                'body' => $this->body,
                'status' => $this->taskStatus,
            ]);
        }
        
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Task created successfully']);
    }

    public function showEditTaskModal($taskId)
    {
        $this->reset(['taskTitle']);
        $this->taskId = $taskId;
        $task = Task::find($taskId);
        $this->sectionID = $task->section_id;
        $this->taskTitle = $task->title;
        $this->body = $task->body;
        $this->oldImage = $task->small;
        $this->taskStatus = $task->status;
        $this->showTaskModal = true;
    }
    
    public function updateTask()
    {
        $task = Task::findOrFail($this->taskId);
        $this->validate();
  
        $new = Str::slug($this->taskTitle) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->taskId) {
            if ($task) {
               // delete image
			    $this->deleteImage($this->taskId);
                $filePath = $this->file->storeAs(Task::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Task::UPLOAD_DIR);

                $task->update([
                    'section_id' => $this->sectionID,
                    'user_id' => Auth::user()->id,
                    'title' => $this->taskTitle,
                    'body' => $this->body,
                    'origin' => $filePath,
                    'small' => $resizedImage['small'],
                    'medium' => $resizedImage['medium'],
                    'status' => $this->taskStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showTaskModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Task updated successfully']);
    }

    public function deleteTask($taskId)
    {
        $task = Task::findOrFail($taskId);
        $task->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Task deleted successfully']);
    }

    public function closeTaskModal()
    {
        $this->showTaskModal = false;
    }

    // END TASK

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        $user_id = Auth::user()->id;
        $tasks = auth()->user()->sections()->with('tasks')->get();
        return view('livewire.kanban', [
            'boards' => Board::where('user_id', $user_id)->get(),
            'sections' => Section::where('user_id', $user_id)->where('board_id', $this->boardID)->get(),
            'tasks' => Task::where('user_id', $user_id)->get(),
            'cont' => $tasks,
        ]);
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
}
