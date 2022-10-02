<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index', [
            'products' => Product::latest()->paginate(10),
        ]);
    }

    public function destroy(Product $product)
    {

        $product->delete();

        return redirect('/');
    }
}
