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
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->id();
            $table->string('TenNCC');//varchar
            $table->string('DiaChi');
            $table -> string('SDT') -> nullable();
            $table->string('Email')->unique()-> nullable();
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
        Schema::dropIfExists('nhacungcap');
    }
};
