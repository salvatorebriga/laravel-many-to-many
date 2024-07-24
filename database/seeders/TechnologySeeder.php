<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['C++', 'Java', 'C#', 'JavaScript', 'Phyton'];

        foreach ($technologies as $technologie) {
            Technology::create(['name' => $technologie]);
        }
    }
}
