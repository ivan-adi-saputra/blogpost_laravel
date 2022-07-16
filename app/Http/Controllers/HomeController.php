<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $item = Post::with(['category', 'user'])->latest()->get();
        return view('pages.home', [
            'item' => $item,
        ]);
    }
}
