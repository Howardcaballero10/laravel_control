<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission; //importamos la libreria permisos
use Spatie\Permission\Models\Role; //importamos la libreria role de Spatie

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos los roles 
       $role1 = Role::create(['name' => 'admin']);
       $role2 = Role::create(['name' => 'user']);


       //creamos permisos
       Permission::create(['name' => 'admin.index']);
    }
}
