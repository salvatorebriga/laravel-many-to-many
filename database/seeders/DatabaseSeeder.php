<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Chiama il seeder delle categorie
        $this->call(CategorySeeder::class);

        // Chiama il seeder delle tecnologie
        $this->call(TechnologySeeder::class);

        // Chiama il seeder dei progetti
        $this->call(ProjectSeeder::class);
    }
}
