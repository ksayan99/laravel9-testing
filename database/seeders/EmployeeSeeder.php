<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for( $i=1; $i<=50; $i++ )
        // {
            DB::table('employees')->insert([
                'email' => Str::lower(Str::random(8)).'@gmail.com',
                'name' => Str::random(8).' '.Str::random(12),
                'mobile' => rand(6987653241,9876543210),
                'password' => md5('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        // }
    }
}
