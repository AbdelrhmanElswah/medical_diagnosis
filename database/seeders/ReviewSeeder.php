<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'user_id' => 3,
            'name' => 'John Doe',
            'role' => 'Doctor',
            'review' => 'Fantastic Response! This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care.',
            'rating' => 5
        ]);

        Review::create([
            'user_id' => 3,
            'name' => 'Jane Smith',
            'role' => 'Nurse',
            'review' => 'Highly recommended! The AI diagnostics are incredibly accurate and fast, making my job much easier.',
            'rating' => 4
        ]);

        Review::create([
            'user_id' => 3,
            'name' => 'Alice Johnson',
            'role' => 'Patient',
            'review' => 'Great service! The platform provided me with detailed and accurate diagnostics that helped my doctor make a quick decision.',
            'rating' => 5
        ]);

        Review::create([
            'user_id' => 3,
            'name' => 'Bob Brown',
            'role' => 'Lab Technician',
            'review' => 'Very useful tool. The AI-powered diagnostics help us quickly analyze and understand the medical images.',
            'rating' => 4
        ]);

        Review::create([
            'user_id' => 3,
            'name' => 'Cathy Wilson',
            'role' => 'Radiologist',
            'review' => 'Excellent platform! The accuracy of the diagnostics is impressive, and it saves a lot of time.',
            'rating' => 5
        ]);
    }
}
