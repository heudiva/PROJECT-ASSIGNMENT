<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(8); // Paginate for better performance
        return view('users.users', compact('users'));
    }
    
}
