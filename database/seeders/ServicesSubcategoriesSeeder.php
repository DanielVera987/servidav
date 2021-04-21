<?php

namespace Database\Seeders;

use App\Models\ServicesSubcategories;
use Illuminate\Database\Seeder;

class ServicesSubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServicesSubcategories::create([
            'service_id' => 1,
            'subcategory_id' => 1
        ]);

        ServicesSubcategories::create([
            'service_id' => 1,
            'subcategory_id' => 2
        ]);

        ServicesSubcategories::create([
            'service_id' => 1,
            'subcategory_id' => 3
        ]);

        ServicesSubcategories::create([
            'service_id' => 2,
            'subcategory_id' => 1
        ]);

        ServicesSubcategories::create([
            'service_id' => 3,
            'subcategory_id' => 1
        ]);

        ServicesSubcategories::create([
            'service_id' => 3,
            'subcategory_id' => 2
        ]);

        ServicesSubcategories::create([
            'service_id' => 3,
            'subcategory_id' => 3
        ]);
    }
}
