<?php

namespace App\Http\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryServices
{
    public function index(): Collection
    {
        $categories = Category::select('id', 'name')->get();

        return $categories;
    }
}
