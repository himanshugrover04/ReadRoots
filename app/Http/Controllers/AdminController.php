<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Alogin;
Use Session;

class AdminController extends Controller
{
     
    

    // Show the edit form
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('Admin.edit', compact('book'));
    }
public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string',
            'price' => 'required|numeric',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pdf_url' => 'nullable|mimes:pdf|max:10000',
            'description' => 'nullable|string',
        ]);

        // Handle file uploads
        $coverPath = null;
        $pdfPath = null;

        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')->store('covers', 'public');
        }

        if ($request->hasFile('pdf_url')) {
            $pdfPath = $request->file('pdf_url')->store('pdfs', 'public');
        }

        // Create book
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'genre' => $request->genre,
            'price' => $request->price,
            'cover_image' => $coverPath ? '/storage/' . $coverPath : null,
            'pdf_url' => $pdfPath ? '/storage/' . $pdfPath : null,
            'description' => $request->description,
        ]);

        return redirect('/Admin/create')->with('success', 'Book added successfully.');
    }
    // Update the book in DB
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'genre' => 'required|string',
        'price' => 'required|numeric',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'pdf_url' => 'nullable|mimes:pdf|max:10000',
        'description' => 'nullable|string',
    ]);

    $book = Book::findOrFail($id);

    // Handle file updates
    if ($request->hasFile('cover_image')) {
        $coverPath = $request->file('cover_image')->store('covers', 'public');
        $book->cover_image = '/storage/' . $coverPath;
    }

    if ($request->hasFile('pdf_url')) {
        $pdfPath = $request->file('pdf_url')->store('pdfs', 'public');
        $book->pdf_url = '/storage/' . $pdfPath;
    }

    // Update other fields
    $book->title = $request->title;
    $book->author = $request->author;
    $book->genre = $request->genre;
    $book->price = $request->price;
    $book->description = $request->description;

    $book->save();

    return redirect()->route('admin.booklist')->with('success', 'Book updated successfully.');
}


    // Delete a book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.booklist')->with('success', 'Book deleted successfully.');
    }
    public function dashboard()
{
    if (session::get('us') == "ADMIN") {
        $Books = Book::count();
        $User = Alogin::count();

        // Genre-wise book count
        $fiction = Book::where('genre', 'Fiction')->count();
        $nonFiction = Book::where('genre', 'Non-fiction')->count();
        $sciFiction = Book::where('genre', 'Sci-fi')->count();

        return view('Admin.dashboard', compact('Books', 'User', 'fiction', 'nonFiction', 'sciFiction'));
    } else {
        return response('Permission Denied', 200);
    }
}

    public function adminLogi(Request $request)
    {
        
        try
        {
            $user = Alogin::where("email", $request->input('email'))->get();
            if ($user[0]->password == $request->input('password')) {
                $request->session()->put('us', $user[0]->type);
                $request->session()->put('user', $user[0]->name);
                if (Session::get('us') == "ADMIN") {
                    
                        return redirect('Admin/dashboard');
                   
                }
            }else{
                return redirect('Admin/admin')->with('Message', 'PASSWORD IS INCORRECT! ');
            } 
        } catch (\Exception $e) {
            return redirect('Admin/admin')->with('Message', 'PASSWORD OR USERNAME IS INCORRECT! ');
        }
    }
     public function booklist(Request $request)
    {
        $query = Book::query();

    // Apply genre filter if selected
    if ($request->has('genre') && $request->genre != 'all') {
        $query->where('genre', $request->genre);
    }

    $books = $query->get(); // or paginate() if preferred
    $genres = Book::select('genre')->distinct()->pluck('genre');
    return view('Admin.booklist', compact('books','genres'));
    }
}
