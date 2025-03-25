<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequrst;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function index(){
        $users = User::paginate(8); // Paginate for better performance
        return view('users.users', compact('users'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:users,username',
            'name' => 'nullable|string|max:50',
            'email' => 'nullable|email|unique:users,email|max:100'
        ]);

        if ($validator->fails()) {
            return response()->json([

                        'error' => $validator->errors()->all()
                    ]);
        }
        User::create([
            'username' => $request->title,
            'body' => $request->body,
        ]);
        return response()->json(['success' => 'Post created successfully.']);


        $user = User::create($validated);

        return redirect()->route('user.index', $user)
            ->with('success', 'User created successfully!');

    }
}
