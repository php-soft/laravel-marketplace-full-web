<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('shops')->insert([
            'name' => 'Fpt shop',
            'type_id' => '1'
        ]);
        DB::table('shops')->insert([
            'name' => 'The giới di động',
            'type_id' => '1'
        ]);
         DB::table('shops')->insert([
            'name' => 'Điện máy xanh',
            'type_id' => '1'
        ]);
    }
}
