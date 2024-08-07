<?php

namespace Database\Seeders;
use App\Models\Category;

use File;
use Illuminate\Database\Seeder;

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
