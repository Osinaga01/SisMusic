<?php


use Illuminate\Database\Seeder;
use App\User;
use App\Perfil;
use App\Estudiante;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Admin', 
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        $user->perfil()->save(new Perfil);
        $user->estudiante()->save(new Estudiante);
        //$dd = Perfil::latest()->first()->id;
        //Perfil::all()->last();
        // $perfil = new Estudiante();
        // $perfil->perfil_id = $dd;
        // $perfil->save();
        //$perfil->save();
        //$perfil()->estudiante()->save(new Estudiante);
        //return [$user,$perfil];
        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
        $role = Role::create(['name' => 'Docente']);
        $role = Role::create(['name' => 'Estudiante']);

    }
}
