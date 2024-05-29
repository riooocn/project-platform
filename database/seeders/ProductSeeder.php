<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'ASICS GEL-1130 SNEAKERS SHOES',
                'brand' => 'Asics',
                'category' => 'Men',
                'color' => 'White',
                'slug' => Str::slug('ASICS GEL-1130 SNEAKERS SHOES'),
                'price' => 1799000,
                'description' => 'High quality sports shoes from Asics.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/6/06-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NEW BALANCE 9060 SNEAKERS SHOES',
                'brand' => 'New Balance',
                'category' => 'Woman',
                'color' => 'Pink',
                'slug' => Str::slug('NEW BALANCE 9060 SNEAKERS SHOES'),
                'price' => 2599000,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/5/05-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NIKE',
                'brand' => 'New ',
                'category' => 'Woman',
                'color' => 'Pink',
                'slug' => Str::slug('NEW BALANCE'),
                'price' => 259900,
                'description' => 'Comfortable running shoes from Nike.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/5/05-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data produk lainnya di sini
        ]);
    }
}
