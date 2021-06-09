<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Provider_project;

class Provider_projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Metodo Insert
        DB::table('providers_projects')->insert([           
            'provider_id'  => 1,
            'project_id' => 1            
        ]);

    // Metodo Insert
    DB::table('providers_projects')->insert([           
        'provider_id'  => 2,
        'project_id' => 2            
    ]);
    }
}
