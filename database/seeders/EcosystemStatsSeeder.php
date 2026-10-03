<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EcosystemStats;

class EcosystemStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EcosystemStats::create([
            'module_count' => 12,
            'client_count' => 50,
        ]);
    }
}
