<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
            ProductVariantSeeder::class, // Seeder untuk tabel 'product_variants'
            // Tambahkan seeder lain di sini jika diperlukan
        ]);
    }
}
