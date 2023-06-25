<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123'),
            'role' => 2,
        ]);

        DB::table('pendaftarans')->insert([
            'user_id' => 2,
            'alamat' => 'Jl.Cendrawasih No 39',
            'telepon' => '09821675213',
            'jk' => "Laki-Laki",
            'status' => 1,
        ]);















    }
}
