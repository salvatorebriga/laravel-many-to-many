<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        // Assicurati che ci siano categorie e tecnologie
        $categories = Category::all();
        $technologies = Technology::all();

        if ($categories->isEmpty()) {
            Log::warning('Nessuna categoria trovata. Assicurati che ci siano categorie nel database.');
            return;
        }

        if ($technologies->isEmpty()) {
            Log::warning('Nessuna tecnologia trovata. Assicurati che ci siano tecnologie nel database.');
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

        // Assegna tecnologie casuali ai progetti
        $projects = Project::all();
        foreach ($projects as $project) {
            $project->technologies()->attach(
                $technologies->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
