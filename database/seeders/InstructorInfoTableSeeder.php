<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InstructorInfoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('instructor_info')->insert([
            [
                'user_id' => 2, // ID của giảng viên
                'qualification' => 'Thạc sĩ CNTT',
                'experience' => 5,
                'hourly_rate' => 200000,
                'available_from' => '08:00:00',
                'available_to' => '18:00:00',
                'is_approved' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
