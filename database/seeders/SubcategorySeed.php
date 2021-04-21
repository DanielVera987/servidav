<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'category_id' => 1,
            'name' => 'Albañil' 
        ]);

        Subcategory::create([
            'category_id' => 2,
            'name' => 'Nutriologo' 
        ]);

        Subcategory::create([
            'category_id' => 3,
            'name' => 'Contador' 
        ]);
    }
}
