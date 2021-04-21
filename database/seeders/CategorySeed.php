<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Hogar',
            'description' => 'Carpintero, Albañil, Pintor...'
        ]);

        Category::create([
            'name' => 'Salud',
            'description' => 'Nutriologo...'
        ]);

        Category::create([
            'name' => 'Empresarial',
            'description' => 'Abogados, Contadores...'
        ]);
    }
}
