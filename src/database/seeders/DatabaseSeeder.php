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
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ]);

        $this->call([
            TripSeeder::class,
            RentalSeeder::class,
            BookingSeeder::class,
            ArticleSeeder::class,
            GallerySeeder::class,
            TestimonialSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
