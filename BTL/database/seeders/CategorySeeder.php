<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

use File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/json/category.json");
        $categories = json_decode($json, true);

        foreach ($categories as $category) {
            Category::query()->updateOrCreate([
                'id' => $category['id'],
                'name' => $category['name'],
                'activate' => $category['activate']
            ]);
        }
    }
}
