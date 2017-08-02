<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryCreateRequest;
use App\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        Category::create([
            'title' => request()->title,
            'name' => str_slug(request()->title),
            'body' => request()->body
        ]);

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryCreateRequest $request, $id)
    {
        $category = Category::find($id);
        $category->title = request()->title;
        $category->name = str_slug(request()->title);
        $category->body = request()->body;
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->route('admin.categories.index'); 
    }
}
