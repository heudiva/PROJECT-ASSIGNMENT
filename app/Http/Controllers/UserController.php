<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(6); // Paginate for better performance
        return view('admin.users-info.users', compact('users'));
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
            'email' => 'nullable|email|max:100|unique:users,email',
            'usertype' => 'required',
            'status' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $user = new User();
        $user->username = strtolower($formData['username']);
        $user->name =  $formData['name'];
        $user->email = strtolower($formData['email']);
        $user->usertype = isset($formData['usertype']) ? strtolower($formData['usertype']) : null;
        $user->password = Hash::make('Password123'); // Fixing the password hashing
        if(!empty($formData['status']))
            $user->status = $formData['status'];
        else
            $user->status = 0;

        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'User created successfully!',
            'user' => $user
        ], 201);
    }

    public function edit(Request $request)
    {
        return User::find($request->id);
    }

    public function update(Request $request)
    {
        parse_str($request->input('data'), $formData);
        // Find the user if ID is provided, otherwise assume creating a new user
        $user = isset($formData['id']) ? User::find($formData['id']) : new User();

        if ($user === null) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        $validator = Validator::make($formData, [
            'username' => 'required|string|max:50|unique:users,username,' . ($user->id ?? 'NULL'),
            'name' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:100|unique:users,email,' . ($user->id ?? 'NULL'),
            'password' => ['required', 'confirmed'],
            'usertype' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()], 422);
        }

        // Assign values
        $user->username = strtolower($formData['username']);
        $user->name = $formData['name'] ?? null;
        $user->email = isset($formData['email']) ? strtolower($formData['email']) : null;
        $user->usertype = isset($formData['usertype']) ? strtolower($formData['usertype']) : null;
        $user->password = Hash::make($formData['password']); // Fixing the password hashing

        // Set status accordingly
        $user->status = !empty($formData['id']) ? 1 : 0;

        // Save or update user
        $user->save();

        return response()->json([
            'success' => true,
            'message' => isset($formData['id']) ? 'User updated successfully!' : 'User created successfully!',
            'user' => $user
        ], 201);
    }

    public function delete(Request $request)
    {
        return User::find($request->id);
    }

    public function destroy(Request $request)
    {
        parse_str($request->input('data'), $formData);
        return User::where('id', $formData['id'])->delete();
    }

    public function delete_users(Request $request){
        
        $userIds = $request->ids;
    
        if (!$userIds) {
            return response()->json(['message' => 'No users selected!'], 400);
        }

        User::whereIn('id', $userIds)->delete();
        return response()->json(['message' => 'Users deleted successfully!']);
    }
}
