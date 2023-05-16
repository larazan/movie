<?php

namespace App\Http\Livewire;

use App\Models\Option;
use App\Models\Poll;
use App\Models\Vote as VotePoll;
use App\Enums\PollStatus;
use Livewire\Component;

class Vote extends Component
{
    public $optionBoard = true;
    public $optionResult = false;

    public $optionId;
    public $voteCount;

    protected $rules = [
        'option_id' => 'required|exists:options,id',
    ];

    public function mount()
    {
        $poll = new Poll();
        $this->voteCount = $poll->votes->count();
    }

    public function store($optionId, Poll $poll)
    {
        $this->voteCount += 1;
        $this->optionBoard = false;
        $this->optionResult = true;


        // abort_if($poll->status != PollStatus::STARTED->value, 404);
        // $selectedOption = $poll->votes()->where('user_id', auth()->id())->first()->option;

        // $poll->votes()->updateOrCreate(
        //     [
        //         'user_id' => auth()->id()
        //     ],
        //     [
        //         'option_id' => $optionId
        //     ]
        // );

        // $newOption =  Option::find($optionId);
        // $newOption->increment('votes_count');

        // if ($selectedOption) {
        //     $selectedOption->decrement('votes_count');
        // }

        // $selectedOption = $newOption;
        
    }

    public function render(Poll $poll)
    {
        $poll = $poll->load('options');

        $selectedOption = $poll->votes()->where('user_id', auth()->id())->first()?->option_id;

        return view('livewire.vote', [
            'poll' => Poll::where('status', 'PENDING')->first(),
            'selectedOption' => $selectedOption,
        ]);
    }
}
