<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\City;
use App\Country;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $faker = Faker\Factory::create();
        foreach(range(1,50) as $index)
        {
            City::create([
                'name' => $faker->name,
                'country_id' => function () {
                    return factory(App\Country::class)->create()->id;
                }
            ]);
        }*/

        $faker = Faker\Factory::create();
        factory(App\City::class, 50)
        ->create([
            'name' => $faker->name,
            'country_id' => function () {
                return factory(App\Country::class)->create()->id;
            }
        ]);
    }
}
