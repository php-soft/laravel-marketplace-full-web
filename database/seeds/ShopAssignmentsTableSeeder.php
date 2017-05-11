<?php

use Illuminate\Database\Seeder;

class ShopAssignmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_assignments')->insert([
            'name' => 'Thêm seller',
            'user_id' => 2,
            'shop_id' => 1,
            'role_id' => 2,
        ]);

    }
}
