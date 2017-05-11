<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'content' => 'Bạn đã tạo shop thành công. hãy bắt đầu đăng sản phẩm của mình. Vui lòng không phản hồi email này.',
            'email' => 'support@lazada.com',
        ]);
    }
}
