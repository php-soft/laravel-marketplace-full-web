<?php

use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categorys')->insert([
            'name' => 'Điện thoại',
            'industry_id' => '1'
        ]);
         DB::table('categorys')->insert([
            'name' => 'Laptop',
            'industry_id' => '1'
        ]);
         DB::table('categorys')->insert([
            'name' => 'Macbook',
            'industry_id' => '1'
        ]);
          DB::table('categorys')->insert([
            'name' => 'Máy tính bảng',
            'industry_id' => '1'
        ]);
          DB::table('categorys')->insert([
            'name' => 'Phụ kiện',
            'industry_id' => '1'
        ]);
           DB::table('categorys')->insert([
            'name' => 'Máy ảnh',
            'industry_id' => '1'
        ]);
            DB::table('categorys')->insert([
            'name' => 'Máy quay',
            'industry_id' => '1'
        ]);
             DB::table('categorys')->insert([
            'name' => 'Phụ kiện máy ảnh',
            'industry_id' => '1'
        ]);
              DB::table('categorys')->insert([
            'name' => 'TiVi',
            'industry_id' => '1'
        ]);
    }
}
