<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'likes' => 'required',
            'comments' => 'required',
        ]);
        
        Post::create($request->post());

        return redirect()->route('posts.index')->with('success','Post has been created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required',
            'likes' => 'required',
            'comments' => 'required',
        ]);
        
        $post->fill($request->post())->save();

        return redirect()->route('posts.index')->with('success','Post Has Been updated successfully');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post has been deleted successfully');
    }
}
