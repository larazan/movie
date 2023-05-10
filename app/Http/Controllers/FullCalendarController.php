<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FullCalendarController extends Controller
{
    //
    public function getEvent()
    {
        $events = [];
        $user_id = Auth::user()->id;
        $eves = Event::where('user_id', $user_id)->get();
        foreach ($eves as $eve) {
            array_push($events, [
                'eventId' => $eve->id,
                'eventStart' => str_replace(',', '', Carbon::parse($eve->start)->toDayDateTimeString()),
                'eventEnd' => str_replace(',', '', Carbon::parse($eve->end)->toDayDateTimeString()),
                'eventName' => $eve->name,
                'eventColor' => $eve->color,
            ]);
        }

        return response()->json($events);
        // return $events;
    }
}
