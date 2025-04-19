<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Heu Diva',
            'username' => 'admin',
            'email' => 'info@admin.pr',
            'password' => Hash::make('123456'),
            'usertype' => 'supperadmin',
            'status' => 1,
        ]);
    }
}
