<?php

namespace App\Http\Controllers;

// import models "POST"
use App\Models\Post;

// Return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index():View
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index',compact('posts'));
    }
}
