<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Models\Author;
use App\Models\Book;
use App\Models\Order;
use App\Models\Tree;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/trees', function(){
    return Tree::all();
});

Route::get('orders', [OrderController::class, 'index']);
Route::get('order.index', [OrderController::class, 'index']);

// Route::get('/orders/{order}', function(Order $order){
//     return $order->load('client', 'book.authors');
// });
Route::get('/orders.{order}', [OrderController::class, 'show']);

Route::resource('authors', AuthorController::class);

//Route::get('books', [BookController::class, 'index']);

Route::resource('books', BookController::class);

// Route::get('clients', [ClientController::class, 'index']);

Route::resource('clients', ClientController::class);



