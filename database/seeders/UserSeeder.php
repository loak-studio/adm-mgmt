<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'last_name' => 'dev',
            'first_name' => 'user',
            'avatar' => null,
            'email' => 'dev@dev.io',
            'email_verified_at' => now(),
            'is_admin' => 1,
            'password' => 'dev',
        ]);
    }
}
