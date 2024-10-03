<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankCardsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bank_cards')->insert([
            [
                'instructor_id' => 1, // ID của giảng viên
                'card_number' => '1234 5678 9012 3456',
                'card_holder' => 'Nguyễn Văn A',
                'expiry_date' => '2025-12-31',
                'cvv' => '123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'instructor_id' => 2, // ID của giảng viên
                'card_number' => '2345 6789 0123 4567',
                'card_holder' => 'Trần Thị B',
                'expiry_date' => '2024-06-30',
                'cvv' => '456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm nhiều bản ghi khác nếu cần
        ]);
    }
}
