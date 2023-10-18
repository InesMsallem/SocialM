<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $commentCount = Comment::count();
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index', compact('posts', 'commentCount'));
    }
    public function show()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'content' => 'required',
    //         'likes' => 'required',
    //         'comments' => 'required',
    //     ]);

    //     Post::create($request->post());

    //     return redirect()->route('posts.index')->with('success','Post has been created successfully.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Post::create([
            'content' => $request->input('content'),
            'likes' => 0,
            'comments' => 0,
        ]);

        return redirect()->route('home')->with('success', 'Post has been created successfully.');
    }



    // public function show(Post $post)
    // {
    //     return view('posts.show',compact('post'));
    // }


    public function edit(Post $post)
    {
        $commentCount = Comment::count();

        return view('posts.edit', compact('post', 'commentCount'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required',

        ]);

        $post->fill($request->post())->save();

        return redirect()->route('posts.index')->with('success', 'Post Has Been updated successfully');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post has been deleted successfully');
    }
}
