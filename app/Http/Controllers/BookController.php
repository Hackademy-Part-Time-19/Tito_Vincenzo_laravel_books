<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated = $request->validated();

        Book::create(['title' => $validated['title'], 'year' => $validated['year'], 'genre' => $validated['genre']])->save();

        return redirect()->back()->with(['success' => 'Libro inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookStoreRequest $request, Book $book)
    {
        $validated = $request->validated();

       Book::updated(['title' => $validated['title'], 'year' => $validated['year'], 'genre' => $validated['genre']]);

        return redirect()->back()->with(['success' => 'Libro modificato con successo']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        
        return redirect()->back()->with(['deleted' => 'Libro eliminato correttamente']);
    }
}
