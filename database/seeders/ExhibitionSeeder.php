<?php

namespace Database\Seeders;

use App\Models\Exhibition;
use Illuminate\Database\Seeder;

class ExhibitionSeeder extends Seeder
{
    public function run(): void
    {
        Exhibition::create([
            'title' => 'Narrative Worlds',
            'slug' => 'narrative-worlds',
            'description' => 'An exhibition exploring visual storytelling across illustration, film, comics, and archives.',
            'image_url' => 'https://via.placeholder.com/800x400',
            'netx_asset_id' => 'NETX-1001',
            'is_published' => true,
            'start_date' => '2026-09-01',
            'end_date' => '2027-01-15',
        ]);

        Exhibition::create([
            'title' => 'Behind the Frame',
            'slug' => 'behind-the-frame',
            'description' => 'A behind-the-scenes look at concept art, design, and cinematic world-building.',
            'image_url' => 'https://via.placeholder.com/800x400',
            'netx_asset_id' => 'NETX-1002',
            'is_published' => true,
            'start_date' => '2026-10-10',
            'end_date' => '2027-03-20',
        ]);
    }
}