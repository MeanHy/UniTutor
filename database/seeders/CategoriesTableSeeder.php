<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Lập trình',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thiết kế',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
