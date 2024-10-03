<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CourseEnrollmentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('course_enrollments')->insert([
            [
                'student_id' => 1, // ID của sinh viên
                'course_id' => 1, // ID của khóa học
                'enrollment_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
