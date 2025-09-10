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
        Schema::create('role_permissions', function (Blueprint $table): void{
            $table->foreignId('role_id')->constrained()->onDelete('cascade'); //Tạo cột role_id kiểu BIGINT UNSIGNED, khóa ngoại trỏ tới id của bảng roles. onDelete('cascade'): nếu 1 role bị xóa thì dữ liệu liên quan trong bảng này cũng tự động bị xóa.
            $table->foreignId('permission_id')->constrained()->onDelete('cascade');
            $table->timestamps(); // Tạo 2 cột created_at và updated_at (thời gian tạo & cập nhật)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('role_permissions');
    }
};
