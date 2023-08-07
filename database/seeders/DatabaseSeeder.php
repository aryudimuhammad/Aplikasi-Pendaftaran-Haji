<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

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


            $faker = Faker::create('id_ID');

            for ($i = 0; $i < 15; $i++) {
                DB::table('users')->insert([
                    'name' => $faker->firstNameFemale,
                    'email' => $faker->email,
                    'password' => Hash::make('123'),
                    'role' => 2,
                ]);
            }


            DB::table('pendaftarans')->insert([
                'user_id' => 1,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 2,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 3,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 4,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 5,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '1',
            ]);

            DB::table('pendaftarans')->insert([
                'user_id' => 6,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 7,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 8,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 9,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 10,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '2',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
                'total_pembayaran' => 49800000,
                'persyaratan' => '16.pdf',
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 11,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 12,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 13,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 14,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);
            DB::table('pendaftarans')->insert([
                'user_id' => 15,
                'alamat' => $faker->streetAddress(),
                'telepon' => $faker->phoneNumber(),
                'jk' => 'Perempuan',
                'status' => '3',
                'tahun' => $faker->date(),
                'noporsi' => $faker->unique()->randomNumber(5,true),
            ]);















    }
}
