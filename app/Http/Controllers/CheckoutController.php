<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alogin;

class CheckoutController extends Controller
{
     public function show()
    {
        return view('user.checkout');
    }

   public function process(Request $request)
{
    $userId = session('user_id');
    if (!$userId) {
        return redirect('/User/login')->with('error', 'Please login first.');
    }

    $user = Alogin::find($userId);
    $cart = session('cart', []);

    // Get book IDs as keys from cart associative array
    $bookIds = array_keys($cart);

    // Attach books to user
    $user->books()->syncWithoutDetaching($bookIds);

    // Clear cart
    session()->forget('cart');

    return redirect()->route('thank.you')->with('success', 'Purchase successful!');
}



    public function thankYou()
    {
        return view('user.thankyou');
    }
}
