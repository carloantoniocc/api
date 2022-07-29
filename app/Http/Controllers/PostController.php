<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    Public function index()
    {
        return view ('index', [
            'posts' => Post::latest()->paginate()

        ]);

    }

}
