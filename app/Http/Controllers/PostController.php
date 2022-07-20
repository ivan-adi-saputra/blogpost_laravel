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
        $title = '';
        if(request('category')){
            $item = Category::firstWhere('slug', request('category'));
            $title = ' Post in ' . $item->name;
        }
        if(request('user')){
            $item = User::firstWhere('username', request('user'));
            $title = ' Author By ' . $item->name;
        }
        $item = Post::with(['user', 'category'])->latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString();
        return view('pages.posts', [
            'title' => $title ? $title : 'All Post',
            'items' => $item,
            'category' => Category::all(), 
            'post' => Post::latest()->get(), 
            'user' => User::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('pages.post', [
            'post' => $post
        ]);
    }
}
