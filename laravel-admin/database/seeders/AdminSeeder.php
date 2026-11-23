<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Akun tetap untuk login nanti
        Admin::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        // Data acak dengan Faker
        for ($i = 0; $i < 5; $i++) {
            Admin::create([
                'username' => fake()->unique()->userName(),
                'password' => Hash::make('password'),
            ]);
        }
    }
}