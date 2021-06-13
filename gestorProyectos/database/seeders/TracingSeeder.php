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
        // Metodo Insert
         DB::table('tracings')->insert([           
            'birthdate' => '2021-06-01',
            'description'  => 'Se continua con las nuevas novedades solictadas por proveedor, cambiar logo e interfaz',          
        ]);

        // Metodo Insert
         DB::table('tracings')->insert([           
             'birthdate' => '2021-06-10',
             'description'  => 'Se verifican cambios en el logo e interfaz',          
          ]);

    }
}