<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryServices;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(CategoryServices $categoryServices)
    {
        $categories = $categoryServices->index();

        return view('portal.category', compact('categories'));
    }

    public function posts(Category $category)
    {
        $posts = $category->posts()->paginate(10);

        return view('portal.index', compact('posts'));
    }
}
