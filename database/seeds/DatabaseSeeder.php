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
        // $this->call(UsersTableSeeder::class);
        App\Roles::create([
            'Role_Name'=>'Admin'
        ]);
        App\User::create([
            'name'=>'Juan José Chavez Nicoya',
            'Cod_Role'=>1,
            'email'=>'juan.chavezn1990@gmail.com',
            'password'=>bcrypt('abc123.')
        ]);
    }
}
