<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return view('admin.supplier.suppliers',[
            'suppliers' => Supplier::all()
        ]);
    }

    public function store(StoreSupplierRequest $request)
    {
        
        $suppliers = Supplier::create($request->validated());

        return redirect()->back()
        ->with('status', 'Supplier created');
    }

    public function edit(Request $request){
        $supplier = Supplier::where('supplier_id', $request->id)->first();
        return response()->json($supplier);
    }
    
}
