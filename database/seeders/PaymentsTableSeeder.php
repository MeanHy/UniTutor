<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payments')->insert([
            [
                'user_id' => 1, // ID của sinh viên
                'amount' => 1500000,
                'payment_type' => 'credit_card',
                'transaction_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

