<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //php artisan db:seed --class=PermissionTableSeeder
        //php artisan db:seed --class=CreateUserSeeder

        //$this->call(CreateUserSeeder::class);
        //$this->call(PermissionTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateUserSeeder::class);
        
        
    }
}
