<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Metodo Insert
        DB::table('categories')->insert([
            'name'           => 'Corporativa',
            'description'    => 'Los sitios corporativos o institucionales son los sitios oficiales de empresas o instituciones,
             cuyo propósito es ofrecer información general sobre su actividad y otras características importantes como datos de
             contacto, oportunidades laborales, historia, eventos, noticias y mostrar sus productos y servicios.',
            ]);
    
        //Metodo ORM
        $cat = new Category;
        $cat->name           = 'Educativa';
        $cat->description    = 'publican contenidos de diversa índole con los que las personas puedan aprender. Puedes encontrar 
                                desde contenidos gratuitos para niños, hasta contenidos con costo para profesionales.';
        $cat->save();
    
        $cat = new Category;
        $cat->name           = 'Multimedia';
        $cat->description    = 'Transmitir audio y video a través de la web, existen sitios dedicados a publicar videos y canciones 
                                con infinidad de temas y géneros.';
        $cat->save();
    }
}
