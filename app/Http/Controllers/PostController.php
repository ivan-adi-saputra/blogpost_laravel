<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $item = Post::with(['category', 'user'])->latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString();
        return view('pages.posts', [
            'items' => $item,
            'category' => Category::all(), 
            'post' => Post::latest()->get(), 
            'user' => User::all()
        ]);
    }
}
