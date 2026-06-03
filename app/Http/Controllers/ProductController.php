<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
     public function index(Request $request)
    {
        $products = Product::when($request->category, fn($q) =>
            $q->where('category', $request->category))
        ->when($request->search, fn($q) =>
            $q->where('name', 'like', '%'.$request->search.'%'))
        ->paginate(12);

        return view('products', compact('products'));
    }
   
    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('product-detail', compact('product'));
}

}
