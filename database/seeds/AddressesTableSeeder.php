<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => 1,
            'city_id' => 3,
            'country_id' => 1,
            'district_id' => 2,
            'street' => '02 Hồ Biểu Chánh',
            'zip_code' => '550000',
            'phone_number' => '0905058325',
        ]);
    }
}
