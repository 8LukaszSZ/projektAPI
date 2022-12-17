<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\People;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'age' => $faker->numberBetween($min = 1, $max = 100),
                'country' => $faker->country,
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
