<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvkSanPham_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvkSanPham') -> insert([
            'nvkMaSP' => "A01",
            'nvkTenSP' => "Asus Rog Phone 6 256GB",
            'nvkHinhAnh' =>"img/asus-rog-phone-6-12gb-256gb_2_1_2_3_2.webp",
            'nvkSoLuong' => 150 ,
            'nvkDonGia' =>214900,
            'nvkMaLoai' => 1,
            'nvkTrangThai' =>0
        ]);
        DB::table('nvkSanPham') -> insert([
            'nvkMaSP' => "N02",
            'nvkTenSP' => "Nubia Red Magic 9 PRO",
            'nvkHinhAnh' =>"img/dien-thoai-nubia-red-magic-9-pro_1_1.webp",
            'nvkSoLuong' => 120,
            'nvkDonGia' =>939000,
            'nvkMaLoai' => 1,
            'nvkTrangThai' =>0
        ]);
        DB::table('nvkSanPham') -> insert([
            'nvkMaSP' => "S03",
            'nvkTenSP' => "Samsung Galaxy Z Fold 6",
            'nvkHinhAnh' =>"img/dsamsung-galaxy-z-fold-6-xanh_5_.webp",
            'nvkSoLuong' => 165,
            'nvkDonGia' => 419900,
            'nvkMaLoai' => 1,
            'nvkTrangThai' =>0
        ]);
        DB::table('nvkSanPham') -> insert([
            'nvkMaSP' => "X04",
            'nvkTenSP' => "Xiaomi 14 Ultra",
            'nvkHinhAnh' =>"img/xiaomi-14-ultra_3.webp",
            'nvkSoLuong' => 220,
            'nvkDonGia' => 240900,
            'nvkMaLoai' => 1,
            'nvkTrangThai' =>0
        ]);
        DB::table('nvkSanPham') -> insert([
            'nvkMaSP' => "HP01",
            'nvkTenSP' => "HP OMEN 14",
            'nvkHinhAnh' =>"img/hp-omen-14-fb0135tx-ultra-7-ay8v1pa-thumb-638683225582764621-600x600.webp",
            'nvkSoLuong' => 110,
            'nvkDonGia' => 657900,
            'nvkMaLoai' => 2,
            'nvkTrangThai' =>0
        ]);
        DB::table('nvkSanPham') -> insert([
            'nvkMaSP' => "L02",
            'nvkTenSP' => "Lennovo Legion PRO 7",
            'nvkHinhAnh' =>"img/hp-omen-14-fb0135tx-ultra-7-ay8v1pa-thumb-638683225582764621-600x600.webp",
            'nvkSoLuong' => 98,
            'nvkDonGia' => 106990,
            'nvkMaLoai' => 2,
            'nvkTrangThai' =>0
        ]);
        
        
        
    }
}
