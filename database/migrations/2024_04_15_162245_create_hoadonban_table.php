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
        Schema::create('hoadonban', function (Blueprint $table) {
            $table->id();
            $table->integer('idKH');//varchar
            $table->date('NgayLap');
            $table -> string('DiaChiGH');
            $table ->string('SDT');
            $table -> integer('TongTien');
            $table ->integer('id_makm');
            $table ->integer('PhuongTTT');
            $table -> integer('TrangThai') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoadonban');
    }
};
