<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Base\Controller;
use App\Models\Chapter;
use App\Models\BookView;
use Illuminate\Support\Facades\Auth;
class ChuongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $bookID, string $id)
    {
        $userID = Auth::check() ? Auth::user()->id : "1";
        $chapter = Chapter::find($id);

        BookView::create([
            'userID' => $userID,
            'bookID' => $bookID,
            'chapterID' => $id,
            'viewed_at' => now(),
        ]);

        return view('user.chapter')->with((compact('chapter')));
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
