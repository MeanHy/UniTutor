<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            InstructorInfoTableSeeder::class,
            CoursesTableSeeder::class,
            CourseEnrollmentsTableSeeder::class,
            BookingsTableSeeder::class,
            ReviewsTableSeeder::class,
            PaymentsTableSeeder::class,
            WithdrawRequestsTableSeeder::class,
            InstructorAvailabilityTableSeeder::class,
            CategoriesTableSeeder::class,
        ]);
    }
}
