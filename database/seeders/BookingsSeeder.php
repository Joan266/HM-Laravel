<?php

namespace Database\Seeders;

use App\Models\Bookings; 
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bookings::factory()->count(5)->create();
    }
}
