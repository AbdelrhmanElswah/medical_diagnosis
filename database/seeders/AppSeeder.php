<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Users
        User::create([
            'name' => 'User',
            'email' => 'admin3@admin.com',
            'password' => Hash::make('12345678'),
        ]);

    }
}
