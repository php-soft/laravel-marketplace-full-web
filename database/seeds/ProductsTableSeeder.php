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
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S8',
            'image' => 'Samsung Galaxy S8',
            'description' => 'Samsung Galaxy S8 sở hữu màn hình cong,cảm biến vân tay, cấu hình đỉnh cao, pin khủng, tích hợp trợ lý ảo',
            'price' => 18490000,
            'quantity' => 30,
            'category_id' => 1,
            'shop_id' => 1,
        ]);
    }
}
