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
        $books = Book::orderBy('id', 'desc')->where('activate', 0)->get();
        $categories = Category::where('activate', 0)->get();

        $path = "listbook";
        return view('user.listbook')->with(compact('books', 'categories', 'path'));
    }

    public function listBookWithCharacter($character) {
        $books = Book::where('title', 'LIKE', $character . '%')->where('activate', 0)->get();
        $categories = Category::where('activate', 0)->get();

        $path = "listbook";
        return view('user.listbook')->with(compact('books', 'character', 'categories', 'path'));
    }

    public function show(string $id)
    {
        return view('user.listbook');
    }
}
