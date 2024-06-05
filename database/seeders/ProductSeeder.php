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
                'name' => 'ASICS GEL-1130 SNEAKERS',
                'brand' => 'Asics',
                'category' => 'Men',
                'color' => 'White',
                'slug' => Str::slug('ASICS GEL-1130 SNEAKERS'),
                'price' => 1799000,
                'description' => 'Sepatu from Asics yang menggunakan teknologi FlexKnit, sistemm double yang knit dan lentur di bagian depan yang memiliki banyak mobilitas namun tekstru meng-grip kuat di bagian ankle dan telah dilengkapo dengan Autofoam Performance Insole untuk meningkatkan kenyamanan dan durabilitas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/6/06-ASICS-FFSCSASIA-ASI21A256118-White.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NEW BALANCE 9060 SNEAKERS',
                'brand' => 'New Balance',
                'category' => 'Woman',
                'color' => 'Pink',
                'slug' => Str::slug('NEW BALANCE 9060 SNEAKERS'),
                'price' => 2599000,
                'description' => 'New Balance 9060 menggunakan komponen yang sudah dikenal dari model alas kaki sebelumnya namun dibuat kembali dengan menggunakan lensa ekspresif yang lebih modern. Dibuat dengan bahan suede premium dan upper mesh dengan detail logo lidah yang menginspirasi renda berlian pada seri 991.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/5/05-NEW-BALANCE-FFSSBNEWA-NEWU9060FRL-Pink.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SAMBAE SNEAKERS',
                'brand' => 'ADIDAS',
                'category' => 'Woman',
                'color' => 'White',
                'slug' => Str::slug('SAMBAE SNEAKERS'),
                'price' => 2200000,
                'description' => 'Tetap meninggalkan kesan. Setalah sepatu adidas Samba menjadi favorit dalam olahraga, mereka lalu menemukan tempat di antara tren fashion visioner dalam banyak subkultur. Sepatu yang diperbarui ini mengambil inspirasi desain minimalis dari siluet klasik dan memacu lebih jauh lagi dengan aksen samar dan 3-Stripes yang nyaris tidak terlihat. Pakai sepatu ini dan biarkan sejarah terulang kembali, terlihat fresh selalu.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-ADIDAS-FFSSBADI5-ADIID0438-White.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-ADIDAS-FFSSBADI5-ADIID0438-White.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-ADIDAS-FFSSBADI5-ADIID0438-White.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-ADIDAS-FFSSBADI5-ADIID0438-White.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/6/06-ADIDAS-FFSSBADI5-ADIID0438-White.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '2002 SNEAKERS',
                'brand' => 'NEW BALANCE',
                'category' => 'Men',
                'color' => 'Grey',
                'slug' => Str::slug('2002 SNEAKERS'),
                'price' => 2499000,
                'description' => 'Comfortable ',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/1/01-NEW-BALANCE-FFSSBNEWA-NEWM2002RFH-Grey.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NEW-BALANCE-FFSSBNEWA-NEWM2002RFH-Grey.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NEW-BALANCE-FFSSBNEWA-NEWM2002RFH-Grey.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWM2002RFH-Grey.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWM2002RFH-Grey.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AIR JORDAN 1 RETRO HIGH OG BASKETBALL',
                'brand' => 'NIKE',
                'category' => 'Men',
                'color' => 'White',
                'slug' => Str::slug('AIR JORDAN 1 RETRO HIGH OG BASKETBALL'),
                'price' =>2279200,
                'description' => 'Sepatu olahraga pertama Michael Jordan yang terkenal ini merupakan jantung dari budaya sneaker. Versi throwback dari Air Jordan 1 Low ini menangkap tampilan aslinya dengan lapisan kulit, detail yang tajam, dan logo klasik.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NIKE-F34KBNIK5-NIKDZ5485105-White.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/2/02-NIKE-F34KBNIK5-NIKDZ5485105-White.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-NIKE-F34KBNIK5-NIKDZ5485105-White.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/4/04-NIKE-F34KBNIK5-NIKDZ5485105-White.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/5/05-NIKE-F34KBNIK5-NIKDZ5485105-White.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AIR MAX PLUS SNEAKERS',
                'brand' => 'NIKE',
                'category' => 'Men',
                'color' => 'Black',
                'slug' => Str::slug('AIR MAX PLUS SNEAKERS'),
                'price' =>2218300,
                'description' => 'Nike Air Max Plus hadir dengan desain berani yang memikat dan teknologi udara yang memberikan dukungan maksimal ke para pemakainya. Sol yang kokoh dan desain yang mencolok menjadikannya pilihan utama bagi kamu yang suka dengan streetwear looks.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NIKE-FFSSBNIK5-NIKFQ2381001-Black.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NIKE-FFSSBNIK5-NIKFQ2381001-Black.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NIKE-FFSSBNIK5-NIKFQ2381001-Black.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-NIKE-FFSSBNIK5-NIKFQ2381001-Black.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NIKE-FFSSBNIK5-NIKFQ2381001-Black.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AIR MAX 1 SNEAKERS',
                'brand' => 'NIKE',
                'category' => 'Men',
                'color' => 'Sail',
                'slug' => Str::slug('AIR MAX 1 SNEAKERS'),
                'price' =>2199000,
                'description' => 'Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NIKE-FFSSBNIK5-NIKFQ8048133-Brown.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NIKE-FFSSBNIK5-NIKFQ8048133-Brown.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NIKE-FFSSBNIK5-NIKFQ8048133-Brown.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NIKE-FFSSBNIK5-NIKFQ8048133-Brown.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/6/06-NIKE-FFSSBNIK5-NIKFQ8048133-Brown.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '180 PERF SNEAKERS',
                'brand' => 'PUMA',
                'category' => 'Men',
                'color' => 'Alpine Snow',
                'slug' => Str::slug('180 PERF SNEAKERS'),
                'price' =>1019400,
                'description' => 'running',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-PUMA-FFSSEPMAA-PMA394798-02-Beige.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-PUMA-FFSSEPMAA-PMA394798-02-Beige.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-PUMA-FFSSEPMAA-PMA394798-02-Beige.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-PUMA-FFSSEPMAA-PMA394798-02-Beige.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-PUMA-FFSSEPMAA-PMA394798-02-Beige.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AIR FORCE 1 BASKETBALL',
                'brand' => 'NIKE',
                'category' => 'Men',
                'color' => 'Black',
                'slug' => Str::slug('AIR FORCE 1 BASKETBALL'),
                'price' =>2099000,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NIKE-F34KBNIK5-NIKFZ4615001-Black.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NIKE-F34KBNIK5-NIKFZ4615001-Black.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NIKE-F34KBNIK5-NIKFZ4615001-Black.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NIKE-F34KBNIK5-NIKFZ4615001-Black.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-NIKE-F34KBNIK5-NIKFZ4615001-Black.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '610 SNEAKERS',
                'brand' => 'NEW BALANCE',
                'category' => 'Men',
                'color' => 'Green',
                'slug' => Str::slug('610 SNEAKERS'),
                'price' =>1999000,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NEW-BALANCE-FFSSBNEWA-NEWML610TLN-Green.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/2/02-NEW-BALANCE-FFSSBNEWA-NEWML610TLN-Green.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/3/03-NEW-BALANCE-FFSSBNEWA-NEWML610TLN-Green.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWML610TLN-Green.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/6/06-NEW-BALANCE-FFSSBNEWA-NEWML610TLN-Green.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AF1 PLT.AF.ORM BASKETBALL',
                'brand' => 'NIKE',
                'category' => 'Woman',
                'color' => 'White',
                'slug' => Str::slug('AF1 PLT.AF.ORM BASKETBALL'),
                'price' =>1145400,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NIKE-FFSSBNIK5-NIKFJ2986100-White.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NIKE-FFSSBNIK5-NIKFJ2986100-White.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NIKE-FFSSBNIK5-NIKFJ2986100-White.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NIKE-FFSSBNIK5-NIKFJ2986100-White.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-NIKE-FFSSBNIK5-NIKFJ2986100-White.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '574 SNEAKERS',
                'brand' => 'NEW BALANCE',
                'category' => 'Woman',
                'color' => 'Beige',
                'slug' => Str::slug('574 SNEAKERS'),
                'price' =>1599000,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NEW-BALANCE-FFSSBNEWA-NEWWL574FLR-Cream.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NEW-BALANCE-FFSSBNEWA-NEWWL574FLR-Cream.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NEW-BALANCE-FFSSBNEWA-NEWWL574FLR-Cream.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSSBNEWA-NEWWL574FLR-Cream.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-NEW-BALANCE-FFSSBNEWA-NEWWL574FLR-Cream.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '550 SNEAKERS',
                'brand' => 'NEW BALANCE',
                'category' => 'Woman',
                'color' => 'Beige',
                'slug' => Str::slug('550 SNEAKERS'),
                'price' =>1679200,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NEW-BALANCE-FFSTYNEWA-NEWBBW550BT-Beige.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NEW-BALANCE-FFSTYNEWA-NEWBBW550BT-Beige.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NEW-BALANCE-FFSTYNEWA-NEWBBW550BT-Beige.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NEW-BALANCE-FFSTYNEWA-NEWBBW550BT-Beige.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-NEW-BALANCE-FFSTYNEWA-NEWBBW550BT-Beige.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ON CLOUDMONSTER SNEAKERS',
                'brand' => 'ON RUNNING',
                'category' => 'Woman',
                'color' => 'All White',
                'slug' => Str::slug('ON CLOUDMONSTER SNEAKERS'),
                'price' =>3000000,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-ON-RUNNING-F34RUONR5-ONR6198433-White.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-ON-RUNNING-F34RUONR5-ONR6198433-White.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-ON-RUNNING-F34RUONR5-ONR6198433-White.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-ON-RUNNING-F34RUONR5-ONR6198433-White.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-ON-RUNNING-F34RUONR5-ONR6198433-White.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TRANSPORT RUNNING',
                'brand' => 'HOKA',
                'category' => 'Woman',
                'color' => 'Yellow',
                'slug' => Str::slug('TRANSPORT RUNNING'),
                'price' =>2799000,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-HOKA-F34RUHKEA-HKE1123154EE-Cream.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-HOKA-F34RUHKEA-HKE1123154EE-Cream.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-HOKA-F34RUHKEA-HKE1123154EE-Cream.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-HOKA-F34RUHKEA-HKE1123154EE-Cream.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-HOKA-F34RUHKEA-HKE1123154EE-Cream.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DUNK LOW SE BASKETBALL',
                'brand' => 'NIKE',
                'category' => 'Woman',
                'color' => 'Ivory',
                'slug' => Str::slug('DUNK LOW SE BASKETBALL'),
                'price' =>1383200,
                'description' => 'Comfortable running shoes from Adidas.',
                'url' => 'https://www.footlocker.id/media/catalog/product/cache/90a31bdacdbcafcbfc210df8b20fe81f/0/1/01-NIKE-F34KBNIK5-NIKFQ8147104-Ivory.jpg',
                'url_1' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/2/02-NIKE-F34KBNIK5-NIKFQ8147104-Ivory.jpg',
                'url_2' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/3/03-NIKE-F34KBNIK5-NIKFQ8147104-Ivory.jpg',
                'url_3' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/4/04-NIKE-F34KBNIK5-NIKFQ8147104-Ivory.jpg',
                'url_4' => 'https://www.footlocker.id/media/catalog/product/cache/1384ea813c36abc3a773dd6494b9b881/0/5/05-NIKE-F34KBNIK5-NIKFQ8147104-Ivory.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            // Tambahkan data produk lainnya di sini

        ]);
    }
}
