<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Track;

class TrackSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $track1 = Track::createTrack([
            'name' => 'Song 1',
            'artist' => 'Artist 1',
            'album' => 'Album 1',
            'length' => 180,
            'release_year' => 2024,
        ]);
        $track2 = Track::createTrack([
            'name' => 'Song 2',
            'artist' => 'Artist 2',
            'album' => 'Album 2',
            'length' => 200,
            'release_year' => 2025,
        ]);
        $track3 = Track::createTrack([
            'name' => 'Song 3',
            'artist' => 'Artist 3',
            'album' => 'Album 3',
            'length' => 190,
            'release_year' => 2023,
        ]);
    }
}
