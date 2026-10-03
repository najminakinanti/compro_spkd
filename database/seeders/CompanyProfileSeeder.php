<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::create([
            'name' => 'PT Sistem Pelayanan Kesehatan dan Data',
            'short_description' => 'Mitra teknologi kesehatan Indonesia untuk layanan yang terintegrasi, aman, efisien, dan berorientasi pada pengalaman manusia.',
            'about_title' => 'SPKD hadir untuk menjembatani kompleksitas transformasi digital dengan realitas operasional rumah sakit di Indonesia.',
            'about_description' => 'Kami membangun ekosistem solusi yang mencakup SIMRS–ERP, interoperabilitas rekam medis, tele-health, integrasi klaim, dan rantai pasok. Seluruhnya dirancang agar data dapat mengalir secara aman dan berguna. Pendekatan kami menggabungkan assessment, implementasi, migrasi data, pelatihan, serta dukungan berkelanjutan. Tim SPKD bekerja berdampingan dengan tenaga kesehatan dan manajemen rumah sakit.',
            'email' => 'halo@spkd.co.id',
            'phone' => '082122140493',
            'address' => 'Jakarta, Indonesia',
            'work_hour' => 'Senin–Jumat, 08.30–17.30 WIB',
        ]);
    }
}
