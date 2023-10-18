<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $categories = Category::all();
        return view('categories.index', compact('categories', 'categoryCount', 'commentCount'));
    }


    public function create()
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $categories = Category::all();
        return view('categories.create', compact('categoryCount', 'commentCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',

        ]);

        Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('name'),
        ]);

        return back()->with('success', 'Category added successfully.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('categories.index')->with('error', 'Category not found.');
        }

        $category->delete();

        return back()->with('success', 'Category deleted successfully.');
    }

    public function edit($id)
    {
        $commentCount = Comment::count();

        $categoryCount = Category::count();
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category', 'categoryCount', 'commentCount'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return back()->with('success', 'Category deleted successfully.');
    }
}
