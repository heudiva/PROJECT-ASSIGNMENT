<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return view('admin.supplier.suppliers',[
            'suppliers' => Supplier::all()
        ]);
    }
}
