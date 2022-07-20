<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Post::where('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.index', [
            'items' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(), 
            'post' => Post::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $item = $request->all();
        $item['slug'] = Str::slug($item['title']);
        $item['photo'] = $request->file('photo')->store('image');
        $item['user_id'] = auth()->user()->id;
        $item['excerpt'] = Str::limit(strip_tags($item['description']), 100);

        Post::create($item);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Post::findOrFail($id);
        return view('dashboard.posts.show', [
            "item" => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $validatedData = $request->all();
        $validatedData['slug'] = Str::slug($validatedData['title']);
        if($request->file('photo')) {
            if( $request->oldImage ){
                Storage::delete($request->oldImage);
            }
            $validatedData['photo'] = $request->file('photo')->store('image');
        }
        
        $data = Post::findOrFail($id);
        $data->update($validatedData);

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if( $post->photo ){
            Storage::delete($post->photo);
        }
        Post::destroy($post->id);

        return redirect()->route('posts.index');
    }
}
