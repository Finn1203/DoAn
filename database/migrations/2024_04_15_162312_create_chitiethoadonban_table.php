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
        Schema::create('chitiethoadonban', function (Blueprint $table) {
            $table->id();
            $table->integer('IdSach');//varchar
            $table->integer('IdHoaDB');
            $table -> integer('SoLuong');
            $table ->integer('GiaBan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiethoadonban');
    }
};
