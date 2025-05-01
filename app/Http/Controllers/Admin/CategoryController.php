<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index', [
            'categorys' => Category::orderBy('created_at')->paginate(5)
        ]);
    }

    public function getCategories()
    {
        $categories = Category::all(); // ទាញយកទិន្នន័យពីតារាង categories
        return response()->json($categories); // ត្រឡប់ទិន្នន័យជា JSON
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveCategoryRequest $request)
    {
        $category = Category::create($request->validated());

        return redirect()->back()
        ->with('status', 'Category created');
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
        return Category::where('category_id', $request->id)->first();
    }

    public function delete(Request $request)
    {
        return Category::where('category_id', $request->id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $category = new Category();
        parse_str($request->input('data'), $formData);
        $category->name=$formData['name'];
        $category->name_khmer=$formData['name_khmer'];
        $category->description=$formData['description'];
        if(empty($formData['id']) || ($formData['id'] == ""))
            $category->save();
        else{
            $category=Category::find($formData['id']);
            $category->name=$formData['name'];
            $category->name_khmer=$formData['name_khmer'];
            $category->description=$formData['description'];
        }
        $category->update();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        parse_str($request->input('data'), $formData);
        return Category::where('category_id', $formData['id'])->delete();
    }
}
