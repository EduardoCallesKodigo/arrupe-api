<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return $books;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $book = new Book();
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->date_pub = $request->date_pub;
        $book->save();
        return $book;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book = Book::find($id);
        return $book;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book = Book::findOrFail($request->id);
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->date_pub = $request->date_pub;
        $book->save();
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book = Book::destroy($id);
        return $book;
    }
}
