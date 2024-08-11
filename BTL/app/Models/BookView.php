<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookView extends Model
{
    use HasFactory;

    protected $fillable = ['userID', 'bookID', 'chapterID', 'viewed_at'];

    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $table = 'BookView';

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
