<?php

use Illuminate\Database\Seeder;

class ShopImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_images')->insert([
            'shop_id' => 1,
            'image' => 'VNMobile1',
        ]);

        DB::table('shop_images')->insert([
            'shop_id' => 1,
            'image' => 'VNMobile2',
        ]);
    }
}
