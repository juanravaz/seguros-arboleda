<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::create(['name' =>'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'payment'=>null,
            'phone'=>123123123,
            'birth'=>'1/1/20',
            'password'=>bcrypt('admin'),
            'avatar'=>'default.png']);


        User::create(['name' =>'technician',
            'email'=>'technician@gmail.com',
            'role'=>'technician',
            'payment'=>null,
            'phone'=>123123123,
            'birth'=>'1/1/20',
            'password'=>bcrypt('tecnician'),
            'avatar'=>'default.png']);

        $this->call(
            CarSeeder::class
        );
    }
}
