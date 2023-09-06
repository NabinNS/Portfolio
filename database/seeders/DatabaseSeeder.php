<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Shraddha Shrestha',
            'email' => 'shraddhashrestha@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'imagePath' => "shraddha-home.jpg",
            'description' => "A showcase of my journey as a CEO in the insurance and real estate industries, as well as my engaging role as a podcaster.
            Explore my world where business, properties, and podcasts converge to create a unique tapestry of experiences.",
        ]);
    }
}
