<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        
        if ($request->has('genre') && $request->genre != 'all') {
            $query->where('genre', $request->genre);
        }

        $books = $query->paginate(9); 

        
        $genres = Book::select('genre')->distinct()->pluck('genre');

        return view('user.product', compact('books', 'genres'));
    }

    public function DetailBook($id)
{
    $book = Book::findOrFail($id);

    return view('user.book_detail', compact('book'));
}


// In ProductController
public function purchase($id, Request $request)
{
    $userId = session('user_id');
    if (!$userId) {
        return redirect('/User/login')->with('error', 'Please login first.');
    }

    // Redirect to CartController's addToCart method:
    return redirect()->action([CartController::class, 'addToCart'], ['id' => $id]);
}



public function showlogin()

{
    return view('user.userlogin'); // This should be your login blade file like resources/views/user/login.blade.php
}
public function readBook($id)
{
    $userId = session('user_id');
    if (!$userId) {
        return redirect('/User/login')->with('error', 'Please login first.');
    }

    $user = \App\Models\Alogin::find($userId);

    // Check if user has purchased the book
    if (!$user->books->contains('id', $id)) {
        return redirect()->route('my.books')->with('error', 'You do not have access to this book.');
    }

    $book = Book::findOrFail($id);

    return view('user.readbook', compact('book'));
}


}
