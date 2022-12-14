<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        return view('post', [
            'title' => 'posts',
            'post' => Post::all()
        ]);
    }

    public function show($slug){
        return view('posts', ['title' => 'Blog',
    'posts'=> Post::find($slug)
]);
    }
}
