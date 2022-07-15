<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $item = Post::with(['category', 'user'])->latest()->get();
        return view('pages.posts', [
            'item' => $item,
            'category' => Category::all(), 
            'post' => Post::latest()->get()
        ]);
    }
}
