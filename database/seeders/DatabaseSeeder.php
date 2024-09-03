<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        $trainer = User::factory()->create([
            'name' => 'Can Göckmen',
            'email' => 'can@gmail.com',
            'password' => 'test',
        ]);

        $player1 = User::factory()->create([
            'name' => 'Liviu Ghita',
            'email' => 'liviu@gmail.com',
            'password' => 'test',
        ]);

        $player2 = User::factory()->create([
            'name' => 'Kerim Olgun',
            'email' => 'kerim@gmail.com',
            'password' => 'test',
        ]);

        $team = Team::factory()->create([
            'user_id' => $trainer->id,
            'name' => 'Türksport Memmingen II',
            'personal_team' => true,
            'logo' => 'logo',
        ]);

        $trainer->teams()->attach($team, ['role' => 'coach']);
        $player1->teams()->attach($team, ['role' => 'player']);
        $player2->teams()->attach($team, ['role' => 'player']);
    }
}
