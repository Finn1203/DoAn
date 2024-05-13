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
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->id();
            $table->string('TenCTKM');//varchar
            $table->date('ThoiGianBD');
            $table -> date('ThoiGianKT');
            $table->float('ChietKhau');
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
        Schema::dropIfExists('khuyenmai');
    }
};