<?php

namespace Database\Seeders\Backend;

use Illuminate\Database\Seeder;
use App\Models\Delegator;
use Faker\Factory as Faker;

class DelegatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Delegator::create([
                'code' => $faker->unique()->bothify('D###'),
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'personal_image' => $faker->imageUrl(),
                'address' => $faker->address,
                'status' => $faker->randomElement(['active', 'inactive']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}