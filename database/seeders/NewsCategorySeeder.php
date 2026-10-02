<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsCategory;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsCategory::create([
            'name' => 'Interoperabilitas',
            'is_active' => true,
        ]);

        NewsCategory::create([
            'name' => 'Inovasi Layanan',
            'is_active' => true,
        ]);

        NewsCategory::create([
            'name' => 'Kebijakan & Kinerja',
            'is_active' => true,
        ]);

        NewsCategory::create([
            'name' => 'Teknologi',
            'is_active' => true,
        ]);

        NewsCategory::create([
            'name' => 'Layanan',
            'is_active' => true,
        ]);

    }
}
