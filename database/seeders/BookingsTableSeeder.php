<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'student_id' => 1, // ID của sinh viên
                'instructor_id' => 2, // ID của giảng viên
                'start_time' => now(),
                'end_time' => now()->addHours(1),
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
