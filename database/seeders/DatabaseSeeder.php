<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'     => env('ADMIN_USER_NAME', 'USER'),
            'email'    => 'admin@local.test',
            'password' => bcrypt('password'),
        ]);
    }
}
