<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Simpmufy',
            'email' => 'admin@simpmufy.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'active' => true,
        ]);

        User::factory()->count(200)->create();
    }
}
