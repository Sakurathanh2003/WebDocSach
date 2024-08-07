<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\AdminController;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\Chapter;
use Carbon\Carbon;

class DashboardController extends AdminController
{
    public function index()
    {
        $userdata = $this->getUserData();
        $bookdata = $this->getBookData();
        $categorydata = $this->getCategoryData();
        $chapterdata = $this->getChapterData();
        $title = "Dashboard";
        $isDashboard = true;
        return view('admin.home')->with(compact('title', 'userdata', 'bookdata', 'categorydata', 'isDashboard', 'chapterdata'));
    }

    function getChapterData() {
        $chapters = Chapter::all();
        return $chapters;
    }

    function getUserData() {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        // Xác định thời gian của tuần trước
        $startOfLastWeek = $startOfWeek->copy()->subWeek();
        $endOfLastWeek = $endOfWeek->copy()->subWeek();

        // Tổng số lượng người dùng
        $users = User::all();

        // Đếm số lượng người đăng ký trong tuần này
        $weeklyRegistrations = User::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count();

        // Đếm số lượng người đăng ký trong tuần trước
        $registrationsLastWeek = User::whereBetween('created_at', [$startOfLastWeek, $endOfLastWeek])->count();

        // Tính sự thay đổi
        $change = $weeklyRegistrations - $registrationsLastWeek;

        // Tính phần trăm thay đổi
        $percentageChange = $registrationsLastWeek > 0 
            ? (($weeklyRegistrations - $registrationsLastWeek) / $registrationsLastWeek) * 100 
            : ($weeklyRegistrations > 0 ? 100 : 0);

        return array('number' => $weeklyRegistrations, 'change' => $percentageChange, 'users' => $users);
    }

    function getBookData() {
        $books = Book::all();
        return array('books' => $books);
    }

    function getCategoryData() {
        $categories = Category::orderBy('id', 'desc')->take(5)->get();
        return array('categories' => $categories);
    }
}

