<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankCardsTable extends Migration
{
    public function up()
    {
        Schema::create('bank_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('users')->onDelete('cascade'); // Khóa ngoại liên kết với bảng users (giảng viên)
            $table->string('card_number')->unique(); // Số thẻ ngân hàng
            $table->string('card_holder'); // Tên chủ thẻ
            $table->date('expiry_date'); // Ngày hết hạn
            $table->string('cvv'); // Mã CVV
            $table->timestamps(); // created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank_cards');
    }
}
