<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'HoTen' => 'Nguyễn Nam Phi',
            'password' => bcrypt('123456'),
            'Email' => 'admin@gmail.com',
            'SDT' => '1234567890',
            'DiaChi' => 'Phường Minh Khai, Quận Bắc Từ Liêm, TP Hà Nội',
            'LoaiTK' => '1',
            'AnhDaiDien' => '',
            'TrangThai' => '1',
            'Xoa' => '0',
        ]);
    }
}
