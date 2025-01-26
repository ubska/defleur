<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    // Visualizza la lista dei prodotti
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Mostra il form per creare un nuovo prodotto
    public function create()
    {
        return view('admin.products.create');
    }

    // Salva un nuovo prodotto nel database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());
        return redirect()->route('admin.products.index');
    }

    // Mostra il form per modificare un prodotto
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // Aggiorna un prodotto nel database
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());
        return redirect()->route('admin.products.index');
    }

    // Elimina un prodotto
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
