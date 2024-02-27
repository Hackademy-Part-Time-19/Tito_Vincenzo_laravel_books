<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\BookStoreRequest;

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
        $genres = Genre::all();

        return view('create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $validated = $request->validated();
        $book = Book::create(['user_id' => auth()->user()->id, 'title' => $validated['title'], 'price' => $validated['price']]);
      
        $book->genres()->attach($request->genres);

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

        Book::updated(['user_id ' => auth()->user()->id, 'title' => $validated['title'], 'year' => $validated['year'], 'genre' => $validated['genre']]);

        return redirect()->back()->with(['success' => 'Libro modificato con successo']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->back()->with(['delete' => 'Libro eliminato correttamente']);
    }

    public function userBooks()
    {

        $books = auth()->user()->books;

        return view('user.books', compact('books'));
    }
}
