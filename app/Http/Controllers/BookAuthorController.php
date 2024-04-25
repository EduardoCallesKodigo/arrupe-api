<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bookAuthors = BookAuthor::all();
        return $bookAuthors;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $bookAuthor = new BookAuthor();
        $bookAuthor->book_id = $request->book_id;
        $bookAuthor->author_id = $request->author_id;
        $bookAuthor->save();
        return $bookAuthor;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $bookAuthor = BookAuthor::find($id);
        return $bookAuthor;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $bookAuthor = BookAuthor::findOrFail($request->book_author);
        $bookAuthor->book_id = $request->book_id;
        $bookAuthor->author_id = $request->author_id;
        $bookAuthor->save();
        return $bookAuthor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $bookAuthor = BookAuthor::destroy($id);
        return $bookAuthor;
    }
}
