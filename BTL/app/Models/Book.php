<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'title', 'author', 'year', 'categoryID', 'description', 'image', 'activate'
    ];
    protected $primaryKey = 'id';
    protected $table = 'Book';

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function views()
    {
        return $this->hasMany(BookView::class, 'bookID');
    }
}
