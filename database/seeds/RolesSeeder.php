<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Super usuario', 'Administrador', 'Egresado'];
        for ($i = 1; $i <= count($roles); $i++) {
            DB::table('roles')->insert([
                'nombre' => $roles[$i],
            ]);
        }
    }
}
