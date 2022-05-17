<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //

    public function organizeEventPage()
    {
        return view('organizeEvent');
    }

    public function createEvent(Request $request)
    {
        $event = new Event;

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $event->ownerId = 1;
        $event->name = $request->name;
        $event->type = $request->type;
        $event->details = $request->details;
        $event->date = $request->date;
        $event->lat = $request->lat;
        $event->lng = $request->lng;
        $event->image = $request->img;

        $event->save();

        return back();
    }
}
