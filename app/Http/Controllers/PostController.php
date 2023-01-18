<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
        {
            return view('add-blog-post-form');
        }
        
    public function store(Request $request)
    {
        $post = new Post;
        $post->event_name = $request->event_name;
        $post->event_start = $request->event_start;
        $post->event_end = $request->event_end;
        $post->max_tickets = $request->max_tickets;
        $post->location = $request->location;
        $post->price = $request->price;
        $post->preorder_price = $request->preorder_price;
        $post->description = $request->description;
        $post->save();

        Storage::makeDirectory('public/images');
        $src= Storage::putFile('public/images' , $request->file('image'));
        $src = str_replace('public' , 'storage' , $src);
        $post->photo = $src;

        $post->save();

        return redirect('/')->with('status', 'Event added');
    }
}
