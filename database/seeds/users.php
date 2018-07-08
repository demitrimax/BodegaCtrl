<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Moises Aguilar',
            'email' => 'armandoaguilar1@yahoo.com',
            'rol'=>'admin',
            'password' => bcrypt('mexico11'),
        ]);
    }
}
