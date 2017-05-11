<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(ShopImagesTableSeeder::class);
        $this->call(ShopAssignmentsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrderProductsTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
    }
}
