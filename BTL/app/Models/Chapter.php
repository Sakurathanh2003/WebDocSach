<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'bookID', 'order', 'title', 'content'
    ];
    protected $primaryKey = 'id';
    protected $table = 'Chapter';

    public function book()
    {
        return $this->belongsTo(Book::class, 'bookID', 'id');
    }

    public function nextChapter() {
        $nextChapter = Chapter::where('bookID', $this->bookID)
                           ->where('order', '>', $this->order)
                           ->orderBy('order', 'asc')
                           ->first();

        return $nextChapter ?: null; 
    }

    public function previousChapter()
    {
        $previousChapter = Chapter::where('bookID', $this->bookID)
                               ->where('order', '<', $this->order)
                               ->orderBy('order', 'desc')
                               ->first();

        return $previousChapter ?: null;
    }
}
