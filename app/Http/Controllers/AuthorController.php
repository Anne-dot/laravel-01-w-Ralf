<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Author::all(); k6ik korraga
        //return Author::paginate(10); 10 tk lehekylje, andmed

        return view('author.index', [
            'authors' => Author::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Author::create($request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]));

        return redirect()->route('authors.index')->with('message', 'Author added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('author.edit', [
            'author' => $author,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //dd($request, $author);
        $author->update($request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]));

        return redirect()->route('authors.index')->with('message', __('#:id updated!', ['id' =>$author->id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->back()->with('message', __('Author :first_name :last_name deleted', [
            'first_name' => $author->first_name,
            'last_name' => $author->last_name,
        ]));
    }
}
