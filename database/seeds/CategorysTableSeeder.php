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
         DB::table('categories')->insert([
            'name' => 'Điện thoại',
            'type_id' => '1'
        ]);
         DB::table('categories')->insert([
            'name' => 'Laptop',
            'type_id' => '1'
        ]);
         DB::table('categories')->insert([
            'name' => 'Macbook',
            'type_id' => '1'
        ]);
          DB::table('categories')->insert([
            'name' => 'Máy tính bảng',
            'type_id' => '1'
        ]);
          DB::table('categories')->insert([
            'name' => 'Phụ kiện',
            'type_id' => '1'
        ]);
    }
}
