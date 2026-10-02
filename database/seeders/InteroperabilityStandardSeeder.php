<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InteroperabilityStandard;

class InteroperabilityStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InteroperabilityStandard::create([
            'name' => 'HL7 FHIR',
            'description' => 'Pertukaran sumber daya data kesehatan',
        ]);

        InteroperabilityStandard::create([
            'name' => 'SNOMED CT',
            'description' => 'Terminologi klinis terstruktur',
        ]);

        InteroperabilityStandard::create([
            'name' => 'ICD-9-CM',
            'description' => 'Klasifikasi tindakan medis',
        ]);

        InteroperabilityStandard::create([
            'name' => 'ICD-10',
            'description' => 'Klasifikasi diagnosis',
        ]);

        InteroperabilityStandard::create([
            'name' => 'LOINC',
            'description' => 'Identifikasi observasi laboratorium',
        ]);

        InteroperabilityStandard::create([
            'name' => 'DICOM',
            'description' => 'Pertukaran citra medis',
        ]);

        InteroperabilityStandard::create([
            'name' => 'KFA',
            'description' => 'Kamus Farmasi dan Alat Kesehatan',
        ]);

    }
}
