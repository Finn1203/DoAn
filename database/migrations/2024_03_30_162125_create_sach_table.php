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
        Schema::create('sach', function (Blueprint $table) {
            $table->id();
            $table->string('TenSach');//varchar
            $table->string('AnhSach');
            $table -> integer('NhaXuatBan');
            $table ->integer('DichGia');
            $table -> integer('idNCC');
            $table ->string('LoaiBia');
            $table ->integer('SoTrang');
            $table -> integer('KichThuoc');
            $table ->integer('NamXB');
            $table -> integer('GiaTien');
            $table ->string('MoTa');
            $table ->integer('idKM');
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
        Schema::dropIfExists('sach');
    }
};
