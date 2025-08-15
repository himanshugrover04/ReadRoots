<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/User/registration', function () {
    return view('User.Userregistration');
})->name('register');

Route::get('/User/login', [ProductController::class, 'showlogin'])->name('login');

Route::get('/Admin', function () {
    return view('Admin.admin');
});
Route::get('/Admin/admin', function () {
    return view('Admin.admin');
})->name('Adminlogin');
Route::get('/Admin/create', function () {
    return view('Admin.create');
});
Route::post('/Admin/adminlogin', [AdminController::class, 'adminLogi']);

Route::prefix('Admin')->group(function () {

    
});
Route::get('Admin/dashboard', function () {
    return view('Admin.dashboard');
});
Route::post('/User/register', [UserController::class, 'register']);
Route::post('/User/login', [UserController::class, 'login']);
Route::get('/User/dashboard', function () {
    return view('User.Homepage');
})->name('userhomepage');

Route::get('/books/{id}', [ProductController::class, 'DetailBook'])->name('books.show');


 Route::get('/products', [ProductController::class, 'index'])->name('books');

Route::middleware(['check.user.login'])->group(function () {
   
    Route::post('/books/purchase/{id}', [ProductController::class, 'purchase'])->name('books.purchase');
});

Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');


Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/thank-you', [CheckoutController::class, 'thankYou'])->name('thank.you');
Route::get('/my-books', [UserController::class, 'myBooks'])->name('my.books');
Route::get('/read-book/{id}', [ProductController::class, 'readBook'])->name('book.read');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/Admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/Admin/booklist', [AdminController::class, 'booklist'])->name('admin.booklist');
Route::get('/Admin/books/{id}/edit', [AdminController::class, 'edit'])->name('admin.books.edit');
    Route::put('/Admin/books/{id}', [AdminController::class, 'update'])->name('admin.books.update');
    Route::delete('/Admin/books/{id}', [AdminController::class, 'destroy'])->name('admin.books.destroy');
Route::post('/admin/books', [AdminController::class, 'store'])->name('admin.books.store');





Route::get('Admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/Admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/Admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/Admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
