<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category) {
        // dd($category->products);

        return view('categories.show', [
            'products' => $category->products()->paginate(5),
        ]);

    }

}
