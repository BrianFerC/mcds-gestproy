<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Project_user;

class Project_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // Metodo Insert
         DB::table('projects_users')->insert([           
            'user_id'     => 1,
            'project_id' => 1            
        ]);

    // Metodo Insert
    DB::table('projects_users')->insert([           
        'user_id'     => 2,
        'project_id' => 2            
    ]);
    }
}
