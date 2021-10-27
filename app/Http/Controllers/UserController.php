<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function registerview()
    {
        return view('register');
    }

    public function updateview()
    {
        return view('update');
    }
    
    public function deleteview()
    {
        return view('delete');
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return view('welcome');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }


    public function register(Request $request)
    {
        $fileds = $request->validate(
            [
                'name' => 'Required|string',
                'email' => 'required|string',
                'password' => 'required|string',
            ]
        );

        User::create([
            'name' => $fileds['name'],
            'email' => $fileds['email'],
            'password' => bcrypt($fileds['password'])

        ]);

        return view('welcome');
    }

    public function show()
    {
        $user = User::all()->paginate(20);
        return view('displaying', ['users' => $user]);
    }
}
