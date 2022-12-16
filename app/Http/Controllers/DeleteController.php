<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('events')->with('status', 'Event deleted');
    }
}
