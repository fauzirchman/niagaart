<?php

use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion = new \App\Promotion([
          'name' => 'Konsultasi & Desain Interior',
          'sale' => '100% GRATIS',
          'class' => 'sale-carousel1',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Harga Kitchen Set',
          'sale' => 'Mulai Rp. 1,4jt/meter',
          'class' => 'sale-carousel2',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Produk Kompor Modena',
          'sale' => 'DISKON 10%',
          'class' => 'sale-carousel3',
          'status' => 'yes'
        ]);
        $promotion->save();

        $promotion = new \App\Promotion([
          'name' => 'Parquet Vinyl',
          'sale' => 'Mulai Rp. 129rb/m²',
          'class' => 'sale-carousel4',
          'status' => 'yes'
        ]);
        $promotion->save();
    }
}
