<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::take(1000)->get();

        return view('products.index', compact('products'));
    }
    public function create()
{
    return view('products.create');
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable'
    ]);

    Product::create($validatedData);

    return redirect('/products')->with('success', 'Product created successfully!');
}
public function compare()
{
    $products = Product::all();

    return view('products.compare', compact('products'));
}
public function processComparison(Request $request)
{
    $validatedData = $request->validate([
        'product1' => 'required|exists:products,id',
        'product2' => 'required|exists:products,id',
    ]);

    $product1 = Product::findOrFail($validatedData['product1']);
    $product2 = Product::findOrFail($validatedData['product2']);

    // Perform the comparison logic as per your requirements

    // Return the comparison results to a view

    // Example code:
    return view('products.comparison_results', compact('product1', 'product2'));
}







}
