<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Student 1',
                'roll_no' => 1,
                'address' => 'Kathmandu',
                'contact_no' => '985412565',
                'email' => 'student1@email.com',
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Student 2',
                'roll_no' => 2,
                'address' => 'Patan',
                'contact_no' => '9854156325',
                'email' => 'student2@email.com',
                'active' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
