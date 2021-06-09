<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Metodo ORM
        $cat = new Provider;
        $cat->name_provider = 'Sanoha';
        $cat->name_contact =  'Monica Hernandez';
        $cat->save();

        //Metodo ORM
        $cat = new Provider;
        $cat->name_provider = 'Corem';
        $cat->name_contact =  'Fernando Lopez';
        $cat->save();
    }
}
