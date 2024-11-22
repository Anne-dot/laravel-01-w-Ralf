<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
    {
        return view('book.index', [
            'books' => Book::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
 
    public function create()
    {
        // Fetch distinct types from the Book model
        $types = Book::select('type')->distinct()->get(); 

        // $authors = Author::all();
        $authors = Author::orderBy('last_name')->orderBy('first_name')->get();

        // Return the 'book.create' view and pass the $types and $authors variables to it
        return view('book.create', [
            'types' => $types, 
            'authors' => $authors
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create($request->validate([
            'title' => 'required',
            'release_date' => 'required',
            'language' => 'required',
            'price' => 'required',
            'stock_saldo' => 'required',
            'pages' => 'required',
            'type' => 'required',
        ]));

        return redirect()->route('books.index')->with('message', 'Book added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', [
            'book' => $book,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //dd($request, $book);
        $book->update($request->validate([
            'title' => 'required',
            'release_date' => 'required',
            'cover_path' => 'required'
        ]));

        return redirect()->route('books.index')->with('message', __(':title updated!', ['title' =>$book->title]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->back()->with('message', __('Book with title :title deleted from the database', [
            'title' => $book->title
        ]));
    }
}
