<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('home', compact('home'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->event_name = $request->event_name;
        $post->foto = $request->foto;
        $post->event_start = $request->event_start;
        $post->event_end = $request->event_end;
        $post->max_tickets = $request->max_tickets;
        $post->location = $request->location;
        $post->price = $request->price;
        $post->preorder_price = $request->preorder_price;
        $post->description = $request->description;
        $post->save();
        return redirect('events')->with('status', 'Event updated');
    }
}
