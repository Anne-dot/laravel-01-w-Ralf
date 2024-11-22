<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TreeController;
use App\Models\Author;
use App\Models\Book;
use App\Models\Order;
use App\Models\Tree;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/trees', function(){
//     return Tree::all();
// })->name('treesJson');

// Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

// Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

Route::resource('authors', AuthorController::class);

Route::resource('books', BookController::class);

Route::resource('clients', ClientController::class);

Route::resource('trees', TreeController::class);

Route::resource('orders', OrderController::class);



