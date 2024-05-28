<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_variants')->insert([
            [
                'shoe_id' => 1, // Pastikan shoe_id ini sudah ada di tabel 'products'
                'size' => '40',
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 1, // Pastikan shoe_id ini sudah ada di tabel 'products'
                'size' => '41',
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 2, // Pastikan shoe_id ini sudah ada di tabel 'products'
                'size' => '42',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data varian produk lainnya di sini
        ]);
    }
}
