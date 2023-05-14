<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleEmpr = Role::create(['name' => 'Empr']);
        $roleCand = Role::create(['name' => 'Cand']);

        /*Cal donar permisos a cadascuna de les pàgines web*/
        /*Faltaria 1. saber si al no donar permis qualsevol pot entrar 2.pagines de administrador 3. L'autenticació de emp i de cand*/

        //Permission::create(['name' => 'Admin.xxx.xxx'])->assignRole('Admin');

        Permission::create(['name' => 'emp.landing'])->syncRoles(['Admin', 'Empr']);
        Permission::create(['name' => 'emp.perfil'])->syncRoles(['Admin', 'Empr']);
        Permission::create(['name' => 'emp.gestio'])->syncRoles(['Admin', 'Empr']);
        Permission::create(['name' => 'emp.publi'])->syncRoles(['Admin', 'Empr']);


        Permission::create(['name' => 'Cand.landing'])->syncRoles(['Admin', 'Cand']);
        Permission::create(['name' => 'Cand.cv'])->syncRoles(['Admin', 'Cand']);
        Permission::create(['name' => 'Cand.llista'])->syncRoles(['Admin', 'Cand']);
        Permission::create(['name' => 'Cand.ofertes'])->syncRoles(['Admin', 'Cand']);

    }
}
