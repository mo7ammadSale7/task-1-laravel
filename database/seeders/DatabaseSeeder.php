<?php

namespace Database\Seeders;

use App\Models\User;
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
        for ($i=0; $i < 5000; $i++) {
            User::factory(200)->create();
        }
    }
}
