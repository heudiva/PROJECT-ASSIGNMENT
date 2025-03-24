<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequrst;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(8); // Paginate for better performance
        return view('users.users', compact('users'));
    }
    
    public function store(Request $request){
        dd($request->input());
        $request->validate([
            'username' => 'required|string|max:50',
            'name' => 'string|max:50', // Display name
            'email' => 'email|unique:users,email|max:100'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

    }
}
