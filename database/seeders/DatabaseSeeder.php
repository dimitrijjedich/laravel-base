<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $usa = new Country;
        $usa->name = 'USA';
        $usa->save();
        $newYork = new State;
        $newYork->name = 'New York';
        $newYork->country_id = $usa->id;
        $newYork->save();
        $washington = new State;
        $washington->name = 'Washington';
        $washington->country_id = $usa->id;
        $washington->save();

        $germany = new Country;
        $germany->name = 'Germany';
        $germany->save();
        $berlin = new State;
        $berlin->name = 'Berlin';
        $berlin->country_id = $germany->id;
        $berlin->save();
        $bremen = new State;
        $bremen->name = 'Bremen';
        $bremen->country_id = $germany->id;
        $bremen->save();

        $albany = new City();
        $albany->name = 'Albany';
        $albany->state_id = $newYork->id;
        $albany->save();
        $seattle = new City();
        $seattle->name = 'Seattle';
        $seattle->state_id = $washington->id;
        $seattle->save();
        $olympia = new City();
        $olympia->name = 'Olympia';
        $olympia->state_id = $washington->id;
        $olympia->save();

        $berlinCity = new City;
        $berlinCity->name = 'Berlin';
        $berlinCity->state_id = $berlin->id;
        $berlinCity->save();
        $bremenCity = new City();
        $bremenCity->name = 'Bremen';
        $bremenCity->state_id = $bremen->id;
        $bremenCity->save();
    }
}
