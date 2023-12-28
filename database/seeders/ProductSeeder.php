<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
          'name' => 'Iphone 14 Apple',
          'price' => '69900',
          'description'   => 'Apple Phone with the price of 69,900 and currently two discounts are available',
          'category' => 'Mobile',
          'gallery' => 'https://img.giznext.com/assets/model/1/28/samsung-galaxy-s10-1612596302.png?width=160&amp;q=75'
        ],
        [
            'name' => 'Samsung Galaxy S10',
            'price' => '37000',
            'description'   => 'Samsung Phones with headquaters in bangalore on MG Road',
            'category' => 'Mobile',
            'gallery' => 'https://img.giznext.com/assets/model/1/28/samsung-galaxy-s10-1612596302.png?width=160&amp;q=75'
        ],
        [
            'name' => 'Samsung GalaxyZ Flip 3',
            'price' => '169900',
            'description'   => 'Samsung Phone with the price of 1,59,900 and currently two discounts are available',
            'category' => 'Mobile',
            'gallery' => 'https://img.giznext.com/assets/model/1/10982/profile/samsung-galaxy-z-flip-3-1628918393.jpg?width=160&amp;q=75'
        ],
          [
            'name' => 'Realme C3 (Triple Cameras)',
            'price' => '9900',
            'description'   => 'Realme is good phone with good features',
            'category' => 'Mobile',
            'gallery' => 'https://img.giznext.com/assets/model/5/10973/profile/realme-c3-(3-cameras)-1631162927.jpg?width=160&q=75'
          ]
     ]);
    }
}
