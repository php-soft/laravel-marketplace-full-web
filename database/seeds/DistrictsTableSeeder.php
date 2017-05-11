<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Cẩm Lệ',
        ]);

        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Hải Châu',
        ]);

        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Hòa Vang',
        ]);

        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Hoàng Sa',
        ]);

        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Liên Chiểu',
        ]);

        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Ngũ Hành Sơn',
        ]);

        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Sơn Trà',
        ]);
        
        DB::table('districts')->insert([
            'city_id' => 3,
            'name' => 'Thanh Khê',
        ]);
    }
}
