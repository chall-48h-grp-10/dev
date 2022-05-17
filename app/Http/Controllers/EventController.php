<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function organizeEventPage()
    {
        return view('organizeEvent');
    }

    public function createEvent(Request $request)
    {
        return $request->all();
    }
}
