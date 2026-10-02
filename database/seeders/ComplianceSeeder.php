<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Compliance;

class ComplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Compliance::create([
            'year' => '2022',
            'category' => 'REKAM MEDIS',
            'title' => 'Permenkes No. 24/2022',
            'description' => 'Landasan penyelenggaraan rekam medis elektronik, keamanan, kerahasiaan, dan interoperabilitas data kesehatan.',
        ]);

        Compliance::create([
            'year' => '2023',
            'category' => 'KESEHATAN',
            'title' => 'UU No. 17/2023',
            'description' => 'Kerangka hukum kesehatan nasional dan transformasi sistem kesehatan berbasis data.',
        ]);

        Compliance::create([
            'year' => '2023',
            'category' => 'KINERJA RS VERTIKAL',
            'title' => 'Kepdirjen Yankes HK.02.02/D/768/2023',
            'description' => 'Indikator kinerja yang menuntut visibilitas klinis, operasional, mutu, dan keuangan.',
        ]);

        Compliance::create([
            'year' => '2026',
            'category' => 'TATA KELOLA DIGITAL',
            'title' => 'Permenkes No. 6/2026',
            'description' => 'Penguatan penyelenggaraan sistem elektronik kesehatan dan standardisasi pertukaran data.',
        ]);

        Compliance::create([
            'year' => 'Aktif',
            'category' => 'EKOSISTEM KLAIM',
            'title' => 'SEB JKN',
            'description' => 'Sinkronisasi kebutuhan layanan JKN, kelengkapan dokumen, dan integrasi kanal BPJS Kesehatan.',
        ]);
    }
}
