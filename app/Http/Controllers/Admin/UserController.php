<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'is_admin' => 'required|boolean'
        ]);

        if ($request->password) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed'
            ]);

            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;

        $user->save();

        session()->flash('swal', [
            'icon' => 'success',
            'title' => '¡Usuario actualizado!',
            'text' => 'El usuario se ha actualizado correctamente.'
        ]);

        return redirect()->route('admin.users.edit', $user);

    }

    public function destroy(User $user)
    {
        //
    }
}
