<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Base\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class DanhSachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = Book::orderBy('id', 'desc')->get();
        $categories = Category::all();
        $path = "listbook";
        return view('user.listbook')->with(compact('books', 'categories', 'path'));
    }

    public function listBookWithCharacter(string $character, Request $request) {
        $books = Book::where('title', 'LIKE', $character . '%');
        $categories = Category::all();
        $path = "listbook";
        return view('user.listbook')->with(compact('books', 'character', 'categories', 'path'));
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
        return view('user.listbook');
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
