<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WithdrawRequestsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('withdraw_requests')->insert([
            [
                'instructor_id' => 2, // ID của giảng viên
                'amount' => 500000,
                'status' => 'pending',
                'requested_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

