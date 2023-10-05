<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Models\Comment;


class GroupController extends Controller
{

    public function index()
    {
        $commentCount = Comment::count();
        $groups = Group::all();
        return view('groups.group', compact('groups', 'commentCount'));
    }


    public function create()
    {
        $commentCount = Comment::count();
        $users = User::all();
        return view('groups.add', compact('users', 'commentCount'));
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        Group::create($validatedData);
        return redirect('dashboard/groups');
    }




    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('showGroup');
    }




    public function edit(Group $group)
    {
        $commentCount = Comment::count();
        return view('groups.edit', compact('group', 'commentCount'));
    }



    public function update(Request $request, Group $group)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $group->update($validatedData);
        return redirect()->route('showGroup');
    }
}
