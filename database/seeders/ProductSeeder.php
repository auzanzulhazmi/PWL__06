<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'image' => 'img/popular-1.jpg',
                'description' => 'Americano adalah minuman kopi espresso dengan tambahan air panas. Namanya diambil dari cara orang Amerika meminum espresso. 
                Konon, penyebutan americano adalah sebagai lelucon dan ejekan terhadap orang-orang Amerika yang suka espresso-nya dibuat lebih encer.',
                'draft' => 0,
            ],
            
            [
                'image2' => 'img/popular-2.jpg',
                'description' => 'Kopi Cappuccino adalah minuman khas Italia yang terdiri dari 1/3 espresso, 1/3 susu steamed, dan 1/3 buih susu. Pada dasarnya, minuman ini adalah campuran dari espresso dan susu seperti minuman-minuman berbasis espresso lainnya.
                Sepintas, sajian cappuccino hampir tampak serupa dengan minuman latte.',
                'draft' => 0,
            ]
            ];
        DB::table('products')->insert($data);
    }
}