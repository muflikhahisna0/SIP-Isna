<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('users/index', ['users' => $users]);
    }
    public function create()
    {
        return view('users/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required',
        ]);
        $users = new Users;
        // data yg mau di Request
        $users->role_id = $request->role_id;
        $users->name = $request->name;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('/users')->with('status', 'Data has been added succesfully!');
    }

    public function edit(Users $users)
    {
        return view('/users/edit', compact('users'));
    }

    public function update(Request $request, Users $users)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required',
        ]);
        Users::where('id', $users->id)
            ->update([
                'role_id' => $request->role_id,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
            ]);
        return redirect('/users')->with('status', 'Data has been updated succesfully!');
    }
    public function destroy(Users $users)
    {
        Users::destroy($users->id);
        return redirect('/users')->with('status', 'Data has been deleted succesfully!');
    }
}
