<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        Announcement::create([
            'title' => 'Jadwal Ujian Tengah Semester Genap 2026',
            'content' => 'Diberitahukan kepada seluruh siswa bahwa Ujian Tengah Semester (UTS) Genap Tahun Pelajaran 2025/2026 akan dilaksanakan pada tanggal 17-28 Maret 2026. Silakan mempersiapkan diri dengan baik.',
            'author_id' => 1,
        ]);

        Announcement::create([
            'title' => 'Libur Nasional - Hari Raya Idul Fitri',
            'content' => 'Sekolah akan melaksanakan libur Hari Raya Idul Fitri mulai tanggal 28 Maret hingga 10 April 2026. Kegiatan belajar mengajar akan dimulai kembali pada tanggal 13 April 2026.',
            'author_id' => 1,
        ]);

        Announcement::create([
            'title' => 'Pendaftaran Ekstrakurikuler Baru',
            'content' => 'Dibuka pendaftaran ekstrakurikuler baru untuk semester genap. Pilihan ekstrakurikuler: Robotik, Programing Club, English Club, dan Olahraga. Pendaftaran dibuka hingga 31 Januari 2026.',
            'author_id' => 1,
        ]);

        Announcement::create([
            'title' => 'Pengumpulan Tugas Akhir Kelas XII',
            'content' => 'Bagi siswa kelas XII, tugas akhir harus sudah dikumpulkan paling lambat 15 Mei 2026. Untuk informasi lebih lanjut, silakan hubungi wali kelas masing-masing.',
            'author_id' => 1,
        ]);
    }
}
