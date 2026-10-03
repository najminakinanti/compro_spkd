<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomepageHero;
use App\Models\HomepageHeroImage;

class HomepageHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hero = HomepageHero::create([
            'badge' => 'Ekosistem Digital Kesehatan Indonesia',
            'title' => 'Transforming Healthcare Through Smart Data & Modern Technology',
            'description' => 'Solusi ekosistem digital terintegrasi untuk mempercepat transformasi layanan, efisiensi operasional, dan kepatuhan regulasi di fasilitas kesehatan Anda.',
        ]);

        $images = [
            'homepage_hero/01M3XAMXZ3SDT5Y81PADTBXNNQ.png',
            'homepage_hero/01M3XAMXMZSK3HZMVQWDVY65P1.png',
            'homepage_hero/01M3XAMXZQ7PB8ESN3ST1XR6EH.png',
        ];

        foreach ($images as $image) {
            HomepageHeroImage::create([
                'hero_id' => $hero->unique_id,
                'image' => $image,
                'description' => null,
            ]);
        }
    }
}
