<?php

namespace Database\Seeders;

use App\Models\Livre;
use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupération des catégories pour les relations
        $laravel = Categorie::where('nom', 'Laravel')->first();
        $php = Categorie::where('nom', 'PHP')->first();
        $database = Categorie::where('nom', 'Base de Données')->first();
        $frontend = Categorie::where('nom', 'Frontend')->first();
        $devops = Categorie::where('nom', 'DevOps')->first();
        $architecture = Categorie::where('nom', 'Architecture')->first();

        $livres = [
            [
                'titre' => 'Laravel pour Débutants',
                'auteur' => 'John Smith',
                'annee' => 2024,
                'nb_pages' => 320,
                'isbn' => '978-2-1234-5678-9',
                'resume' => 'Guide complet pour apprendre Laravel étape par étape. Ce livre couvre tous les aspects fondamentaux du framework PHP le plus populaire.',
                'couverture' => 'laravel.jpg',
                'disponible' => true,
                'categorie_id' => $laravel?->id,
            ],
            [
                'titre' => 'Docker en Pratique',
                'auteur' => 'Marie Dubois',
                'annee' => 2023,
                'nb_pages' => 280,
                'isbn' => '978-2-1234-5679-6',
                'resume' => 'Maîtriser la containerisation avec Docker. Apprenez à créer, déployer et gérer des applications containerisées.',
                'couverture' => 'docker.jpg',
                'disponible' => true,
                'categorie_id' => $devops?->id,
            ],
            [
                'titre' => 'MVC Expliqué Simplement',
                'auteur' => 'Pierre Martin',
                'annee' => 2024,
                'nb_pages' => 195,
                'isbn' => '978-2-1234-5680-2',
                'resume' => 'Comprendre l\'architecture MVC avec des exemples concrets. Pattern architectural incontournable du développement moderne.',
                'couverture' => 'mvc.jpg',
                'disponible' => false,
                'categorie_id' => $architecture?->id,
            ],
            [
                'titre' => 'PHP 8 - Les Nouveautés',
                'auteur' => 'Lucas Bernard',
                'annee' => 2024,
                'nb_pages' => 245,
                'isbn' => '978-2-1234-5682-6',
                'resume' => 'Découvrez toutes les nouveautés de PHP 8 : types union, attributs, match expression et bien plus.',
                'couverture' => 'php8.jpg',
                'disponible' => true,
                'categorie_id' => $php?->id,
            ],
            [
                'titre' => 'SQLite pour les Applications Modernes',
                'auteur' => 'Sophie Moreau',
                'annee' => 2023,
                'nb_pages' => 350,
                'isbn' => '978-2-1234-5681-9',
                'resume' => 'Guide complet de SQLite pour le développement d\'applications. Performance, sécurité et bonnes pratiques.',
                'couverture' => 'sqlite.jpg',
                'disponible' => true,
                'categorie_id' => $database?->id,
            ],
            [
                'titre' => 'Bootstrap 5 et CSS Moderne',
                'auteur' => 'Emma Wilson',
                'annee' => 2024,
                'nb_pages' => 290,
                'isbn' => '978-2-1234-5683-3',
                'resume' => 'Créer des interfaces modernes avec Bootstrap 5. Composants, grille responsive et personnalisation.',
                'couverture' => 'bootstrap5.jpg',
                'disponible' => true,
                'categorie_id' => $frontend?->id,
            ]
        ];

        foreach ($livres as $livre) {
            Livre::create($livre);
        }
    }
}
