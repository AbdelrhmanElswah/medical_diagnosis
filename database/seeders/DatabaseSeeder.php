<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Room;
use App\Models\Year;
use App\Models\Lecture;
use App\Models\Period;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AppSeeder::class,
        ]);

    }
}
