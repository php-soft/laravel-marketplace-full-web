<?php

use Illuminate\Database\Seeder;

class TrademarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trademarks')->insert([
            'name' => 'Apple',
            'industry_id' => '1'
        ]);
        DB::table('trademarks')->insert([
            'name' => 'Dell',
            'industry_id' => '1'
        ]);
         DB::table('trademarks')->insert([
            'name' => 'Samsung',
            'industry_id' => '1'
        ]);
    }
}
