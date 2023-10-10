<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            "ROOT",
            "GERENTE",
            "ADMINISTRADOR",
            "VENDEDOR"
        ];

        foreach ($roles as $rol) {
            $role = new Role();
            $role->name = $rol;
            $role->save();
        }
    }
}
