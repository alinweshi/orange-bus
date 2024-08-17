<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\backend\BusSeeder;
use Database\Seeders\backend\DriverSeeder;
use Database\Seeders\Backend\DelegatorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            BusSeeder::class,
            DriverSeeder::class,
            DelegatorSeeder::class,

        ]);
    }
}
