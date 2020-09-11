<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'name' => 'Samsung Note',
            'slug' => 'samsung-note',
            'details' => 'System operacyjny: Android 5.1. Wyświetlacz (przekątna) 5,7 cale/cali. Pamięć masowa 32 GB.',
            'price' => '2700',
            'description' => 'Samsung Galaxy Note 5 napędzany jest przez chipset Exynos 7420 Octa. To 8-rdzeniowy procesor (4x2.1 GHz Cortex-A57 oraz 4x1.5 GHz Cortex-A53), a także układ grafiki Mali-T760MP8. Urządzenie ma więc podzespoły podobne do tych, które znajdziemy w Galaxy S6.',
        ]);

        Product::create([

            'name' => 'Apple Iphone 8',
            'slug' => 'apple-iphone-8',
            'details' => 'A1863; A1905, Dotykowy (bez klawiatury), Kolorowy / IPS TFT 750 x 1334 px 4.70", Li-Ion , Apple A11.',
            'price' => '2300',
            'description' => 'Wyświetlacz iPhonea 8 to 4,7-calowa Retina HD o rozdzielczości 1334x750 i zagęszczeniu 323 pikseli na cal. ... iPhone 8 ma 138,4 mm wysokości, 67,3 mm szerokości i 7,3 mm grubości. Waży 148 g. Model dostępny jest w kolorach: złotym, srebrnym i szarym.',
        ]);

        Product::create([

            'name' => 'Xiaomi Redmi Note 9 Pro',
            'slug' => 'xiaomi-redmi-note',
            'details' => 'Wyświetlacz: 6,67 ", 2400 x 1080 pikseli, Full HD+. Procesor: 8-rdzeniowy Qualcomm Snapdragon 720G. System operacyjny: Android 10. Pamięć RAM: 6 GB. Pamięć wbudowana: 64 GB',
            'price' => '2300',
            'description' => '',
        ]);
    }
}
