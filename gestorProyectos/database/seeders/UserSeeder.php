<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Metodo Insert

        DB::table('users')->insert([
            'names'  => 'Andres Gomez',
            'email'     => 'anfres@gmail.com',
            'phone'     => 3115268419,
            'birthdate' => '1996-12-20',
            'gender'    => 'Male',
            'address'   => 'Avenida Caracas',
            'role'      => 'Admin',
            'password'  => bcrypt('admin'),
        ]);

        // Metodo ORM

        $user = new User;
        $user->names  = 'Carolina Cruz';
        $user->email     = 'carolina@gmail.com';
        $user->phone     = 3152694875;
        $user->birthdate = '1990-10-21';
        $user->gender    = 'Female';
        $user->address   = 'Avenida Circunvalar';
        $user->role      = 'Leader';
        $user->password  = bcrypt('leader');
        $user->save();
    }
}
