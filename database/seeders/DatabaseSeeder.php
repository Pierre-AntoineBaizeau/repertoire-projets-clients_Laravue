<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\Projets;
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
        Client::factory(10)->create();
        Projets::factory(10)->create();
    }
}
