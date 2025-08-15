<?php

namespace App\Http\Controllers;
use App\Models\Alogin;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
{
    // Validate inputs
   
 $emailExists = Alogin::where('email', $request->email)->exists();

    if ($emailExists) {
        // Email already exists, redirect back with error message
        return back()->with('error', 'This email is already registered.');
    }else{
   try {
    Alogin::create([
        'name'     => $request->first_name . ' ' . $request->last_name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
        'type'     => 'USER',
    ]);
        return back()->with('success', 'Registered!');
    } catch (\Exception $e) {
        dd(); // Shows the exact error
         return back()->with('success', $e->getMessage());
    }
}





   
}

public function myBooks(Request $request)
{
    $userId = session('user_id');
    $user = Alogin::find($userId);

    if (!$user) {
        return redirect('/User/login')->with('error', 'Please login first.');
    }

    $books = $user->books; // returns the books the user purchased

    return view('user.mybooks', compact('books'));
}
public function profile()
{
    $userId = session('user_id');

    if (!$userId) {
        return redirect('/User/login')->with('error', 'Please login first.');
    }

    $user = Alogin::withCount('books')->find($userId); // books_count

    return view('user.profile', compact('user'));
}


public function login(Request $request)
{
     $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    $user = Alogin::where('email', $request->email)->first();

    if ($user && \Hash::check($request->password, $user->password)) {
        session([
            'user_id' => $user->id,
            'user_name' => $user->name,
        ]);

        return redirect('/User/dashboard')->with('success', 'Login successful!');
    }

    return back()->with('error', 'Invalid email or password');
}
public function index()
{
    $users = Alogin::all(); // or paginate if needed
    return view('Admin.userlist', compact('users'));
}
public function edit($id)
{
    $user = Alogin::findOrFail($id);
    return view('Admin.useredit', compact('user'));
}
public function update(Request $request, $id)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:alogins,email,' . $id,
    ]);

    $user = Alogin::findOrFail($id);
    $user->update($request->only('first_name', 'last_name', 'email'));

    return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
}
public function destroy($id)
{
    $user = Alogin::findOrFail($id);
    $user->delete();

    return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
}

}
