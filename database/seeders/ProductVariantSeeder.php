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

            //Produk 1 (Cowo)
            [
                'shoe_id' => 1, 
                'size' => '40',
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 1, 
                'size' => '41',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 1, 
                'size' => '42',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 1, 
                'size' => '43',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 1, 
                'size' => '44',
                'stock' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 1, 
                'size' => '45',
                'stock' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Produk 2 (cewe) 
            [
                'shoe_id' => 2, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 2, 
                'size' => '39',
                'stock' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 2, 
                'size' => '38',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 2, 
                'size' => '37',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 2, 
                'size' => '36',
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 2, 
                'size' => '35',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Produk 3 (cewe)

            [
                'shoe_id' => 3, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 3, 
                'size' => '39',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 3, 
                'size' => '38',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 3, 
                'size' => '37',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 3, 
                'size' => '36',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 3, 
                'size' => '35',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Produk 4 (cowo)

            [
                'shoe_id' => 4, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '42',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '45',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 4 (cowo)

             [
                'shoe_id' => 4, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '42',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 4, 
                'size' => '45',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 5 (cowo)

             [
                'shoe_id' => 5, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 5, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 5, 
                'size' => '42',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 5, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 5, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 5, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 6 (cowo)

             [
                'shoe_id' => 6, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 6, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 6, 
                'size' => '42',
                'stock' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 6, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 6, 
                'size' => '44',
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 6, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 7 (cowo)

             [
                'shoe_id' => 7, 
                'size' => '40',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 7, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 7, 
                'size' => '42',
                'stock' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 7, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 7, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 7, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 8 (cowo)

             [
                'shoe_id' => 8, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 8, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 8, 
                'size' => '42',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 8, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 8, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 8, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 9 (cowo)

             [
                'shoe_id' => 9, 
                'size' => '40',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 9, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 9, 
                'size' => '42',
                'stock' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 9, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 9, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 9, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 10 (cowo)

             [
                'shoe_id' => 10, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 10, 
                'size' => '41',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 10, 
                'size' => '42',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 10, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 10, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 10, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 11 (cowo)

             [
                'shoe_id' => 11, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 11, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 11, 
                'size' => '42',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 11, 
                'size' => '43',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 11, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 11, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 12 (cowo)

             [
                'shoe_id' => 12, 
                'size' => '40',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 12, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 12, 
                'size' => '42',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 12, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 12, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 12, 
                'size' => '45',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 13 (cowo)

             [
                'shoe_id' => 13, 
                'size' => '40',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 13, 
                'size' => '41',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 13, 
                'size' => '42',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 13, 
                'size' => '43',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 13, 
                'size' => '44',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 13, 
                'size' => '45',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //Produk 14 (cewe)

             [
                'shoe_id' => 14, 
                'size' => '40',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '39',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '38',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '37',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '36',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '35',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

                       //Produk 14 (cewe)

             [
                'shoe_id' => 14, 
                'size' => '40',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '39',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '38',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '37',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '36',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '35',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Produk 14 (cewe)

             [
                'shoe_id' => 14, 
                'size' => '40',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '39',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '38',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '37',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '36',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 14, 
                'size' => '35',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],

           //Produk 15 (cewe)

           [
            'shoe_id' => 15, 
            'size' => '40',
            'stock' => 15,
            'created_at' => now(),
            'updated_at' => now(),
            ],
        [
            'shoe_id' => 15, 
            'size' => '39',
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'shoe_id' => 15, 
            'size' => '38',
            'stock' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'shoe_id' => 15, 
            'size' => '37',
            'stock' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'shoe_id' => 15, 
            'size' => '36',
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'shoe_id' => 15, 
            'size' => '35',
            'stock' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ],

            //Produk 16 (cewe)

             [
                'shoe_id' => 16, 
                'size' => '40',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 16, 
                'size' => '39',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 16, 
                'size' => '38',
                'stock' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 16, 
                'size' => '37',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 16, 
                'size' => '36',
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shoe_id' => 16, 
                'size' => '35',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
