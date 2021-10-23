<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'MT-Codes',
            'email' => 'mt@mt-codes.com',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
        ]);
    }
}
