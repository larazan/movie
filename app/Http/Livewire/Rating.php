<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Rating extends Component
{
    public $rating;
    public $avgRating;
    public $book;

    public function mount($book)
    {
        $this->book = $book;
        $userRating = $this->book->users()->where('user_id', auth()->user()->id)->first();

        if (!$userRating) {
            $this->rating = 0;
        } else {
            $this->rating = $userRating->pivot->rating;
        }

        $this->calculateAverageRating();
    }

    public function setRating($val)
    {
        if ($this->rating == $val) {
            $this->rating = 0;
        } else {
            $this->rating = $val;
        }

        $userId = Auth::user()->id;
        $userRating = $this->book->users()->where('user_id', auth()->user()->id)->first();

        if (!$userRating) {
            $userRating = $this->book->users()->attach($userId, [
                'rating' => $val
            ]);
        } else {
            $this->book->users()->updateExistingPivot($userId, [
                'rating' => $val
            ], false);
        }

        $this->calculateAverageRating();
    }

    public function calculateAverageRating() 
    {
        $this->avgRating = round($this->book->users()->avg('rating'), 1);
    }

    public function render()
    {
        return view('livewire.rating');
    }
}
