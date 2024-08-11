<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Category;

class DanhMucController
{
    /**
     * Display a listing of the resource.
     */
    public function filter($id, $character) {
        $currentCategory = Category::find($id);
        $categories = Category::all();

        $books = $currentCategory->books()->where('title', 'LIKE', $character . '%')->get();
        $path = "category/".$id;
        return view('user.listbook')->with(compact('books', 'currentCategory', 'categories', 'path', 'character'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $currentCategory = Category::find($id);
        $categories = Category::all();

        $books = $currentCategory->books()->get();
        $path = "category/".$id;
        return view('user.listbook')->with(compact('books', 'currentCategory', 'categories', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
