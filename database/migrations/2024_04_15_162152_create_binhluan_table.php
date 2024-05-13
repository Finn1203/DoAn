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
        Schema::create('binhluan', function (Blueprint $table) {
            $table->id();
            $table -> integer('IdSach');
            $table ->integer('IdKH');
            $table ->string('HoTen');
            $table ->string('NoiDung');
            $table -> string('Ngay');
            $table -> integer('TrangThai');
            $table ->tinyInteger('Duyet');
            $table -> string('Xoa') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('binhluan');
    }
};
