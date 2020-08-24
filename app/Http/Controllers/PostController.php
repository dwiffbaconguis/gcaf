<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all()
    {
        return view('posts.landing', [
            'posts' => Post::latest()->paginate(5),
        ]);
    }

    public function single(Post $post)
    {
        return view('posts.single', compact('post'));
    }
}
