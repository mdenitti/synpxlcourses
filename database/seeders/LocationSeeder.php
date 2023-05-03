<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Provider\nl_BE\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // set the locale to 'fr_FR'
        $faker = Factory::create('nl_BE');
        // Add the Address provider to the faker instance
        // $faker->addProvider(new Address($faker));

        // create a loop to seed our location table; use de DB facade
        for ($i = 0; $i < 5; $i++) {
            DB::table('locations')->insert([
                'name' => $faker->name(),
                'cap' => rand(0, 5),
                'reviews' => rand(0, 5),
                'is_open' => rand(0, 1),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
