<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

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



//     public function store(Request $request)
// {
//     $request->validate([
//         'title' => 'required|string',
//         'description' => 'required|string',
//     ]);

//     $badWords = array("badword1", "badword2", "badword3"); // Add more bad words to this array as needed

//     $content = $request->input('title') . ' ' . $request->input('description');

//     foreach ($badWords as $badWord) {
//         if (strpos(strtolower($content), $badWord) !== false) {
//             return back()->with('error', 'Your post contains a banned word. Please remove it before submitting.');
//         }
//     }

//     $image = $request->file('image');

//     if ($image) {
//         $path = $image->store('uploads', 'public');
//     } else {
//         $path = null;
//     }

//     $cover = $request->file('cover');

//     if ($cover) {
//         $path2 = $cover->store('uploads', 'public');
//     } else {
//         $path2 = null;
//     }

//     Page::create([
//         'user_id' => auth()->user()->id,
//         'image' => $path,
//         'cover' => $path2,
//         'title' => $request->input('title'),
//         'description' => $request->input('description'),
//     ]);

//     return back()->with('success', 'Page created successfully.');
// }

public function store(Request $request)
{
    $request->validate([
        'content' => 'required',
    ]);

    $image = $request->file('image');
    if ($image) {
        $path = $image->store('uploads', 'public');
    } else {
        $path = null;
    }

    Post::create([
        'content' => $request->input('content'),
        'image' => $path,
        'likes' => 0,
        'comments' => 0,
    ]);

    return back()->with('success', 'Post has been created successfully.');
}
// public function store(Request $request)
// {
//     $request->validate([
//         'title' => 'required|string',
//         'description' => 'required|string',
//     ]);

//     $badWords = array("badword1", "badword2", "badword3"); // Add more bad words to this array as needed

//     $content = $request->input('title') . ' ' . $request->input('description');

//     foreach ($badWords as $badWord) {
//         if (strpos(strtolower($content), $badWord) !== false) {
//             return back()->with('error', 'Your post contains a banned word. Please remove it before submitting.');
//         }
//     }

//     $image = $request->file('image');

//     if ($image) {
//         $path = $image->store('uploads', 'public');
//     } else {
//         $path = null;
//     }

//     $cover = $request->file('cover');

//     if ($cover) {
//         $path2 = $cover->store('uploads', 'public');
//     } else {
//         $path2 = null;
//     }

//     Page::create([
//         'user_id' => auth()->user()->id,
//         'image' => $path,
//         'cover' => $path2,
//         'title' => $request->input('title'),
//         'description' => $request->input('description'),
//     ]);

//     return back()->with('success', 'Page created successfully.');
// }





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