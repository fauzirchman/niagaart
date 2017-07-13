<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'service_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Table',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'price' => '200'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Chair',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'price' => '100'
        ]);
        $product->save();

        $product = new \App\Product([
          'service_id' => '1',
          'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUCGYDHyQaM_KxFIbI42RcSV_p3q5EXxsg5ZAXoCKxOnrZU0UN',
          'name' => 'Bed',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'price' => '500'
        ]);
        $product->save();
    }
}
