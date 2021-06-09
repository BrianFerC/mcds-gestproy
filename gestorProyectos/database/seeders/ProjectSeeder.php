<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
    // Metodo ORM
    $pr = new Project;
    $pr->category_id = 1;
    $pr->tracing_id  = 1; 
    $pr->code        = 0100;
    $pr->name        = "WebSiteSanoha";
    $pr->area        = "Produccion";
    $pr->class        = "Sistema de Informacion";
    $pr->description  = "Framework:Laravel, Servidor: Xampp, Base de datos: phpMyAdmin";
    $pr->state        = "Activo";
    $pr->save();

    // Metodo ORM
    $pr = new Project;
    $pr->category_id = 2;
    $pr->tracing_id  = 2; 
    $pr->code        = 0101;
    $pr->name        = "Corem";
    $pr->area        = "Administrativo";
    $pr->class        = "Sistema de Informacion";
    $pr->description  = "Framework:Bootstrap, Servidor: Xampp, Base de datos: phpMyAdmin";
    $pr->state        = "Activo";
    $pr->save();


    }
}