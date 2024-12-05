<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Validasi data
        $request->validate([
            'product_id' => 'required|integer',
            'product_name' => 'required|string',
            'price' => 'required|integer',
        ]);

        // Simpan data ke database
        Cart::create([
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Produk Berhasil dibeli');
    }
}
