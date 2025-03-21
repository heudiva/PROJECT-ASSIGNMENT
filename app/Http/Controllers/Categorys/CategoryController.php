<?php

namespace App\Http\Controllers\Categorys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\SaveCategoryRequest;
use Illuminate\Support\Facades\Redis;

use function Laravel\Prompts\alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index', [
            'categorys' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        return Category::find($request->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveCategoryRequest $request, Category $category)
    {
        $category->update($request->validate());

        return redirect()->route('category.edit', $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return Category::where('id', $request->id)->delete();
    }
}
