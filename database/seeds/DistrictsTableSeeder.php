<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        factory(App\District::class, 50)->create([
            'name' => $faker->name,
            'city_id' => function () {
                return factory(App\City::class)->create()->id;
            }
        ]);
    }
}
