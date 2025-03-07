<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            // 🔹 MEN'S SHOES
            [
                'name'       => 'Adrenaline GTS 23',
                'category'   => 'Men',
                'is_new'     => 1,
                'price'      => 130.99,
                'sales'      => 5,
                'image'      => 'adrenaline_gts_23.svg',
                'discount'   => 10.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.7
            ],
            [
                'name'       => 'Aero Glide',
                'category'   => 'Men',
                'is_new'     => 1,
                'price'      => 110.50,
                'sales'      => 15,
                'image'      => 'aero-glide.svg',
                'discount'   => 0.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.5
            ],
            [
                'name'       => 'Caldera 5',
                'category'   => 'Men',
                'is_new'     => 0,
                'price'      => 140.00,
                'sales'      => 25,
                'image'      => 'caldera5.svg',
                'discount'   => 15.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.8
            ],
            [
                'name'       => 'Cascadia 16',
                'category'   => 'Men',
                'is_new'     => 0,
                'price'      => 125.00,
                'sales'      => 10,
                'image'      => 'cascadia16.svg',
                'discount'   => 5.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.3
            ],
            [
                'name'       => 'Cloud Nova',
                'category'   => 'Men',
                'is_new'     => 1,
                'price'      => 150.99,
                'sales'      => 20,
                'image'      => 'cloud-nova.svg',
                'discount'   => 20.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.6
            ],
            [
                'name'       => 'Divide 4',
                'category'   => 'Men',
                'is_new'     => 1,
                'price'      => 135.99,
                'sales'      => 8,
                'image'      => 'divide4.svg',
                'discount'   => 0.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.4
            ],
            [
                'name'       => 'Falcon X',
                'category'   => 'Men',
                'is_new'     => 0,
                'price'      => 120.00,
                'sales'      => 12,
                'image'      => 'falcon-x.svg',
                'discount'   => 10.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.2
            ],
            [
                'name'       => 'Ghost Max',
                'category'   => 'Men',
                'is_new'     => 1,
                'price'      => 145.50,
                'sales'      => 18,
                'image'      => 'ghost-max.svg',
                'discount'   => 5.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.7
            ],
            [
                'name'       => 'Glycerin 21',
                'category'   => 'Men',
                'is_new'     => 0,
                'price'      => 155.00,
                'sales'      => 30,
                'image'      => 'glycerin21.svg',
                'discount'   => 20.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.9
            ],
            [
                'name'       => 'Launch GTS 9',
                'category'   => 'Men',
                'is_new'     => 1,
                'price'      => 100.00,
                'sales'      => 22,
                'image'      => 'launch_gts_9.svg',
                'discount'   => 5.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.1
            ],

            // 🔹 WOMEN'S SHOES
            [
                'name'       => 'Launch 9',
                'category'   => 'Women',
                'is_new'     => 1,
                'price'      => 110.99,
                'sales'      => 5,
                'image'      => 'launch9.svg',
                'discount'   => 5.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.5
            ],
            [
                'name'       => 'Levitate 6',
                'category'   => 'Women',
                'is_new'     => 0,
                'price'      => 135.99,
                'sales'      => 8,
                'image'      => 'levitate6.svg',
                'discount'   => 0.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.6
            ],
            [
                'name'       => 'Nova Blast 4',
                'category'   => 'Women',
                'is_new'     => 1,
                'price'      => 125.99,
                'sales'      => 10,
                'image'      => 'nova-blast4.svg',
                'discount'   => 10.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.7
            ],
            [
                'name'       => 'Ravenna 11',
                'category'   => 'Women',
                'is_new'     => 0,
                'price'      => 140.00,
                'sales'      => 12,
                'image'      => 'ravenna11.svg',
                'discount'   => 15.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.8
            ],
            [
                'name'       => 'Rocket 3',
                'category'   => 'Women',
                'is_new'     => 1,
                'price'      => 130.50,
                'sales'      => 18,
                'image'      => 'rocket3.svg',
                'discount'   => 5.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'rating'     => 4.4
            ],
        ]);
    }
}
