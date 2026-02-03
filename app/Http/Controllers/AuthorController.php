<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthorRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            Author::with('books')->get()
        );
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->validated());

        return response()->json([
            'success' => true,
            'data' => $author
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(
            Author::with('books')->findOrFail($id)
        );
    }

    /*
     * Show the form for editing the specified resource.
     *
     * Update the specified resource in storage.
     */
    public function update(StoreAuthorRequest $request, string $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->validated());

        return response()->json([
            'success' => true,
            'data' => $author
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Author::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Author Deleted Successfully '
        ]);
    }
}
