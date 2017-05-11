<?php

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_products')->insert([
            'order_id' => 1,
            'product_id' => 1,
            'price' => 15000000,
            'quantity' => 10,
        ]);
    }
}
