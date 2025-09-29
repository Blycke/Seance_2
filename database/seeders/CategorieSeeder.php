<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nom' => 'Laravel'],
            ['nom' => 'PHP'],
            ['nom' => 'Base de Données'],
            ['nom' => 'Frontend'],
            ['nom' => 'DevOps'],
            ['nom' => 'Architecture'],
        ];
        foreach ($categories as $cat) {
            Categorie::create($cat);
        }
    }
}
