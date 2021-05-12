<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id','asc')->get();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|email|unique:users',
            'phone' => 'required|max:255|string',
            'password' => 'required|string|min:8',
            'birth' => 'required',
        ]);

        if($valid)
        {
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            //$user->dni = $request->dni;
            $user->Phone = $request->phone;
            $user->Birth = $request->birth;

            $user->role = 'user';

            $user->save();

            $message = 'Registro realizado con éxito';
        }

        return back()->with(compact('message'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);

        //dd($user);

        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request)
    {

        //dd($request->all());

        $valid = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|email',
            'phone' => 'required|max:255|string',
            'birth' => 'required',
        ]);

        $user = User::find($request->user);

        $user->name = $request->name;
        if($user->email != $request->email)
        {
            $user->email = $request->email;
        }
        //$user->dni = $request->dni;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('admin.user.index');

    }

    public function destroy(Request $request)
    {
        $user = User::find($request->user);
        //dd($user);
        $user->delete();

        $message = 'Usuario eliminado con éxito';

        return back()->with(compact('message'));
    }
}
