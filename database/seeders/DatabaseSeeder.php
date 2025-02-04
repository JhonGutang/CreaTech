<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();

        // User::factory()->create([
        //     'firstName' => 'Test First Name',
        //     'lastName' => 'Test Last Name',
        //     'password' => '123',
        //     'email' => 'test@example.com',
        // ]);
    }
}
