<?php

use Illuminate\Database\Seeder;

class IndustrysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('industrys')->insert([
            'name' => 'Điện tử',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Thời trang nữ',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Thời trang nam',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Nhà cửa & đời sống',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Sức khỏe & Sắc đẹp',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Trẻ em & Đồ chơi',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Thể thao & Du lịch',
        ]);
          DB::table('industrys')->insert([
            'name' => 'Xe máy & Bách hóa',
        ]);
    }
}
