<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Location;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function displayProducts(Request $request)
    {
        $locations = Location::all();
        $allProducts = Product::all();
        $categories = Category::all();
        $search = $request->input('search');
        $category = $request->input('category');
        $user = auth()->user();
        $myProducts = Product::where('user_id', $user->id)->get();


        $products = Product::join('users', 'products.user_id', '=', 'users.id')
            ->join('locations', 'products.location_id', '=', 'locations.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'users.name as username', 'locations.name as location_name', 'categories.name as category_name')
            ->when($search, function ($query) use ($search) {
                return $query->where('products.name', 'like', "%$search%")
                    ->orWhere('products.description', 'like', "%$search%")
                    ->orWhere('users.name', 'like', "%$search%");
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('products.category_id', $category);
            })
            ->paginate(2); // Adjust the pagination limit as needed

        return view('products.frontOffice.productFrontOffice', compact('categories', 'products', 'myProducts', 'locations', 'allProducts'));
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
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'name' => 'required|string',
            'description' => 'required|string',


        ]);

        $product = Product::findOrFail($id);
        $product->location_id = $request->input('location_id');
        $product->category_id = $request->input('category_id');
        $user = Auth::user();
        $product->user_id = $user->id;
        $product->name = $request->input('name');
        $product->description = $request->input('description');


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
