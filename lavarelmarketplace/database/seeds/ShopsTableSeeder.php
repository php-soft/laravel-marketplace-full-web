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
            'name' => 'Fpt shop',
            'industry_id' => '1'
        ]);
        DB::table('shops')->insert([
            'name' => 'The giới di động',
            'industry_id' => '1'
        ]);
         DB::table('shops')->insert([
            'name' => 'Điện máy xanh',
            'industry_id' => '1'
        ]);
    }
}
