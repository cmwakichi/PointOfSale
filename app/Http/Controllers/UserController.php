<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index')->with('users', $users);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();
        return redirect()->back()->with('message', 'User was added');
    }

    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->update();
        return redirect()->back()->with('message', 'User was updated');
    }
}
