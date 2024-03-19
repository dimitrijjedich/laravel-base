<?php

namespace Database\Seeders;

use App\Models\Token;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count()==0) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
            User::factory(10)->create();
        }
        foreach (User::all() as $user) {
            Token::factory(500)->create(['user_id' => $user->id]);
        }
    }
}
