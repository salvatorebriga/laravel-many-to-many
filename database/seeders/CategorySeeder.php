<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Full-Stack', 'Front-End', 'Back-End', 'Compiled', 'Assembly'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
