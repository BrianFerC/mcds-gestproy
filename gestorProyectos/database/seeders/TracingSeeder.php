<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Tracing;

class TracingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Metodo ORM
        $tr = new Tracing;             
        $tr->save();

     // Metodo ORM
     $tr = new Tracing;         
     $tr->save();

    }
}