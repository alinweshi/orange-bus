<?php namespace Database\Seeders\backend;

use App\Models\Driver;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

// Import the Faker Factory

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Driver::create([
                'name' => $faker->name,
                "code" => $faker->unique()->randomNumber(4),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'driving_license_serial' => $faker->randomNumber(6),
                'license_expiry_date' => $faker->date('Y-m-d'),
                'bus_id' => 1,
                'personal_image' => asset('images/15.jpg'), // Use a valid image path
                'status' => $faker->randomElement(["active", "inactive"]),
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
