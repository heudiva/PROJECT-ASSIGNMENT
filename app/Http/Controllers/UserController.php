<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(8); // Paginate for better performance
        return view('users.users', compact('users'));
    }

    public function show()
    {
        return User::orderBy('id', 'desc')->get();
    }

    public function store(Request $request)
    {
        // Parse the incoming data string into an array
        parse_str($request->input('data'), $formData);

        $validator = Validator::make($formData, [
            'username' => 'required|string|max:50|unique:users,username',
            'name' => 'required|nullable|string|max:50',
            'email' => 'nullable|email|max:100|unique:users,email'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        
        $user = new User();
        $user->username = $formData['username'];
        $user->name = $formData['name'];
        $user->email = $formData['email'];
        $user->status = 0;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'User created successfully!',
            'user' => $user
        ], 201);
    }
}
