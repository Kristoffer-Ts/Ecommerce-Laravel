<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //input admin
        DB::table('users')->insert
        
        ([
            'name' => 'adminruly',
            'email' => 'admin1@gmail.com',
            'username' => 'admin1',
            'password' => Hash::make('admin'),
            'address' => 'jlnramothy',
            'phone_number' => '082393105694',
            'id_role' => '1',
            'shop_name' => 'admin1',
        ]);


        //input user
        DB::table('users')->insert
        ([
            'name' => 'Joko',
            'email' => 'Joko@gmail.com',
            'username' => 'JokoBudi',
            'password' => Hash::make('anjing'),
            'address' => 'jlnbdi',
            'phone_number' => '082393105697',
            'id_role' => '2',
            'shop_name' => 'Jokoshop',
        ]);
    }
}
