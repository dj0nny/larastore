<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {

        // dd(Product::find(20)->categories->name);

        return view('shop.index', [
            'products' => Product::latest()->paginate(10),
        ]);
    }

    public function destroy(Product $product)
    {

        $product->delete();

        return redirect('/');
    }

    public function edit(Product $product)
    {
        return view('shop.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validatedProduct = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'category_id' => ['required']
        ]);


        $product->update($validatedProduct);

        return redirect('/');
    }

    public function create()
    {
        return view('shop.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedNewProduct = $request->validate([
            'name' => ['required'],
            'code' => ['required', 'unique:products', 'min:5', 'max:5'],
            'description' => ['required'],
            'price' => ['required'],
            'category_id' => ['required']
        ]);

        // dd($validateNewProduct);

        // $validateNewProduct->create();

        Product::create($validatedNewProduct);

        return redirect('/');
    }
}
