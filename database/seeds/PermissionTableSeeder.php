<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'ver-admin',
            'ver-cursos-adm',
            'ver-seguridad',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'curso-list',
            'curso-create',
            'curso-edit',
            'curso-delete',
            'temario-list',
            'temario-create',
            'temario-edit',
            'temario-delete',
            'tema-list',
            'tema-create',
            'tema-edit',
            'tema-delete',
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
