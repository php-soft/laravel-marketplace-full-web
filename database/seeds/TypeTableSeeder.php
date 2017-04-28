<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Điện tử',
        ]);
          DB::table('types')->insert([
            'name' => 'Thời trang nữ',
        ]);
          DB::table('types')->insert([
            'name' => 'Thời trang nam',
        ]);
          DB::table('types')->insert([
            'name' => 'Nhà cửa & đời sống',
        ]);
          DB::table('types')->insert([
            'name' => 'Sức khỏe & Sắc đẹp',
        ]);
          DB::table('types')->insert([
            'name' => 'Trẻ em & Đồ chơi',
        ]);
          DB::table('types')->insert([
            'name' => 'Thể thao & Du lịch',
        ]);
          DB::table('types')->insert([
            'name' => 'Xe máy & Bách hóa',
        ]);
    }
}
