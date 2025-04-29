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
// -------------- Display the list of products --------------
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::with('category')->paginate(5),
            'categories' => Category::all(),
            'suppliers' => Supplier::all()
        ]);
    } // End index funcation

// ---------------------- Store Product ----------------------
    public function store(Request $request)
    {
        // Parse the serialized form data into an array
        parse_str($request->input('data'), $formData);

        // Validate the form data
        $validator = Validator::make($formData, [
            'name' => 'required|string',
            'brand' => 'nullable',
            'category' => 'nullable',
            'supplier' => 'nullable',
            'qty-onhand' => 'nullable',
            'qty-alert' => 'nullable',
            'description' => 'nullable',
            'barcode' => 'nullable',
        ]);

        // Return validation errors if any
        if ($validator->failed()) {
            return response()->json(['error' => $validator->errors()]);
        }

        // Create and save the new product
        $pro = new Product();
        $pro->name = $formData['name'];
        $pro->brand = $formData['brand'];
        $pro->category_id = $formData['category'];
        $pro->supplier_id = $formData['supplier'];
        $pro->qty_on_hand = $formData['qty-onhand'];
        $pro->qty_alert = $formData['qty-alert'];
        $pro->description = $formData['description'];
        $pro->barcode = $formData['barcode'];
        $pro->save();

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Product created successfully',
            'product' => $pro
        ], 201); // 201 = Created
    } // End Store Product


// ---------------------- Store Product ----------------------
    public function edit(Request $request)
    {
        $product = Product::where('product_id', $request->id)->first();
        return response()->json($product);
    }






}
