<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Livewire\Trix;

class PostIndex extends Component
{

    public $showPostModal = false;
    public $title;
    public $body;
    public $postId;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED // trix_value_updated()
    ];

    public function trix_value_updated($value){
        $this->body = $value;
    }

    public function showCreateModal()
    {
        $this->showPostModal = true;
    }

    public function createPost()
    {
        Post::create([
          'title' => $this->title,
          'slug' => Str::slug($this->title),
          'body' => $this->body,
          'status' => 'confirmed'
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Post created successfully']);
    }

    public function showEditModal($postId)
    {
        $this->reset(['postName']);
        $this->postId = $postId;
        $post = Post::find($postId);
        $this->title = $post->title;
        $this->showPostModal = true;
    }
    
    public function updatePost()
    {
        $post = Post::findOrFail($this->postId);
        $post->update([
            'title' => $this->title,
            'slug'     => Str::slug($this->title)
        ]);
        $this->reset();
        $this->showPostModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Post updated successfully']);
    }

    public function deletePost($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Post deleted successfully']);
    }

    public function closePostModal()
    {
        $this->showPostModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.post-index',  [
            'posts' => Post::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage)
        ]);
    }
}
