<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;

class GroupMember extends Component
{

    public $queryMember = '';
    public $group;
    public $persons = [];

    public function mount($group)
    {
        $this->group = $group;
    }

    public function updatedQueryMember()
    {
        $this->persons = Person::search('name', $this->queryMember)->get();
    }

    public function addMember($personId)
    {
        $person = Person::findOrFail($personId);
        $this->group->members()->attach($person);
        $this->reset('queryPerson');
        $this->emit('personAdded');
    }

    public function detachMember($personId)
    {
        $this->group->members()->detach($personId);
        $this->emit('personDetached');
    }

    public function render()
    {
        return view('livewire.group-member');
    }
}
