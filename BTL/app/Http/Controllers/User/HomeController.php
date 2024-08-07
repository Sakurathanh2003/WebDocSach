<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Base\Controller;
use App\Models\Book;
use App\Models\Chapter;


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
        $newchapters = $this->getChapterData();
        return view('user.home')->with(compact('newbooks', 'newchapters'));
    }

    function getBookData() {
        $books = Book::orderBy('id', 'desc')->take(6)->get();
        return array('books' => $books);
    }

    function getChapterData() {
        $chapters = Chapter::orderBy('order', 'desc')->get();
        $latestChapters = [];

        foreach ($chapters as $chapter) {
            // Kiểm tra xem sách của chương này đã được thêm vào mảng chưa
            if (!isset($latestChapters[$chapter['bookID']])) {
                // Nếu chưa, thêm chương này vào mảng
                $latestChapters[$chapter['bookID']] = $chapter;
                continue;
            }
        }

        // Trả về danh sách các chương mới nhất
        return $latestChapters;
    }
}
