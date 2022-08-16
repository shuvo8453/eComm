<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LG mobile',
                'price' => '400$',
                'description' => 'A smart phone with 16gb ram and many more features',
                'category' => 'mobile',
                'gallery' => '/gallery/1.jpg',
            ],
            [
                'name' => 'Oppo mobile',
                'price' => '400$',
                'description' => 'A smart phone with 16gb ram and many more features',
                'category' => 'mobile',
                'gallery' => '/gallery/2.jpg',
            ],
            [
                'name' => 'One Plus mobile',
                'price' => '800$',
                'description' => 'A smart phone with 32gb ram and many more features',
                'category' => 'mobile',
                'gallery' => '/gallery/3.jpg',
            ],
            [
                'name' => 'Sony tv',
                'price' => '1000$',
                'description' => 'A smart tv with many more features',
                'category' => 'television',
                'gallery' => '/gallery/4.jpg',
            ],
            [
                'name' => 'iPhone',
                'price' => '900$',
                'description' => 'A smart phone with 64gb ram and many more features',
                'category' => 'mobile',
                'gallery' => '/gallery/5.jpg',
            ]
        ]);
    }
}
