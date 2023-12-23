<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(){

        return view('pages.createUser');
    }
    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('success', 'User created successfully!');
    }
}
