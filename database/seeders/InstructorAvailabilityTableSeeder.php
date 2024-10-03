<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InstructorAvailabilityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('instructor_availability')->insert([
            [
                'instructor_id' => 2, // ID của giảng viên
                'available_from' => '08:00:00',
                'available_to' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

