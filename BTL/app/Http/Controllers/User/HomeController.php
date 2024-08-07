<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Base\Controller;
use App\Models\Book;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newbooks = $this->getBookData();
        return view('user.home')->with(compact('newbooks'));
    }

    function getBookData() {
        $books = Book::orderBy('id', 'desc')->get();
        return array('books' => $books);
    }
}
