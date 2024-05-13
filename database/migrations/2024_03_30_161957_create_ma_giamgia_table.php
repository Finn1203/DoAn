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
        Schema::create('ma_giamgia', function (Blueprint $table) {
            $table->id();
            $table->string('Code');//varchar
            $table->string('SoLuong');
            $table -> integer('ChietKhau');
            $table ->integer('LoaiKM');
            $table ->string('NgayBĐ')-> nullable();
            $table ->string('NgayKT')-> nullable();
            $table -> integer('TrangThai') -> nullable();
            $table -> string('Xoa') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ma_giamgia');
    }
};
