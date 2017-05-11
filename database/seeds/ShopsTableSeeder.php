<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' => 'Cửa hàng điện thoại VN Mobile',
            'user_id' => 1,
            'type_id' => 1,
            'city_id' => 3,
            'district_id' => 2,
            'country_id' => 1,
            'description' => 'Chuyên mua bán các dòng điện thoại cơ bản, smartphone, blackberry mới và cũ. Có nhiều mẫu mã độc, lạ. Bảo hàng chu đáo.',
            'image' => 'Cửa hàng điện thoại VN Mobile',
            'status' => 0,
        ]);
    }
}
