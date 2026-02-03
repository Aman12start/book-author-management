<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Book::with('author')->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());

        return response()->json([
            'success' => true,
            'data' => $book
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(
            Book::with('author')->findOrFail($id)
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBookRequest $request, string $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->validated());

        return response()->json([
            'success' => true,
            'data' => $book
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Book deleted successfully'
        ]);
    }
}
