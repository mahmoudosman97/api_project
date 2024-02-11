<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'message' => 'All Petitions',
            'data' =>$authors
        ]);
    }

   

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(Author $author)
    {
        return response()->json([
            'message' => 'All Petitions',
            'data' =>$author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
