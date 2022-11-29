<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function events()
    {
        $events = Event::all();
        return view('events')->with('events', $events);
    }
}
