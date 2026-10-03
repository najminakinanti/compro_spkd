<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AccreditationSeeder::class,
            ComplianceSeeder::class,
            InteroperabilityStandardSeeder::class,
            NewsCategorySeeder::class,
            NewsSeeder::class,
            CompanyProfileSeeder::class,
            EcosystemStatsSeeder::class,
            HomepageHeroSeeder::class,
            DiscussionEmailTemplateSeeder::class,
        ]);
    }
}
