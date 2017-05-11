<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'hoanhthanh02hbc@gmail.com',
            'password' => bcrypt('pass87Word'),
            'first_name' => 'Vân',
            'last_name' => 'Nguyễn',
            'phone_number' => '0905058325',
            'date_of_birth' => '1987-07-08',
            'city_id' => 3,
            'country_id' => 1,
            'district_id' => 2,
            'address' => '02 Hồ Biểu Chánh, Hòa Cường Nam',
            'avatar' => 'VanNguyen',
        ]);
        
                DB::table('users')->insert([
            'email' => 'dunghtk87@gmail.com',
            'password' => bcrypt('pass87Word'),
            'first_name' => 'Dung',
            'last_name' => 'Hương Trần Kiều',
            'phone_number' => '0905366366',
            'date_of_birth' => '1987-07-07',
            'city_id' => 3,
            'country_id' => 1,
            'district_id' => 2,
            'address' => '24 Phan Đăng Lưu',
            'avatar' => 'DungHuongTranKieu',
        ]);

    }
}
