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
        foreach(range(1,50) as $index)
        {
            District::create([
                'name' => $faker->name,
                'city_id' => $faker->randomNumber
            ]);
        }
    }
}
