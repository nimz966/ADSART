<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => "adminadsArt",
            'user_type' => "Admin",
            'password'  => Hash::make('password'),
            'email'    => "adsArt@gmial.com",
            'address'  => "No 23, kalutara",
            'phone_no' => "011 1234567",
        ]);
    }
}
