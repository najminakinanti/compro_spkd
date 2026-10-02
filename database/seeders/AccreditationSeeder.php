<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accreditation;

class AccreditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accreditation::create([
            'name' => 'SATUSEHAT',
            'description' => 'Ekosistem Kemenkes RI',
            'logo' => 'accreditations/satusehat.png',
        ]);

        Accreditation::create([
            'name' => 'Kemenkes RI',
            'description' => 'Regulator Kesehatan',
            'logo' => 'accreditations/kemenkes-ri.png',
        ]);

        Accreditation::create([
            'name' => 'Kominfo RI',
            'description' => 'PSE Lingkup Publik',
            'logo' => 'accreditations/kominfo-ri.png',
        ]);

        Accreditation::create([
            'name' => 'BSSN Siber',
            'description' => 'Standar Keamanan Siber',
            'logo' => 'accreditations/bssn-siber.png',
        ]);

        Accreditation::create([
            'name' => 'BPJS Kesehatan',
            'description' => 'VClaim, PCare & Antrean',
            'logo' => 'accreditations/bpjs-kesehatan.png',
        ]);
    }
}
