<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class positionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'description'=>"Audio Operator"
        ]);
        DB::table('positions')->insert([
            'description'=>"Editor"
        ]);
        DB::table('positions')->insert([
            'description'=>"Production Manager"
        ]);
        DB::table('positions')->insert([
            'description'=>"Cameraman"
        ]);
        DB::table('positions')->insert([
            'description'=>"Engineer"
        ]);
        DB::table('positions')->insert([
            'description'=>"Setup Technician"
        ]);
        DB::table('positions')->insert([
            'description'=>"Camera Assistant"
        ]);
        DB::table('positions')->insert([
            'description'=>"Flow Manager"
        ]);
        DB::table('positions')->insert([
            'description'=>"Slomo Operator"
        ]);
        DB::table('positions')->insert([
            'description'=>"Camera Operator"
        ]);
        DB::table('positions')->insert([
            'description'=>"Graphic Operator"
        ]);
        DB::table('positions')->insert([
            'description'=>"Technical Assistant"
        ]);
        DB::table('positions')->insert([
            'description'=>"Customer Officer"
        ]);
        DB::table('positions')->insert([
            'description'=>"Labor"
        ]);
        DB::table('positions')->insert([
            'description'=>"Technician"
        ]);
        DB::table('positions')->insert([
            'description'=>"Driver"
        ]);
        DB::table('positions')->insert([
            'description'=>"Manager"
        ]);
        DB::table('positions')->insert([
            'description'=>"Vision Operator"
        ]);
        
    }
}
