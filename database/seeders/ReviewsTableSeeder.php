<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'student_id' => 1, // ID của sinh viên
                'instructor_id' => 2, // ID của giảng viên
                'rating' => 5,
                'comment' => 'Khóa học rất hữu ích, giảng viên nhiệt tình!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

