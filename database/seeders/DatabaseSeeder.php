<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Program;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Program::create([
            'user_id' => 1,
            'achievement_date' => now(),
            'required_cost' => 100000000,
            'title' => 'Wisma Tamu Muhajir',
            'description' => 'Wisma Tamu Muhajir',
        ]);
    }
}
