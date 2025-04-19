<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::with('category')->paginate(5),
            'categories' => Category::all(),
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    // បង្កើត method សម្រាប់ទទួល data ដែលផ្ញើមកជា string
    public function store(Request $request)
    {
        // បំបែក string ទៅជា array
        parse_str($request->input('data'), $formData);

        // ផ្ទៀងផ្ទាត់ទិន្នន័យ
        $validator = Validator::make($formData, [
            'name' => 'required|string',
            'category' => 'nullable',
            'supplier' => 'nullable',
            'qty-onhand' => 'nullable',
            'qty-alert' => 'nullable',
            'description' => 'nullable',
        ]);

        // ប្រសិនបើ error វិញ ចេញ message
        if ($validator->failed()) {
            return response()->json(['error' => $validator->errors()]);
        }

        // បង្កើត object Product ថ្មី
        $pro = new Product();
        $pro->name = $formData['name'];
        $pro->category_id = $formData['category'];
        $pro->supplier_id = $formData['supplier'];
        $pro->qty_on_hand = $formData['qty-onhand'];
        $pro->qty_alert = $formData['qty-alert'];
        $pro->description = $formData['description'];
        $pro->save(); // រក្សាទុកក្នុង database

        // បង្កើតជាមួយ success response
        return response()->json([
            'success' => true,
            'message' => 'Product created successfully',
            'product' => $pro
        ], 201); // 201 = Created
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return Product::find($request->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
