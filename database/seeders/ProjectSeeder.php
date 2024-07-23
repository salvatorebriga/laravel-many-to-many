<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            Log::warning('Nessuna categoria trovata. Assicurati che ci siano categorie nel database.');
            return;
        }

        $numberOfProjects = 10;

        $projects = [];

        for ($i = 1; $i <= $numberOfProjects; $i++) {
            $projects[] = [
                'name' => 'Progetto ' . $i,
                'description' => 'Descrizione del Progetto ' . $i,
                'category_id' => $categories->random()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('projects')->insert($projects);
    }
}
