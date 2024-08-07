<?php

namespace Database\Seeders;
use App\Models\Chapter;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use File;
class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/json/chapter.json");
        $chapters = json_decode($json, true);

        foreach ($chapters as $chapter) {
            Chapter::query()->updateOrCreate([
                'bookID' => $chapter['bookID'],
                'order' => $chapter['order'],
                'title' => $chapter['title'],
                'content' => $chapter['content'],
            ]);
        }
    }
}
