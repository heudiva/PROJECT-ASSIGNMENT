<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function login(){
        return view('admin.dashboard');
    }
    public function register(){
        return view('admin.dashboard');
    }

    public function main(){
        return view('admin.dashboard.main');
    }

}
