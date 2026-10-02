<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interoperabilitas = NewsCategory::where(
            'name',
            'Interoperabilitas'
        )->first();

        $inovasi = NewsCategory::where(
            'name',
            'Inovasi Layanan'
        )->first();

        $kebijakan = NewsCategory::where(
            'name',
            'Kebijakan & Kinerja'
        )->first();

        News::create([
            'category_id' => $interoperabilitas->unique_id,

            'title' => 'Integrasi RME dengan SATUSEHAT untuk Tata Kelola Klaim JKN',

            'slug' => Str::slug(
                'Integrasi RME dengan SATUSEHAT untuk Tata Kelola Klaim JKN'
            ),

            'excerpt' => 'Bagaimana kualitas rekam medis elektronik, terminologi klinis, dan validasi dokumen dapat mempercepat klaim tanpa mengurangi akurasi pelayanan.',

            'content' => [
                [
                    'type' => 'summary',
                    'content' => 'Integrasi menghubungkan sistem. Interoperabilitas memastikan data yang berpindah tetap memiliki identitas, struktur, dan makna yang sama bagi pengirim maupun penerima.',
                ],

                [
                    'type' => 'paragraph',
                    'content' => 'Ketika dua aplikasi berhasil bertukar data, pekerjaan belum tentu selesai. Tanpa kesepakatan tentang identitas pasien, kode klinis, waktu kejadian, dan status transaksi, informasi dapat hadir tetapi tetap sulit dipercaya.',
                ],

                [
                    'type' => 'heading',
                    'content' => 'Tiga lapisan yang perlu dijaga',
                ],

                [
                    'type' => 'paragraph',
                    'content' => 'Pertama adalah konektivitas: kemampuan sistem mengirim dan menerima. Kedua adalah struktur: kesepakatan mengenai bentuk, elemen wajib, serta relasi antardata. Ketiga adalah semantik: jaminan bahwa istilah dan kode dipahami dengan makna yang sama.',
                ],

                [
                    'type' => 'points',
                    'items' => [
                        [
                            'title' => 'Konektivitas',
                            'description' => 'Pastikan API, keamanan, antrean, dan monitoring bekerja secara stabil.',
                        ],
                        [
                            'title' => 'Struktur',
                            'description' => 'Gunakan profil data yang jelas agar setiap elemen memiliki tempat.',
                        ],
                        [
                            'title' => 'Semantik',
                            'description' => 'Selaraskan terminologi seperti ICD, SNOMED CT, LOINC, dan KFA.',
                        ],
                    ],
                ],

                [
                    'type' => 'heading',
                    'content' => 'Mulai dari keputusan yang ingin diperbaiki',
                ],

                [
                    'type' => 'paragraph',
                    'content' => 'Roadmap interoperabilitas sebaiknya tidak dimulai dari daftar API. Mulailah dari keputusan pelayanan yang membutuhkan konteks lebih baik: rujukan, pengobatan, hasil penunjang, klaim, atau perencanaan kapasitas.',
                ],

                [
                    'type' => 'quote',
                    'content' => 'Data yang terhubung baru bernilai ketika dapat dipahami dan dipercaya oleh orang yang menggunakannya.',
                ],

                [
                    'type' => 'paragraph',
                    'content' => 'Evaluasi berkala perlu melihat bukan hanya tingkat keberhasilan pengiriman, tetapi juga kelengkapan, konsistensi, ketepatan waktu, dan dampaknya pada pekerjaan pengguna.',
                ],
            ],

            'featured_image' => null,

            'author' => 'Tim Interoperabilitas SPKD',

            'reading_time' => 8,

            'is_featured' => true,

            'is_published' => true,

            'published_at' => '2026-09-12 08:00:00',
        ]);

        News::create([
            'category_id' => $inovasi->unique_id,

            'title' => 'Mobile Clinic RSUD Banten: Membawa Layanan Lebih Dekat',

            'slug' => Str::slug(
                'Mobile Clinic RSUD Banten Membawa Layanan Lebih Dekat'
            ),

            'excerpt' => 'Catatan lapangan tentang layanan bergerak, konektivitas perangkat, dan pengalaman pasien di wilayah yang membutuhkan akses lebih dekat.',

            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => 'Layanan kesehatan bergerak membuka peluang untuk menjangkau masyarakat yang memiliki keterbatasan akses terhadap fasilitas kesehatan.',
                ],
                [
                    'type' => 'heading',
                    'content' => 'Mendekatkan layanan kepada masyarakat',
                ],
                [
                    'type' => 'paragraph',
                    'content' => 'Pemanfaatan teknologi membantu tenaga kesehatan mengelola data dan pelayanan secara lebih terintegrasi.',
                ],
            ],

            'featured_image' => null,

            'author' => 'Tim SPKD',

            'reading_time' => 5,

            'is_featured' => false,

            'is_published' => true,

            'published_at' => '2026-08-28 08:00:00',
        ]);

        News::create([
            'category_id' => $kebijakan->unique_id,

            'title' => 'Indikator Kinerja RS Vertikal dalam Kepdirjen Yankes No. 768/2023',

            'slug' => Str::slug(
                'Indikator Kinerja RS Vertikal dalam Kepdirjen Yankes No. 768/2023'
            ),

            'excerpt' => 'Menerjemahkan indikator kinerja menjadi dashboard, ritme evaluasi, dan keputusan operasional yang dapat ditindaklanjuti setiap hari.',

            'content' => [
                [
                    'type' => 'summary',
                    'content' => 'Indikator kinerja membantu organisasi melihat kondisi layanan secara lebih terukur.',
                ],
                [
                    'type' => 'heading',
                    'content' => 'Dari indikator menjadi keputusan',
                ],
                [
                    'type' => 'paragraph',
                    'content' => 'Data kinerja perlu diterjemahkan menjadi informasi yang dapat digunakan oleh pengelola layanan untuk melakukan evaluasi dan perbaikan.',
                ],
            ],

            'featured_image' => null,

            'author' => 'Tim SPKD',

            'reading_time' => 6,

            'is_featured' => false,

            'is_published' => true,

            'published_at' => '2026-08-14 08:00:00',
        ]);
    }
}
