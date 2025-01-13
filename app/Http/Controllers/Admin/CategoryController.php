<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('id')->paginate(20);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|unique:categories,name,',
        ]);

        //upload file


        // store database
        Category::create([
            'name' => $request->name
        ]);

        //redirect
        return redirect()
        ->route('admin.categories.index')
        ->with('msg', 'Category added successfully!')
        ->with('type', 'success');
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
    public function edit(Category $category)
    {
        // $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // validation
        $request->validate([
            'name' => 'required|unique:categories,name,',
        ]);

        //upload file


        // store database
        $category->update([
            'name' => $request->name
        ]);

        //redirect
        return redirect()
        ->route('admin.categories.index')
        ->with('msg', 'Category updated successfully!')
        ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);

        //redirect
        return redirect()
        ->route('admin.categories.index')
        ->with('msg', 'Category deleted successfully!')
        ->with('type', 'warning');
}
}
