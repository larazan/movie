<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CalendarIndex extends Component
{
    // public $events;
    public $date;
    public $acara = [];
    public $events;
    public $showEventModal = false;
    public $showAddEventModal = false;
    public $name;
    public $start;
    public $end;
    // public $color;
    public $eventId;
    public $colorStatus = 'indigo';
    public $colors = [
        'indigo',
        'sky',
        'yellow',
        'red',
        'green',
        'emerald',
    ];

    public $deleteId = '';

    protected $rules = [
        'name' => 'required|min:3',
        'start' => 'required',
        'colorStatus' => 'required',
    ];

    public function mount()
    {
        $user_id = Auth::user()->id;
        $eves = Event::where('user_id', $user_id)->get();
        foreach ($eves as $eve) {
            array_push($this->acara, [
                'eventId' => $eve->id,
                'eventStart' => str_replace(',', '', Carbon::parse($eve->start)->toDayDateTimeString()),
                'eventEnd' => str_replace(',', '', Carbon::parse($eve->end)->toDayDateTimeString()),
                'eventName' => $eve->name,
                'eventColor' => $eve->color,
            ]);
        }

        $this->events = json_encode($this->acara);
        
        $this->start = today()->format('Y-m-d');
        $this->end = today()->format('Y-m-d');
        // $this->events = Event::select('id','name','start', 'end', 'color')->get();
    }

    public function showCreateModal()
    {
        $this->showEventModal = true;
    }

    public function showAddModal()
    {
        $this->showAddEventModal = true;
    }
    
    public function deleteId($id)
    {
        Event::find($id)->delete();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Event deleted successfully']);
    }

    public function createEvent()
    {
        $this->validate();
  
        Event::create([
            'user_id' => Auth::user()->id,
            'name' => $this->name,
            'start' => $this->start,
            'end' => $this->end,
            'color' => $this->colorStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Event created successfully']);
    }

    public function addEventNow($event)
    {

        Event::create([
            'user_id' => Auth::user()->id,
            'name' => $event['name'],
            'start' => $event['start'],
            'end' => $event['start'],
            'color' => $event['theme'],
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Event added successfully']);
    }

    public function showEditModal($eventId)
    {
        $this->reset(['name']);
        $this->eventId = $eventId;
        $event = Event::find($eventId);
        $this->name = $event->name;
        $this->start = $event->start;
        $this->end = $event->end;
        $this->colorStatus = $event->color;
        
        $this->showEventModal = true;
    }
    
    public function updateEvent()
    {
        $event = Event::findOrFail($this->eventId);
        $this->validate();
        
        if ($this->eventId) {
            if ($event) {
               
                $event->update([
                    'user_id' => Auth::user()->id,
                    'name' => $this->name,
                    'start' => $this->start,
                    'end' => $this->end,
                    'color' => $this->colorStatus,
                ]);
            }
        }

        $this->reset();
        $this->showEventModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Event updated successfully']);
    }

    public function deleteEvent($eventId)
    {
        $event = Event::findOrFail($eventId);
        $event->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Event deleted successfully']);
    }

    public function closeEventModal()
    {
        $this->showEventModal = false;
        $this->showAddEventModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function getevent()
    {       
        $events = Event::select('id','name','start', 'end', 'color')->get();

        return  json_encode($events);
    }

    public function render()
    {
        // $events = Event::select('id','name','start','end','color')->get();

        // $this->events = json_encode($events);
        // $this->date = Carbon::now();
        return view('livewire.calendar-index');
    }

    public function getDate($day)
    {
        dd('day');
    }
}
