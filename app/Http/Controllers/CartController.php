<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class CartController extends Controller
{
   public function addToCart($id, Request $request)
    {
        $book = Book::findOrFail($id);
        $cart = session()->get('cart', []);

        $cart[$id] = [
            'title' => $book->title,
            'price' => $book->price,
            'cover_image' => $book->cover_image,
        ];

        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Book added to cart!');
    }

    public function showCart()
    {
        $cart = session('cart', []);
        $taxRate = 0.13;

        $subtotal = collect($cart)->sum('price');
        $tax = $subtotal * $taxRate;
        $total = $subtotal + $tax;

        return view('user.cart', compact('cart', 'subtotal', 'tax', 'total'));
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Item removed.');
    }
}
