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
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'name' => 'nullable|string|max:50',
            'email' => 'nullable|email|unique:users,email|max:100'
        ]);

        $user = User::create($validated);

        return redirect()->route('user.index', $user)
            ->with('success', 'User created successfully!');
    }
}
