<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\User;


class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }


    public function create()
    {
        $users = User::all();
        return view('pages.add', compact('users'));
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Page::create($validatedData);
        return redirect('pages.index');
    }




    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }




    public function edit(Page $page)
    {
        return view('pages.edit', compact('pages'));
    }



    public function update(Request $request, Page $page)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $page->update($validatedData);
        return redirect()->route('pages.index');
    }
}
