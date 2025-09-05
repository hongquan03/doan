<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table): void{
            $table->id(); // Tạo cột id (kiểu BIGINT, auto increment, primary key)
            $table->string('name')->unique(); // Tạo cột name (kiểu VARCHAR) và bắt buộc giá trị duy nhất (unique)
            $table->timestamps(); // Tạo 2 cột created_at và updated_at (thời gian tạo & cập nhật)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles'); //Nếu bảng roles tồn tại thì nó sẽ bị xóa đi.
    }
};
