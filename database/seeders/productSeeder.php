<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To Insert Single Record
        /*DB::table('products')->insert([
            'name'=>'LG Mobile',
            'price'=>'200',
            'description'=>'Smart Phone With 4 GB RAM',
            'category'=>'Mobile',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg',
        ]);*/

        DB::table('products')->insert([
           [
                'name'=>'Oppo Mobile',
                'price'=>'300',
                'description'=>'Smart Phone With 8 GB RAM',
                'category'=>'Mobile',
                'gallery'=>'https://m.media-amazon.com/images/I/71geVdy6-OS._SL1500_.jpg',
           ],
           [
                'name'=>'Panasonic TV',
                'price'=>'200',
                'description'=>'43 Inch TV',
                'category'=>'TV',
                'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154596_832_panasonic_32-inch-led-hd-ready-tv-th-32f201dx.jpg',
            ],
            [
                'name'=>'Sony TV',
                'price'=>'200',
                'description'=>'64 Inch TV',
                'category'=>'TV',
                'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154037_832_sony_43-inch-led-full-hd-tv-klv-43w662f.jpg',
            ],
            [
                'name'=>'LG Fridge',
                'price'=>'600',
                'description'=>'Icy Cool',
                'category'=>'Fridge',
                'gallery'=>'https://www.lg.com/in/images/refrigerators/md07524769/gallery/GL-S292RPZX-Refrigerators-Front-View-D01.jpg',
            ]
        ]);
    }
}
