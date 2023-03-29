<?php

namespace App\Http\Livewire;

use App\Models\Thread;
use App\Models\User;
use App\Models\Reply;
use App\Models\ReplyAble;
use App\Jobs\CreateReply;
use App\Policies\ReplyPolicy;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ThreadDetail extends Component
{
    use WithPagination;

    public $showReplyForm = false;
    public $thread;
    public $threadId;
    public $threadTitle;
    public $threadBody;
    public $threadUser;
    public $threadDate;
    public $replyId;
    public $replyCount;
    public $body;

    public $ReplayableId;
    public $ReplayableType = 'thread';

    public $showConfirmModal = false;
    public $deleteId = '';

    public $sort = 'asc';
    public $perPage = 10;

    protected $rules = [
        'body' =>  'required',
    ];

    public function mount($slug)
    {
        $this->thread = Thread::where('slug', $slug)->first();
        $this->threadId = $this->thread->id;
        $this->threadTitle = $this->thread->title;
        $this->threadBody = $this->thread->body;
        $this->threadDate = Carbon::parse($this->thread->created_at)->diffForHumans();
        $threadUserId = $this->thread->author_id;
        $this->threadUser = User::findOrFail($threadUserId)->first_name;

        $this->replyCount = Reply::where('thread_id', $this->threadId)->count();
    }

    public function updated()
    {
        $this->replyCount = Reply::where('thread_id', $this->threadId)->count();
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
        Reply::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Reply deleted successfully']);
    }

    public function createReply()
    {
        $this->validate();
        
        $this->authorize(ReplyPolicy::CREATE, Reply::class);
        
        $reply = new Reply([
            'body' => $this->body
        ]);

        $reply->authoredBy(Auth::user()->id);
        $reply->to($this->replyAble);
        $reply->save();

        // Reply::create([
        //     'author_id' => Auth::user()->id,
        //     'thread_id' => $this->threadId,
        //     'body' => $this->body,
        // ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Reply created successfully']);
    }

    public function replyAble(): ReplyAble
    {
        return $this->findReplyAble($this->threadId,  $this->ReplayableType);
    }

    private function findReplyAble(int $id, string $type): ReplyAble
    {
        switch ($type) {
            case Thread::TABLE:
                return Thread::find($id);
        }
        abort(404);
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function loadMore()
    {
        $this->perPage += 10;        
    }

    public function render()
    {
        return view('livewire.thread-detail', [
            'replies' => Reply::where('thread_id', $this->threadId)->orderBy('created_at', $this->sort)->paginate($this->perPage)
        ]);
    }
}
