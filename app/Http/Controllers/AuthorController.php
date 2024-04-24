<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $authors = Author::all();
        return $authors;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $author = new Author();
        $author->name = $request->name;
        $author->save();
        return $author;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $author = Author::find($id);
        return $author;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $author = Author::findOrFail($request->id);
        $author->name = $request->name;
        $author->save();
        return $author;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $author = Author::destroy($id);
        return $author;
    }
}
