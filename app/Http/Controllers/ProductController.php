<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Location;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{

    public function index()
    {
        $productCount = Product::count();
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $products = Product::all();
        return view('products.index', compact('products', 'productCount', 'categoryCount', 'commentCount'));
    }


    public function create()
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();


        $users = User::all();
        $locations = Location::all();
        $categories = Category::all();
        return view('products.create', compact('users', 'locations', 'categories', 'productCount', 'categoryCount', 'commentCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'file' => 'required',
            'location_id' => 'required|exists:locations,id',
            'category_id' => 'required|exists:categories,id',


        ]);

        $file = $request->file('file');

        if ($file) {
            $path = $file->store('uploads', 'public');
        } else {
            $path = null;
        }

        Product::create([
            'user_id' => auth()->user()->id,
            'location_id' => $request->input('location_id'),
            'category_id' => $request->input('category_id'),
            'file' => $path,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'prix' => $request->input('prix'),

        ]);

        return back()->with('success', 'Product added successfully.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }

        $product->delete();

        return back()->with('success', 'Product deleted successfully.');
    }

    public function edit($id)
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();

        $product = Product::findOrFail($id);
        $users = User::all();
        $locations = Location::all();
        $categories = Category::all();
        return view('products.edit', compact('product', 'users', 'locations', 'categories', 'productCount', 'categoryCount', 'commentCount'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'file' => 'required',
            'location_id' => 'required|exists:locations,id',
            'category_id' => 'required|exists:categories,id',

        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->prix = $request->input('prix');
        $product->user_id = $request->user()->id;
        $product->location_id = $request->input('location_id');
        $product->category_id = $request->input('category_id');

        $file = $request->file('file');

        if ($file) {
            $path = $file->store('uploads', 'public');
            $product->file = $path;
        } else {
            $product->file = null;
        }

        $product->save();

        return back()->with('success', 'Product updated successfully.');
    }
}
