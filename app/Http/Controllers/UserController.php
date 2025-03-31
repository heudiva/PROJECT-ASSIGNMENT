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
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:users,username',
            'name' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:100|unique:users,email'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
    
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email
        ]);
    
        return response()->json(['success' => 'User created successfully!']);
    }
    

}
