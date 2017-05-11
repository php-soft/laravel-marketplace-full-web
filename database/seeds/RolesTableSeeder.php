<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Shop Owner',
            'description' => 'Bạn có quyền quản trị shop cao nhất. Bạn có thể thêm Người bán hoặc Biên tập viên. Bạn chịu trách nhiệm về các sản phẩm của mình trước pháp luật.',
        ]);

        DB::table('roles')->insert([
            'name' => 'Seller',
            'description' => 'Bạn được bán hàng trực tiếp với người mua, thay đổi thông tin sản phẩm. Bạn chịu trach nhiệm bán đúng giá, đúng chất lượng đã công bố.',
        ]);
    }
}
