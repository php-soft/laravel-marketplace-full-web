<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
            'name' => 'Apple iPhone 7 Plus 128GB (Đen) - Hàng nhập khẩu',
            'description' => 'Rẻ thôi mà',
            'price' => '16700000',
            'sale' => '0',
            'category_id' => '1',
            'trademark_id' => '1'
        ]);
         DB::table('products')->insert([
            'name' => 'Laptop Dell Inspiron 7460 (N4I5259W) 14 inch - Hãng Phân phối chính thức + Tặng túi + Chuột + Túi chống sốc  ',
            'description' => '12 tháng Bảo hành điện tử Xem thêm
                                CPU: 7th Generation Intel® Kaby Lake Core™ i5 _ 7200U 
                                Processor (2.50 GHz, 3M Cache, up to 3.10 GHz)',
            'price' => '1870000',
            'sale' => '0',
            'category_id' => '2',
            'trademark_id' => '2'
        ]);
         DB::table('products')->insert([
            'name' => 'iPad Mini 2 Wi-Fi 32GB',
            'description' => '  Màn hình : Retina công nghệ IPS, 7.9 inch
                                Vi xử lý CPU : Dual-core 1.3 GHz
                                Chip đồ họa (GPU) : PowerVR G6430
                                RAM : 1 GB
                                Bộ nhớ trong : 32 GB
                                Camera : Chính : 5 MP, Phụ : 1.2 MP
                                Kết nối : Wi-Fi 802.11 a / b / g / n, dual-band',
            'price' => '6970000',
            'sale' => '10',
            'category_id' => '4',
            'trademark_id' => '1',
            'shop_id' => '1'
        ]);
    }
}
