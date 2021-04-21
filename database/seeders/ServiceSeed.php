<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Service::create([
            'user_id' => 2,
            'category_id' => 2,
        ]);

        Service::create([
            'user_id' => 3,
            'category_id' => 3,
        ]);

        Service::create([
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Service::create([
            'user_id' => 2,
            'category_id' => 2,
        ]);

        Service::create([
            'user_id' => 3,
            'category_id' => 3,
        ]);

        Service::create([
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Service::create([
            'user_id' => 2,
            'category_id' => 2,
        ]);

        Service::create([
            'user_id' => 3,
            'category_id' => 3,
        ]);

        Service::create([
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Service::create([
            'user_id' => 2,
            'category_id' => 2,
        ]);

        Service::create([
            'user_id' => 3,
            'category_id' => 3,
        ]);

        Service::create([
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Service::create([
            'user_id' => 2,
            'category_id' => 2,
        ]);

        Service::create([
            'user_id' => 3,
            'category_id' => 3,
        ]);

        
    }
}
