<?php

namespace App\Http\Controllers\Categorys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index');
    }
}
