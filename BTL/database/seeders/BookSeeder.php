<?php

namespace Database\Seeders;
use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use File;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/json/book.json");
        $books = json_decode($json, true);

        foreach ($books as $book) {
            Book::query()->updateOrCreate([
                'id' => $book['id'],
                'title' => $book['title'],
                'author' => $book['author'],
                'year' => $book['year'],
                'categoryID' => $book['categoryID'],
                'description' => $book['description'],
                'activate' => $book['activate'],
                'image' => $book['image'],
            ]);
        }
    }
}
