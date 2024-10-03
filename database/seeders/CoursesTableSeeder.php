<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            [
                'title' => 'Lập trình web cơ bản',
                'description' => 'Khóa học này giúp bạn hiểu cơ bản về lập trình web',
                'image' => 'item1.jpg',
                'video' => '',
                'instructor_id' => 2, // ID của giảng viên
                'price' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Học Python cho người mới bắt đầu',
                'description' => 'Giới thiệu về ngôn ngữ lập trình Python từ cơ bản đến nâng cao',
                'image' => 'item2.jpg',
                'video' => '',
                'instructor_id' => 2, // ID của giảng viên
                'price' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
