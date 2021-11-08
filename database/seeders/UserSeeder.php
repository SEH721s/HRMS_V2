<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Hubert Mouton",
            'email' =>"h@gmail.com",
            'role' => 1,
            'password' => "123456789",
        ]);
        DB::table('users')->insert([
            'name' => "Selma Auala",
            'email' =>"s@gmail.com",
            'role' => 0,
            'password' => "123456789",
        ]);
    }
}
