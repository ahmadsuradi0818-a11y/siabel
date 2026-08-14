<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    public function run(): void
    {
        $assignments = [
            [
                'name' => 'Tugas Algoritma - Flowchart',
                'description' => 'Buatlah flowchart untuk menentukan bilangan ganjil atau genap',
                'class_id' => 1,
                'teacher_id' => 2,
                'subject_id' => 1,
                'due_date' => '2026-02-15 23:59:00',
            ],
            [
                'name' => 'Tugas Bahasa Indonesia - Teks Eksposisi',
                'description' => 'Buatlah teks eksposisi tentang dampak teknologi terhadap pendidikan minimal 500 kata',
                'class_id' => 1,
                'teacher_id' => 3,
                'subject_id' => 2,
                'due_date' => '2026-02-20 23:59:00',
            ],
            [
                'name' => 'Tugas Pemrograman - Kalkulator Sederhana',
                'description' => 'Buatlah program kalkulator sederhana menggunakan bahasa pemrograman yang dipelajari',
                'class_id' => 3,
                'teacher_id' => 4,
                'subject_id' => 1,
                'due_date' => '2026-02-25 23:59:00',
            ],
            [
                'name' => 'Tugas IPS - Laporan Sosial',
                'description' => 'Buatlah laporan tentang masalah sosial di lingkungan sekitar',
                'class_id' => 3,
                'teacher_id' => 4,
                'subject_id' => 5,
                'due_date' => '2026-03-01 23:59:00',
            ],
            [
                'name' => 'Tugas Seni Budaya - Gambar Poster',
                'description' => 'Buatlah poster bertema "Lingkungan Bersih" dengan teknik digital',
                'class_id' => 2,
                'teacher_id' => 5,
                'subject_id' => 8,
                'due_date' => '2026-03-05 23:59:00',
            ],
            [
                'name' => 'Tugas Akhir - Proyek Website',
                'description' => 'Buatlah website portfolio pribadi menggunakan HTML, CSS, dan JavaScript',
                'class_id' => 5,
                'teacher_id' => 2,
                'subject_id' => 1,
                'due_date' => '2026-05-15 23:59:00',
            ],
        ];

        foreach ($assignments as $assignment) {
            Assignment::create($assignment);
        }
    }
}
