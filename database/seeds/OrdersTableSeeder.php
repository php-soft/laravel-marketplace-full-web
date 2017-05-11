<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => 1,
            'shipping_name' => 'Cửa hàng điện thoại VN Mobile',
            'shipping_address' => '02 Hồ Biểu Chánh, Hòa Cường Nam',
            'shipping_phone' => '0905058325',
            'shipping_email' => 'hoanhthanh02hbc@gmail.com',
            'country_id' => 1,
            'city_id' => 3,
            'district_id' => 2,
            'status' => 0,
        ]);
    }
}
