<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use app\Models\Category;
use app\Http\Controllers\Categorys;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', [
            'products' => Product::all()
        ]);
    }

// --------------- Create Category -----------------------
    public function create()
    {
        $categories = Category::all();  // យកទិន្នន័យ Categories
        return view('product.create', compact('categories'));  // បញ្ជូនទៅ View
    }

    public function getCategories()
    {
        $categories = Category::all(); // ទាញយកទិន្នន័យពីតារាង categories
        return response()->json($categories); // ត្រឡប់ទិន្នន័យជា JSON
    }

    // ------------------ Store Product -----------------------
    public function store(Request $request)
    {
        // 1. ផ្ទៀងផ្ទាត់ទិន្នន័យ
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'name_khmer' => 'required|string|max:255',
            'barcode' => 'nullable|string|max:255|unique:products',
            'category_id' => 'required|exists:categories,id',
            'qty_on_hand' => 'required|integer|min:0',
            'qty_alert' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'stocktype' => 'required|in:Cut Stock,Not Cut Stock',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // 2. រក្សាទុករូបភាព (បើមាន)
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // 3. បង្កើតផលិតផល
        $product = Product::create($validated);

        // 4. តបទិន្នន័យទៅជា JSON
        return response()->json([
            'message' => 'Product Create Successufully!',
            'product' => $product
        ], 201);
    }

// ------------------------------------- Disply Product -------------------
    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id);
        return response()->json($product);
    }

// --------------------------------------- Edit Product --------------------------------
    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

// ---------------------------------------- Update Product -------------------------
    public function update(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'product_id' => 'required|exists:products,product_id', // Check product exists in the DB
            'name' => 'required|string|max:255',
            'name_khmer' => 'required|string|max:255',
            'barcode' => 'nullable|string|max:100',
            'category_id' => 'required|integer|exists:categories,id',
            'qty_on_hand' => 'required|integer|min:0',
            'qty_alert' => 'required|integer|min:0',
            'stocktype' => 'required|in:Cut Stock,Not Cut Stock',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Optional image upload, max size 2MB
        ]);

        // Find the product by its ID
        $product = Product::findOrFail($validated['product_id']);

        // Check if the user uploaded a new image
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Store the new image and update the validated array
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        // Update the product with validated data
        $product->update($validated);

        // Return a success response with product data
        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product
        ]);
    }


// ------------------------------- Remove Product -------------------------
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete image from storage if exists
        $imagePath = $product->image;

        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
            Log::info("Image deleted: {$imagePath}");
        } else {
            Log::warning("Image not found or already deleted: {$imagePath}");
        }

        // Delete product record from database
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully.'
        ]);
    }

    // ----------------------------------------------  Delete More Product --------------
    public function deleteMultiple(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:products,product_id'
        ]);

        try {
            DB::transaction(function () use ($request) {
                // លុបរូបភាពជាមុន (បើមាន)
                $products = Product::whereIn('product_id', $request->ids)->get();
                foreach ($products as $product) {
                    Storage::delete($product->image);
                }

                // លុបពី Database
                Product::whereIn('product_id', $request->ids)->delete();
            });

            return response()->json([
                'success' => true,
                'message' => 'បានលុបធាតុដែលបានជ្រើសដោយជោគជ័យ!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'កំហុស៖ ' . $e->getMessage()
            ], 500);
        }
    }
}
