<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ProjectSeeder::class,
            //TracingSeeder::class,                     
            Project_userSeeder::class,
            ProviderSeeder::class,
            Provider_projectSeeder::class,
            
        ]);

         \App\Models\User::factory(10)->create();
    }
}
