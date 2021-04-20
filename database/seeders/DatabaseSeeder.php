<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
        \App\Models\Category::factory(1)->create();
        \App\Models\Subcategory::factory(2)->create();
        \App\Models\Service::factory(10)->create();
    }
}
