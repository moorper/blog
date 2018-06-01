<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);

        Category::created($request->all());
    }
}
