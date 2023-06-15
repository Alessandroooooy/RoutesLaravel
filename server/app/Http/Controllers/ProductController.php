<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showAll()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }

    public function create()
    {
        return view('create-product');
    }

    public function store(Request $request)
    {
        return redirect()->route('products.all');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        return redirect()->route('products.show', $id);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        return redirect()->route('products.all');
    }
}