<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Hà Nội',
            'country_id' => 1,
        ]);
        
        DB::table('cities')->insert([
            'name' => 'Hồ Chí Minh',
            'country_id' => 1,
        ]);
        
        DB::table('cities')->insert([
            'name' => 'Đà Nẵng',
            'country_id' => 1,
        ]);
    }
}
