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
        dd($request->input());
    $validator = Validator::make($request->all(), [
        'username' => 'required|string|max:50|unique:users,username',
        'name' => 'nullable|string|max:50',
        'email' => 'nullable|email|unique:users,email|max:100'
    ]);

    // If validation fails, return the errors in JSON
    if ($validator->fails()) {
        return response()->json([
            'error' => $validator->errors()->all()
        ]);
    }

    // Create the user with validated data
    $user = User::create([
        'username' => $request->username,  // Use 'username' instead of 'title'
        'name' => $request->name,          // Use 'name'
        'email' => $request->email         // Use 'email'
    ]);

    // Return a success response in JSON format
    return response()->json(['success' => 'User created successfully!']);
}

}
